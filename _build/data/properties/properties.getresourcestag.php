<?php
/**
 * @package getresourcestag
 * @subpackage build
 */
$properties = array(
     array(
        'name' => 'tpl',
        'desc' => 'prop_grt.tpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'tplOdd',
        'desc' => 'prop_grt.tplodd_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'tplFirst',
        'desc' => 'prop_grt.tplfirst_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'tplLast',
        'desc' => 'prop_grt.tpllast_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'sortby',
        'desc' => 'prop_grt.sortby_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'publishedon',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'sortbyAlias',
        'desc' => 'prop_grt.sortbyalias_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'sortbyEscaped',
        'desc' => 'prop_grt.sortbyescaped_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '0',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'sortdir',
        'desc' => 'prop_grt.sortdir_desc',
        'type' => 'list',
        'options' => array(
            array('text' => 'ascending','vaue' => 'ASC'),
            array('text' => 'descending','value' => 'DESC'),
        ),
        'value' => 'DESC',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'limit',
        'desc' => 'prop_grt.limit_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '5',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'offset',
        'desc' => 'prop_grt.offset_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '0',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'tvFilters',
        'desc' => 'prop_grt.tvfilters_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'depth',
        'desc' => 'prop_grt.depth_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '10',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'parents',
        'desc' => 'prop_grt.parents_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'includeContent',
        'desc' => 'prop_grt.includecontent_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'includeTVs',
        'desc' => 'prop_grt.includetvs_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'processTVs',
        'desc' => 'prop_grt.processtvs_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'tvPrefix',
        'desc' => 'prop_grt.tvprefix_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'tv.',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'idx',
        'desc' => 'prop_grt.idx_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'first',
        'desc' => 'prop_grt.first_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'last',
        'desc' => 'prop_grt.last_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'debug',
        'desc' => 'prop_grt.debug_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'namespace',
        'desc' => 'prop_grt.namespace_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'taglister:properties',
    )
    ,array(
        'name' => 'limit',
        'desc' => 'prop_grt.limit_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '10',
        'lexicon' => 'taglister:properties',
    )
    ,array(
        'name' => 'offset',
        'desc' => 'prop_grt.offset_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '0',
        'lexicon' => 'taglister:properties',
    )
    ,array(
        'name' => 'page',
        'desc' => 'prop_grt.page_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '0',
        'lexicon' => 'taglister:properties',
    )
    ,array(
        'name' => 'pageVarKey',
        'desc' => 'prop_grt.pagevarkey_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'page',
        'lexicon' => 'taglister:properties',
    )
    ,array(
        'name' => 'totalVar',
        'desc' => 'prop_grt.totalvar_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'total',
        'lexicon' => 'taglister:properties',
    )
    ,array(
        'name' => 'pageLimit',
        'desc' => 'prop_grt.pagelimit_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '5',
        'lexicon' => 'taglister:properties',
    )
    ,array(
        'name' => 'elementClass',
        'desc' => 'prop_grt.elementclass_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'modSnippet',
        'lexicon' => 'taglister:properties',
    )
    ,array(
        'name' => 'element',
        'desc' => 'prop_grt.element_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'getResources',
        'lexicon' => 'taglister:properties',
    )
    ,array(
        'name' => 'pageNavVar',
        'desc' => 'prop_grt.pagenavvar_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'page.nav',
        'lexicon' => 'taglister:properties',
    )
    ,array(
        'name' => 'pageNavTpl',
        'desc' => 'prop_grt.pagenavtpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>',
        'lexicon' => 'taglister:properties',
    )
    ,array(
        'name' => 'pageActiveTpl',
        'desc' => 'prop_grt.pageactivetpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '<li[[+activeClasses]]><a[[+activeClasses:default=` class="active"`]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>',
        'lexicon' => 'taglister:properties',
    )
    ,array(
        'name' => 'pageFirstTpl',
        'desc' => 'prop_grt.pagefirsttpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>',
        'lexicon' => 'taglister:properties',
    )
    ,array(
        'name' => 'pageLastTpl',
        'desc' => 'prop_grt.pagelasttpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>',
        'lexicon' => 'taglister:properties',
    )
    ,array(
        'name' => 'pagePrevTpl',
        'desc' => 'prop_grt.pageprevtpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>',
        'lexicon' => 'taglister:properties',
    )
    ,array(
        'name' => 'pageNextTpl',
        'desc' => 'prop_grt.pagenexttpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>',
        'lexicon' => 'taglister:properties',
    )
    ,array(
        'name' => 'tagKey',
        'desc' => 'prop_grt.tagkey_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'tags',
        'lexicon' => 'taglister:properties',
    )
    ,array(
        'name' => 'tagKeyVar',
        'desc' => 'prop_grt.tagkeyvar_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'key',
        'lexicon' => 'taglister:properties',
    )
    ,array(
        'name' => 'tagRequestParam',
        'desc' => 'prop_grt.tagrequestparam_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'tag',
        'lexicon' => 'taglister:properties',
    )
    ,array(
        'name' => 'tagSearchType',
        'desc' => 'prop_grt.tagsearchtype_desc',
        'type' => 'list',
        'options' => array(
            array('text' => 'grt.tst_contains','value' => 'contains'),
            array('text' => 'grt.tst_exact','value' => 'exact'),
            array('text' => 'grt.tst_beginswith','value' => 'beginswith'),
            array('text' => 'grt.tst_endswith','value' => 'endswith'),
            array('text' => 'grt.tst_within','value' => 'within'),
        ),
        'value' => 'contains',
        'lexicon' => 'taglister:properties',
    )
);

return $properties;