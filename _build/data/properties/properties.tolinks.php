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
        'name' => 'items',
        'desc' => 'prop_tolinks.items_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'tpl',
        'desc' => 'prop_tolinks.tpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'link',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'target',
        'desc' => 'prop_tolinks.target_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'inputDelim',
        'desc' => 'prop_tolinks.inputdelim_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => ',',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'outputDelim',
        'desc' => 'prop_tolinks.outputdelim_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => ', ',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'tagRequestParam',
        'desc' => 'prop_tolinks.tagrequestparam_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'tag',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'cls',
        'desc' => 'prop_tolinks.cls_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'tl-tag',
        'lexicon' => 'taglister:properties',
    ),
    array(
        'name' => 'toPlaceholder',
        'desc' => 'prop_tolinks.toplaceholder_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'taglister:properties',
    ),
);
return $properties;