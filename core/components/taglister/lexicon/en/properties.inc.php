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
 * Properties English lexicon for tagLister
 *
 * @package taglister
 */

/* property options */
$_lang['bottom'] = 'Bottom';
$_lang['top'] = 'Top';
$_lang['ascending'] = 'Ascending';
$_lang['descending'] = 'Descending';
$_lang['count'] = 'Count';
$_lang['tag'] = 'Tag';

/* tagLister snippet */
$_lang['prop_taglister.tpl_desc'] = 'Name of a Chunk that will be used for each result.';
$_lang['prop_taglister.tv_desc'] = 'The name or ID of the TV being used for tags.';
$_lang['prop_taglister.tvdelimiter_desc'] = 'The delimiter being used between tags in the TV. Usually a comma, sometimes a space.';
$_lang['prop_taglister.target_desc'] = 'The target Resource to point the tag links to. Will default to the current Resource.';
$_lang['prop_taglister.tagvar_desc'] = 'The REQUEST var of the tag value. Used in the links generated for each tag result.';
$_lang['prop_taglister.tagkeyvar_desc'] = 'The REQUEST var of the tv name. Used in the links generated for each tag result';
$_lang['prop_taglister.sortby_desc'] = 'Field to sort by. Defaults to count. Can be either tag or count.';
$_lang['prop_taglister.sortdir_desc'] = 'Order which to sort by. Defaults to ASC.';
$_lang['prop_taglister.limit_desc'] = 'Limits the number of resources returned. Defaults to 10.';
$_lang['prop_taglister.parents_desc'] = 'Optional. Comma-delimited list of ids serving as parents.';
$_lang['prop_taglister.depth_desc'] = 'Integer value indicating depth to search for resources from each parent. Defaults to 10.';
$_lang['prop_taglister.includedeleted_desc'] = 'Include tags from deleted Resources in the results.';
$_lang['prop_taglister.includeunpublished_desc'] = 'Include tags from unpublished Resources in the results.';
$_lang['prop_taglister.where_desc'] = 'A criteria in JSON format for filtering results.';
$_lang['prop_taglister.cls_desc'] = 'Optional. A CSS class to add to each row. If empty will ignore.';
$_lang['prop_taglister.altcls_desc'] = 'Optional. A CSS class to add to each alternate row. If empty will ignore.';
$_lang['prop_taglister.firstcls_desc'] = 'Optional. A CSS class to add to the first row. If empty will ignore.';
$_lang['prop_taglister.lastcls_desc'] = 'Optional. A CSS class to add to the last row. If empty will ignore.';
$_lang['prop_taglister.tolower_desc'] = 'Optional. If set to true, will allow case-insensitive tag listing.';
$_lang['prop_taglister.all_desc'] = 'Whether or not to show an "All Tags" result.';
$_lang['prop_taglister.alltpl_desc'] = 'The chunk for showing the all tags link.';
$_lang['prop_taglister.allposition_desc'] = 'Whether or not the all tags link should be at the top (T) or bottom (B) of the results.';
$_lang['prop_taglister.alltext_desc'] = 'The text for the all tags link. Defaults to "All Tags".';
$_lang['prop_taglister.toplaceholder_desc'] = 'If set, will set the output of this snippet to this placeholder rather than output it.';
$_lang['prop_taglister.outputseparator_desc'] = 'The separator for output for each result.';
$_lang['prop_taglister.activecls_desc'] = 'Optional. A CSS class to add to the active tag. If empty will ignore.';
$_lang['prop_taglister.weights_desc'] = 'Optional. The number of weights to calculate. 0 or empty will disable weights.';
$_lang['prop_taglister.weightcls_desc'] = 'Optional. A CSS class to prefix to each weight. If empty will disable weights.';

/* tolinks snippet */
$_lang['prop_tolinks.items_desc'] = 'The items to turn into links.';
$_lang['prop_tolinks.tpl_desc'] = 'Name of a Chunk that will be used for each result.';
$_lang['prop_tolinks.target_desc'] = 'The ID of the Resource that links will point to. Defaults to the current Resource.';
$_lang['prop_tolinks.inputdelim_desc'] = 'The delimiter that is used on the items property. Defaults to a comma.';
$_lang['prop_tolinks.outputdelim_desc'] = 'The delimiter that separates the links that are outputted. Defaults to a comma.';
$_lang['prop_tolinks.tagrequestparam_desc'] = 'The REQUEST var key that will be used in generating the links.';
$_lang['prop_tolinks.cls_desc'] = 'Name of a CSS class to add to each result.';
$_lang['prop_tolinks.toplaceholder_desc'] = 'If set, will set the output of this snippet to this placeholder rather than output it.';
$_lang['prop_tolinks.tagkey_desc'] = 'The REQUEST var of the tag value. Used in the links generated for each tag result.';
$_lang['prop_tolinks.tagkeyvar_desc'] = 'The REQUEST var of the tv name. Used in the links generated for each tag result';

