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
 * Wrap the getPage/getResources call to implement tagging. Needs getPage and
 * getResources to be installed to work.
 *
 * @package taglister
 * @var modX $modx
 * @var array $scriptProperties
 */

/* Source (TV) of tags to check in */
$tagKeyVar = $modx->getOption('tagKeyVar',$scriptProperties,'key');
$tagKey = (!empty($tagKeyVar) && !empty($_GET[$tagKeyVar]))? $_GET[$tagKeyVar] : $modx->getOption('tagKey',$scriptProperties,'tags');
/* Allows use of multiple tagKey TVs */
$tagKey = explode(',',$tagKey);

/* Source (REQUEST) of tag to search for */
$tagRequestParam = $modx->getOption('tagRequestParam',$scriptProperties,'tag');
$tag = $modx->getOption('tag',$scriptProperties,urldecode($_GET[$tagRequestParam]));

$grSnippet = $modx->getOption('grSnippet',$scriptProperties,'getPage');
if (!empty($tag)) {
    $tag = $modx->stripTags($tag);
    $tagSearchType = $modx->getOption('tagSearchType',$scriptProperties,'exact');

    $tvFilters = array();
    foreach ($tagKey as $tvName) {
        if ($tagSearchType == 'contains') {
            $tvFilters[] = $tvName.'==%'.$tag.'%';
        } elseif ($tagSearchType == 'beginswith') {
            $tvFilters[] = $tvName.'==%'.$tag.'';
        } elseif ($tagSearchType == 'endswith') {
            $tvFilters[] = $tvName.'=='.$tag.'%';
        } else {
            $tvFilters[] = $tvName.'=='.$tag.'';
        }
    }
    $scriptProperties['tvFilters'] = implode('||',$tvFilters);
}

$elementObj = $modx->getObject('modSnippet', array('name' => $grSnippet));
if ($elementObj) {
    $elementObj->setCacheable(false);
    $output = $elementObj->process($scriptProperties);
} else {
    return 'You must have getPage and getResources downloaded and installed to use this snippet.';
}
return $output;