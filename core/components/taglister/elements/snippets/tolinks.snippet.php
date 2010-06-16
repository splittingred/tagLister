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
$items = $modx->getOption('items',$scriptProperties,'');
if (empty($items)) return '';
$inputDelim = $modx->getOption('inputDelim',$scriptProperties,',');
$outputDelim = $modx->getOption('outputDelim',$scriptProperties,', ');
$key = $modx->getOption('key',$scriptProperties,'tag');
$target = !empty($scriptProperties['target']) ? $scriptProperties['target'] : $modx->resource->get('id');

$items = explode($inputDelim,$items);
$tags = array();
foreach ($items as $item) {
    $item = trim($item);
    $url = $modx->makeUrl($target,'','?'.$key.'='.$item);
    $url = str_replace(' ','+',$url);
    $tags[] = '<a href="'.$url.'">'.$item.'</a>';
}

return trim(implode($outputDelim,$tags),$outputDelim);