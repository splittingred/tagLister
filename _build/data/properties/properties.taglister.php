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
        'desc' => 'Name of a Chunk that will be used for each result.',
        'type' => 'textfield',
        'options' => '',
        'value' => 'tag',
    ),
    array(
        'name' => 'tv',
        'desc' => 'The name or ID of the TV being used for tags.',
        'type' => 'textfield',
        'options' => '',
        'value' => 'tags',
    ),
    array(
        'name' => 'tvDelimiter',
        'desc' => 'The delimiter being used between tags in the TV. Usually a comma, sometimes a space.',
        'type' => 'textfield',
        'options' => '',
        'value' => ',',
    ),
    array(
        'name' => 'target',
        'desc' => 'The target Resource to point the tag links to. Will default to the current Resource.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'sortBy',
        'desc' => 'Field to sort by. Defaults to count. Can be either tag or count.',
        'type' => 'list',
        'options' => array(
            array('text' => 'count','value' => 'count'),
            array('text' => 'tag','value' => 'tag'),
        ),
        'value' => 'count',
    ),
    array(
        'name' => 'sortDir',
        'desc' => 'Order which to sort by. Defaults to ASC.',
        'type' => 'list',
        'options' => array(
            array('text' => 'ASC','vaue' => 'ASC'),
            array('text' => 'DESC','value' => 'DESC'),
        ),
        'value' => 'ASC',
    ),
    array(
        'name' => 'limit',
        'desc' => 'Limits the number of resources returned. Defaults to 10.',
        'type' => 'textfield',
        'options' => '',
        'value' => '10',
    ),
    array(
        'name' => 'cls',
        'desc' => 'A CSS class to add to each row.',
        'type' => 'textfield',
        'options' => '',
        'value' => 'tl-tag',
    ),
    array(
        'name' => 'altCls',
        'desc' => 'A CSS class to add to each alternate row.',
        'type' => 'textfield',
        'options' => '',
        'value' => 'tl-tag-alt',
    ),
    array(
        'name' => 'firstCls',
        'desc' => 'Optional. A CSS class to add to the first row. If empty will ignore.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'lastCls',
        'desc' => 'Optional. A CSS class to add to the last row. If empty will ignore.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'toPlaceholder',
        'desc' => 'If set, will set the output of this snippet to this placeholder rather than output it.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
);
return $properties;