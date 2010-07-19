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
$properties = array(
    array(
        'name' => 'tpl',
        'desc' => 'prop_taglister.tpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'tag',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'tv',
        'desc' => 'prop_taglister.tv_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'tags',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'tvDelimiter',
        'desc' => 'prop_taglister.tvdelimiter_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => ',',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'target',
        'desc' => 'prop_taglister.target_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'tagVar',
        'desc' => 'prop_taglister.tagvar_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'tag',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'sortBy',
        'desc' => 'prop_taglister.sortby_desc',
        'type' => 'list',
        'options' => array(
            array('text' => 'count','value' => 'count'),
            array('text' => 'tag','value' => 'tag'),
        ),
        'value' => 'count',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'sortDir',
        'desc' => 'prop_taglister.sortdir_desc',
        'type' => 'list',
        'options' => array(
            array('text' => 'ascending','vaue' => 'ASC'),
            array('text' => 'descending','value' => 'DESC'),
        ),
        'value' => 'ASC',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'limit',
        'desc' => 'prop_taglister.limit_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 10,
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'includeDeleted',
        'desc' => 'prop_taglister.includedeleted_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'includeUnpublished',
        'desc' => 'prop_taglister.includeunpublished_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'cls',
        'desc' => 'prop_taglister.cls_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'tl-tag',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'altCls',
        'desc' => 'prop_taglister.altcls_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'tl-tag-alt',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'firstCls',
        'desc' => 'prop_taglister.firstcls_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'lastCls',
        'desc' => 'prop_taglister.lastcls_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'all',
        'desc' => 'prop_taglister.all_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'allTpl',
        'desc' => 'prop_taglister.alltpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'all',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'allPosition',
        'desc' => 'prop_taglister.allposition_desc',
        'type' => 'list',
        'options' => array(
            array('text' => 'bottom','value' => 'B'),
            array('text' => 'top','value' => 'T'),
        ),
        'value' => 'B',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'allText',
        'desc' => 'prop_taglister.alltext_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'toPlaceholder',
        'desc' => 'prop_taglister.toplaceholder_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'outputSeparator',
        'desc' => 'prop_taglister.outputseparator_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => "\n",
        'lexicon' => 'taglister:properties',
    ),
);
return $properties;