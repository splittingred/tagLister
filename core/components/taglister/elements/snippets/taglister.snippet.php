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
 */
/**
 * tagLister snippet
 *
 * @package taglister
 */
$tagLister = $modx->getService('taglister','TagLister',$modx->getOption('taglister.core_path',null,$modx->getOption('core_path').'components/taglister/').'model/taglister/',$scriptProperties);
if (!($tagLister instanceof TagLister)) return '';

/* setup default properties */
$tpl = $modx->getOption('tpl',$scriptProperties,'tag');
$tv = $modx->getOption('tv',$scriptProperties,'tags');
$tvDelimiter = $modx->getOption('tvDelimiter',$scriptProperties,',');
$target = $modx->getOption('target',$scriptProperties,1);
$tagVar = $modx->getOption('tagVar',$scriptProperties,'tag');
$limit = $modx->getOption('limit',$scriptProperties,10);
$sortBy = $modx->getOption('sortBy',$scriptProperties,'count');
$sortDir = $modx->getOption('sortDir',$scriptProperties,'ASC');
$cls = $modx->getOption('cls',$scriptProperties,'tl-tag');
$altCls = $modx->getOption('altCls',$scriptProperties,'tl-tag-alt');
$firstCls = $modx->getOption('firstCls',$scriptProperties,'');
$lastCls = $modx->getOption('lastCls',$scriptProperties,'');

/* get TV values */
$c = $modx->newQuery('modTemplateVarResource');
$c->innerJoin('modTemplateVar','TemplateVar');
$c->innerJoin('modResource','Resource');
$tvPk = (int)$tv;
if (!empty($tvPk)) {
    $c->where(array('TemplateVar.id' => $tvPk));
} else {
    $c->where(array('TemplateVar.name' => $tv));
}

if (!$modx->getOption('includeDeleted',$scriptProperties,false)) {
    $c->where(array('Resource.deleted' => 0));
}
if (!$modx->getOption('includeUnpublished',$scriptProperties,false)) {
    $c->where(array('Resource.published' => 1));
}
$tags = $modx->getCollection('modTemplateVarResource',$c);

/* parse TV values */
$output = array();
$tagList = array();
foreach ($tags as $tag) {
   $v = $tag->get('value');
   $vs = explode($tvDelimiter,$v);
   foreach ($vs as $key) {
      $key = trim($key);
      if (empty($tagList[$key])) {
         $tagList[$key] = 1;
      } else { $tagList[$key]++; }
   }
}
switch ($sortBy.'-'.$sortDir) {
    case 'tag-ASC': ksort($tagList); break;
    case 'tag-DESC': krsort($tagList); break;
    case 'count-DESC': asort($tagList); break;
    case 'count-ASC': default: arsort($tagList); break;
}

$i = 0;
foreach ($tagList as $tag => $count) {
    if ($i >= $limit) break;
    $tagCls = $cls.($i % 2 ? ' '.$altCls : '');
    if (!empty($firstCls) && $i == 0) $tagCls .= ' '.$firstCls;
    if (!empty($lastCls) && $i+1 >= $limit) $tagCls .= ' '.$lastCls;

    $output[] = $tagLister->getChunk($tpl,array(
        'tag' => $tag,
        'tagVar' => $tagVar,
        'count' => $count,
        'target' => $target,
        'cls' => $tagCls,
    ));
    $i++;
}

$output = implode("\n",$output);
$toPlaceholder = $modx->getOption('toPlaceholder',$scriptProperties,false);
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder,$output);
    return '';
}
return $output;