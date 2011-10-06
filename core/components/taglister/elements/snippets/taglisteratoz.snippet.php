<?php
/**
 * tagLister
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of tagLister, a simple tag listing snippet for MODx
 * Revolution.
 *
 * tagLister is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * tagLister is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * tagLister; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package taglister
 * 
 * tagListerAtoZ snippet by Mark Hamstra <hello@markhamstra.com>
 *
 * @var modX $modx
 * @var TagLister $tagLister
 * @var array $scriptProperties
 */
$tagLister = $modx->getService('taglister','TagLister',$modx->getOption('taglister.core_path',null,$modx->getOption('core_path').'components/taglister/').'model/taglister/',$scriptProperties);
if (!($tagLister instanceof TagLister)) return '';
$modx->lexicon->load('taglister:default');

/* Instantiate properties */
$defaults = array(
    'tvs' => null,
    'target' => 1,
    'tagKey' => 'tag',
    'tagSeparator' => "\n",
    'groupSeparator' => "\n",
    'limit' => 2,
    'toLower' => false,
    'modx_charset' => 'UTF-8',
    'use_multibyte' => false,
    'tvDelimiter' => ',',
    'groupNumeric' => true,
    'numericHeader' => '0-9',
    'toPlaceholder' => '',

    'tplTag' => 'tag',
    'tplGroup' => 'atozGroup',
    'tplOuter' => 'atozOuter',

    'cls' => '',
    'altCls' => 'alt',
    'firstCls' => 'first',
    'lastCls' => 'last',
    'activeCls' => '',
    'weights' => 0,
    'weightCls' => '',
);

$scriptProperties = array_merge($defaults,$scriptProperties);

$tagList = $tagLister->getAllTags($scriptProperties['tvs'],$scriptProperties,true);

ksort($tagList);
$numTags = count($tagList,1);
$output = array();
foreach ($tagList as $group => $groupTags) {
    $groupOutput = array();
    $i = 0;
    foreach ($groupTags as $tag => $count) {

        if ($i >= $scriptProperties['limit']) break;
        $tagCls = $scriptProperties['cls'].((!empty($scriptProperties['altCls']) && $i % 2)? ' '.$scriptProperties['altCls'] : '');
        if (!empty($scriptProperties['firstCls']) && $i == 0) $tagCls .= ' '.$scriptProperties['firstCls'];
        if (!empty($scriptProperties['lastCls']) && ($i+1 >= $scriptProperties['limit'] || $i == $count)) $tagCls .= ' '.$scriptProperties['lastCls'];
        /* handle weighting for css */
        if (!empty($scriptProperties['weights']) && !empty($scriptProperties['weightCls'])) $tagCls .= ' '.$scriptProperties['weightCls'].ceil($count / (max($tagList) / $scriptProperties['weights']));

        $phs = array(
            'tag' => $tag,
            'tagVar' => $scriptProperties['tagVar'],
            'tagKey' => $scriptProperties['tvs'],
            'tagKeyVar' => $scriptProperties['tagKeyVar'],
            'count' => $count,
            'target' => $scriptProperties['target'],
            'cls' => $tagCls,
            'idx' => $i,
        );
        $groupOutput[] = $tagLister->getChunk($scriptProperties['tplTag'],$phs);
        $i++;
    }
    $phs = array(
        'group' => $group,
        'count' => count($groupTags),
        'wrapper' => implode($scriptProperties['tagSeparator'], $groupOutput),
    );
    $output[] = $tagLister->getChunk($scriptProperties['tplGroup'],$phs);
}

$phs = array(
    'countgroups' => count($output),
    'counttags' => $numTags,
    'wrapper' => implode($scriptProperties['groupSeparator'], $output),
);

$output = $tagLister->getChunk($scriptProperties['tplOuter'],$phs);

if (!empty($scriptProperties['toPlaceholder'])) {
    $modx->toPlaceholder($scriptProperties['toPlaceholder'],$output);
    return '';
}
return $output;


?>