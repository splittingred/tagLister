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
 * @package taglister
 * @subpackage build
 */
$snippets = array();

/* general snippets */
$snippets[1]= $modx->newObject('modSnippet');
$snippets[1]->fromArray(array(
    'id' => 1,
    'name' => 'tagLister',
    'description' => 'A simple tag listing snippet that grabs tags from a TV value.',
    'snippet' => getSnippetContent($sources['elements'].'snippets/taglister.snippet.php'),
),'',true,true);
$properties = include $sources['properties'].'properties.taglister.php';
//$properties = adjustProperties($modx,$properties,$sources['lexicon']);
$snippets[1]->setProperties($properties);
unset($properties);

$snippets[2]= $modx->newObject('modSnippet');
$snippets[2]->fromArray(array(
    'id' => 2,
    'name' => 'tolinks',
    'description' => 'Builds links from tags.',
    'snippet' => getSnippetContent($sources['elements'].'snippets/tolinks.snippet.php'),
),'',true,true);
$properties = include $sources['properties'].'properties.tolinks.php';
//$properties = adjustProperties($modx,$properties,$sources['lexicon']);
$snippets[2]->setProperties($properties);
unset($properties);

$snippets[3]= $modx->newObject('modSnippet');
$snippets[3]->fromArray(array(
    'id' => 3,
    'name' => 'getResourcesTag',
    'description' => 'Wraps the getResources and getPage snippets to do tag-based navigation. Requires both of those snippets to run.',
    'snippet' => getSnippetContent($sources['elements'].'snippets/getresourcestag.snippet.php'),
),'',true,true);
$properties = include $sources['properties'].'properties.getresourcestag.php';
//$properties = adjustProperties($modx,$properties,$sources['lexicon']);
$snippets[3]->setProperties($properties);
unset($properties);

return $snippets;