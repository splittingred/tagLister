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
 * @var modX $modx
 * @var TagLister $tagLister
 * @var array $scriptProperties
 *
 * @package taglister
 */
$tagLister = $modx->getService('taglister','TagLister',$modx->getOption('taglister.core_path',null,$modx->getOption('core_path').'components/taglister/').'model/taglister/',$scriptProperties);
if (!($tagLister instanceof TagLister)) return '';
$modx->lexicon->load('taglister:default');

/* setup default properties */
$tpl = $modx->getOption('tpl',$scriptProperties,'tag');
$tv = $modx->getOption('tv',$scriptProperties,'tags');
$tvDelimiter = $modx->getOption('tvDelimiter',$scriptProperties,',');
$target = $modx->getOption('target',$scriptProperties,1);
$tagVar = $modx->getOption('tagVar',$scriptProperties,'tag');
$tagKeyVar = $modx->getOption('tagKeyVar',$scriptProperties,'key');
$limit = $modx->getOption('limit',$scriptProperties,10);
$sortBy = strtolower($modx->getOption('sortBy',$scriptProperties,'count'));
$sortDir = strtoupper($modx->getOption('sortDir',$scriptProperties,'ASC'));
$cls = $modx->getOption('cls',$scriptProperties,'');
$altCls = $modx->getOption('altCls',$scriptProperties,'');
$firstCls = $modx->getOption('firstCls',$scriptProperties,'');
$lastCls = $modx->getOption('lastCls',$scriptProperties,'');
$activeCls = $modx->getOption('activeCls',$scriptProperties,'');
$activeTag = isset($_REQUEST[$tagVar]) ? $modx->stripTags(urldecode($_REQUEST[$tagVar])) : '';
$activeKey = isset($_REQUEST[$tagKeyVar]) ? $modx->stripTags(urldecode($_REQUEST[$tagKeyVar])) : '';
$all = $modx->getOption('all',$scriptProperties,false);
$toLower = $modx->getOption('toLower',$scriptProperties,false);
$weights = $modx->getOption('weights',$scriptProperties,0);
$weightCls = $modx->getOption('weightCls',$scriptProperties,'');
$useTagFurl = $modx->getOption('useTagFurl',$scriptProperties,false);
$furlKey = $modx->getOption('furlKey',$scriptProperties,'tags');


/* get TV values */
$c = $modx->newQuery('modTemplateVarResource');
$c->innerJoin('modTemplateVar','TemplateVar');
$c->innerJoin('modResource','Resource');
$c->leftJoin('modUser','CreatedBy','CreatedBy.id = Resource.createdby');
$c->leftJoin('modUser','PublishedBy','PublishedBy.id = Resource.publishedby');
$c->leftJoin('modUser','EditedBy','EditedBy.id = Resource.editedby');
$tvPk = (int)$tv;
if (!empty($tvPk)) {
    $c->where(array('TemplateVar.id' => $tvPk));
} else {
    $c->where(array('TemplateVar.name' => $tv));
}
/* parents support */
$parents = isset($parents) ? explode(',', $parents) : array();
if (!empty($parents)) {
    $depth = isset($depth) ? (integer) $depth : 10;
    $children = array();
    foreach ($parents as $parent) {
        $kids = $modx->getChildIds($parent,$depth);
        if (!empty($kids)) {
            $children = array_merge($children,$kids);
        }
    }
    if (!empty($children)) {
        $children = array_unique($children);
        $parents = array_merge($parents,$children);
    }
    $parents = array_unique($parents);
    if (!empty($parents)) {
        $c->where(array(
            'Resource.id:IN' => $parents,
        ));
    }
}
if (!$modx->getOption('includeDeleted',$scriptProperties,false)) {
    $c->where(array('Resource.deleted' => 0));
}
if (!$modx->getOption('includeUnpublished',$scriptProperties,false)) {
    $c->where(array('Resource.published' => 1));
}
/* json where support */
$where = $modx->getOption('where',$scriptProperties,'');
if (!empty($where)) {
    $where = $modx->fromJSON($where);
    if (is_array($where) && !empty($where)) {
        $c->where($where);
    }
}
if ($sortBy == 'publishedon') {
    $c->sortby('Resource.publishedon',$sortDir);
} else if (in_array($sortBy,array('rand','random','rand()'))) {
    $c->sortby('RAND()','');
}
$tags = $modx->getCollection('modTemplateVarResource',$c);

