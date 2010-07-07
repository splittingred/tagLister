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
 * tolinks snippet. Creates links out of tags.
 *
 * @package taglister
 */
$tagLister = $modx->getService('taglister','TagLister',$modx->getOption('taglister.core_path',null,$modx->getOption('core_path').'components/taglister/').'model/taglister/',$scriptProperties);
if (!($tagLister instanceof TagLister)) return '';

/* setup default properties */
$inputDelim = $modx->getOption('inputDelim',$scriptProperties,',');
$outputDelim = $modx->getOption('outputDelim',$scriptProperties,', ');
$key = $modx->getOption('key',$scriptProperties,'tag');
$target = !empty($scriptProperties['target']) ? $scriptProperties['target'] : $modx->resource->get('id');
$tpl = $modx->getOption('tpl',$scriptProperties,'link');
$cls = $modx->getOption('cls',$scriptProperties,'tl-tag');

/* get items */
$items = $modx->getOption('items',$scriptProperties,'');
if (empty($items)) return '';
$items = explode($inputDelim,$items);

/* iterate */
$tags = array();
foreach ($items as $item) {
    $itemArray = array();
    $itemArray['item'] = trim($item);
    $itemArray['url'] = $modx->makeUrl($target,'','?'.$key.'='.$itemArray['item']);
    $itemArray['url'] = str_replace(' ','+',$itemArray['url']);
    $itemArray['cls'] = $cls;
    $tags[] = $tagLister->getChunk($tpl,$itemArray);
}

/* output */
$toPlaceholder = $modx->getOption('toPlaceholder',$scriptProperties,false);
$output = trim(implode($outputDelim,$tags),$outputDelim);
if ($toPlaceholder) {
    $modx->setPlaceholder($toPlaceholder,$output);
    return '';
}
return $output;