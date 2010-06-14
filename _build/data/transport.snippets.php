<?php
/**
 * @package archivist
 * @subpackage build
 */
$snippets = array();

/* general snippets */
$snippets[1]= $modx->newObject('modSnippet');
$snippets[1]->fromArray(array(
    'id' => 1,
    'name' => 'tagLister',
    'description' => 'A simple tag listing snippet that grabs tags from a TV value.',
    'snippet' => getSnippetContent($sources['elements'].'snippets/snippet.taglister.php'),
),'',true,true);
$properties = include $sources['properties'].'properties.taglister.php';
//$properties = adjustProperties($modx,$properties,$sources['lexicon']);
$snippets[1]->setProperties($properties);
unset($properties);

return $snippets;