/* parse TV values */
$output = array();
$tagList = array();
$encoding = $modx->getOption('modx_charset',$scriptProperties,'UTF-8');
$useMultibyte = $modx->getOption('use_multibyte',$scriptProperties,false);
/** @var modTemplateVarResource $tag */
foreach ($tags as $tag) {
   $v = $tag->get('value');
   $vs = explode($tvDelimiter,$v);
   foreach ($vs as $key) {
      $key = trim($key);
      if (empty($key)) continue;
      if ($toLower) { /* allow for case-insensitive filtering */
          $key = $useMultibyte ? mb_strtolower($key,$encoding) : strtolower($key);
      }
      /* increment tag count */
      if (empty($tagList[$key])) {
         $tagList[$key] = 1;
      } else { $tagList[$key]++; }
   }
}

/* sort */
switch ($sortBy.'-'.$sortDir) {
    case 'publishedon-DESC': case 'publishedon-ASC': break;
    case 'tag-ASC': ksort($tagList); break;
    case 'tag-DESC': krsort($tagList); break;
    case 'count-DESC': asort($tagList); break;
    case 'count-ASC': default: arsort($tagList); break;
    case 'rand-ASC': case 'random-ASC': case 'rand()-asc': $tagList = $tagLister->ashuffle($tagList); break;
}

/* iterate */
$totalTags = 0;
$i = $all ? 1 : 0;
foreach ($tagList as $tag => $count) {
    if ($i >= $limit) break;
    $tagCls = $cls.((!empty($altCls) && $i % 2)? ' '.$altCls : '');
    if (!empty($firstCls) && $i == 0) $tagCls .= ' '.$firstCls;
    if (!empty($lastCls) && ($i+1 >= $limit || $i == $count)) $tagCls .= ' '.$lastCls;
    /* if tag is currently being viewed, mark as active */
    if (!empty($activeCls) && $tag==$activeTag && (empty($activeKey) || $tv==$activeKey)) $tagCls .= ' '.$activeCls;
    /* handle weighting for css */
    if (!empty($weights) && !empty($weightCls)) $tagCls .= ' '.$weightCls.ceil($count / (max($tagList) / $weights));

    $tagArray = array(
        'tag' => $tag,
        'tagVar' => $tagVar,
        'tagKey' => $tv,
        'tagKeyVar' => $tagKeyVar,
        'count' => $count,
        'target' => $target,
        'cls' => $tagCls,
        'idx' => $i,
    );
    $tagParams = array();
    if (empty($useTagFurl)) {
        $tagParams[$tagVar] = $tag;
        $tagParams[$tagKeyVar] = $tv;
    }
    $tagArray['url'] = $modx->makeUrl($target,'',$tagParams);
    if (!empty($useTagFurl)) {
        $tagArray['url'] = rtrim($tagArray['url'],'/').'/'.(!empty($furlKey) ? $furlKey : $tv).'/'.urlencode($tag);
    }

    $output[] = $tagLister->getChunk($tpl,$tagArray);
    $totalTags += $count;
    $i++;
}

if ($all) {
    $allTpl = $modx->getOption('allTpl',$scriptProperties,'all');
    $allChunk = $tagLister->getChunk($allTpl,array(
        'tag' => !empty($scriptProperties['allText']) ? $scriptProperties['allText'] : $modx->lexicon('all_tags'),
        'tagVar' => $tagVar,
        'tagKey' => $tv,
        'tagKeyVar' => $tagKeyVar,
        'count' => $totalTags,
        'target' => $target,
        'cls' => $cls,
        'url' => $useTagFurl ? $modx->makeUrl($target).$tv.'/' : $modx->makeUrl($target,'',array(
            $tagVar => '',
            $tagKeyVar => $tv,
        )),
    ));
    if ($modx->getOption('allPosition',$scriptProperties,'B') == 'T') {
        array_unshift($output,$allChunk);
    } else {
        array_push($output,$allChunk);
    }
}

/* output */
$outputSeparator = $modx->getOption('outputSeparator',$scriptProperties,"\n");
$output = implode($outputSeparator,$output);
$toPlaceholder = $modx->getOption('toPlaceholder',$scriptProperties,false);
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder,$output);
    return '';
}
return $output;