/* getResourcesTag snippet */
$_lang['grt.tst_beginswith'] = 'Begins With';
$_lang['grt.tst_contains'] = 'Contains';
$_lang['grt.tst_endswith'] = 'Ends With';
$_lang['grt.tst_exact'] = 'Exact';
$_lang['grt.tst_within'] = 'Within';
$_lang['prop_grt.tpl_desc'] = 'Name of a chunk serving as a resource template. NOTE: if not provided, properties are dumped to output for each resource.';
$_lang['prop_grt.tplodd_desc'] = 'Name of a chunk serving as resource template for resources with an odd idx value (see idx property).';
$_lang['prop_grt.tplfirst_desc'] = 'Name of a chunk serving as resource template for the first resource (see first property).';
$_lang['prop_grt.tpllast_desc'] = 'Name of a chunk serving as resource template for the last resource (see last property).';
$_lang['prop_grt.sortby_desc'] = 'Field to sort by. Defaults to publishedon.';
$_lang['prop_grt.sortbyalias_desc'] = 'Query alias for sortby field. Defaults to an empty string.';
$_lang['prop_grt.sortbyescaped_desc'] = 'Determines if the field name specified in sortby should be escaped. Defaults to 0.';
$_lang['prop_grt.sortdir_desc'] = 'Order which to sort by. Defaults to DESC.';
$_lang['prop_grt.limit_desc'] = 'Limits the number of resources returned. Defaults to 5.';
$_lang['prop_grt.offset_desc'] = 'An offset of resources returned by the criteria to skip.';
$_lang['prop_grt.tvfilters_desc'] = 'Delimited-list of TemplateVar values to filter resources by. Supports two delimiters and two value search formats. THe first delimeter || represents a logical OR and the primary grouping mechanism.  Within each group you can provide a comma-delimited list of values. These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the value, indicating you are searching for the value in any TemplateVar tied to the Resource. An example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`. <br />NOTE: filtering by values uses a LIKE query and % is considered a wildcard. <br />ANOTHER NOTE: This only looks at the raw value set for specific Resource, i. e. there must be a value specifically set for the Resource and it is not evaluated.';
$_lang['prop_grt.depth_desc'] = 'Integer value indicating depth to search for resources from each parent. Defaults to 10.';
$_lang['prop_grt.parents_desc'] = 'Optional. Comma-delimited list of ids serving as parents.';
$_lang['prop_grt.includecontent_desc'] = 'Indicates if the content of each resource should be returned in the results. Defaults to false.';
$_lang['prop_grt.includetvs_desc'] = 'Indicates if TemplateVar values should be included in the properties available to each resource template. Defaults to false.';
$_lang['prop_grt.processtvs_desc'] = 'Indicates if TemplateVar values should be rendered as they would on the resource being summarized. Defaults to false.';
$_lang['prop_grt.tvprefix_desc'] = 'The prefix for TemplateVar properties. Defaults to: tv.';
$_lang['prop_grt.idx_desc'] = 'You can define the starting idx of the resources, which is an property that is incremented as each resource is rendered.';
$_lang['prop_grt.first_desc'] = 'Define the idx which represents the first resource (see tplFirst). Defaults to 1.';
$_lang['prop_grt.last_desc'] = 'Define the idx which represents the last resource (see tplLast). Defaults to the number of resources being summarized + first - 1';
$_lang['prop_grt.debug_desc'] = 'If true, will send the SQL query to the MODx log. Defaults to false.';
$_lang['prop_grt.namespace_desc'] = 'An execution namespace that serves as a prefix for placeholders set by a specific instance of the getPage snippet.';
$_lang['prop_grt.limit_desc'] = 'The result limit per page; can be overridden in the $_REQUEST.';
$_lang['prop_grt.offset_desc'] = 'The offset, or record position to start at within the collection for rendering results for the current page; should be calculated based on page variable set in pageVarKey.';
$_lang['prop_grt.page_desc'] = 'The page to display; this is determined based on the value indicated by the page variable set in pageVarKey, typically in the $_REQUEST.';
$_lang['prop_grt.pagevarkey_desc'] = 'The key of a property that indicates the current page.';
$_lang['prop_grt.totalvar_desc'] = 'The key of a placeholder that must contain the total records in the limitable collection being paged.';
$_lang['prop_grt.pagelimit_desc'] = 'The maximum number of pages to display when rendering paging controls.';
$_lang['prop_grt.element_desc'] = 'The element name that will be called by the getPage instance.';
$_lang['prop_grt.elementclass_desc'] = 'The class of element that will be called by the getPage snippet instance.';
$_lang['prop_grt.pagenavvar_desc'] = 'The key of a placeholder to be set with the paging navigation controls.';
$_lang['prop_grt.pagenavtpl_desc'] = 'Content representing a single page navigation control.';
$_lang['prop_grt.pagefirsttpl_desc'] = 'Content representing the first page navigation control.';
$_lang['prop_grt.pagelasttpl_desc'] = 'Content representing the last page navigation control.';
$_lang['prop_grt.pageprevtpl_desc'] = 'Content representing the previous page navigation control.';
$_lang['prop_grt.pagenexttpl_desc'] = 'Content representing the next page navigation control.';
$_lang['prop_grt.pageactivetpl_desc'] = 'Content representing the current page navigation control.';
$_lang['prop_grt.tagkey_desc'] = 'The key to set the tags filter by.';
$_lang['prop_grt.tagkeyvar_desc'] = 'Optional. Name of the REQUEST param key. If exists in the REQUEST - it overrides tagkey. Setting it to empty - it will disable this override.';
$_lang['prop_grt.tagrequestparam_desc'] = 'The REQUEST param key being sent that will be the value for the tags filter.';