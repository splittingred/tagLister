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
        'desc' => 'The items to turn into links.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'target',
        'desc' => 'The ID of the Resource that links will point to. Defaults to the current Resource.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'inputDelim',
        'desc' => 'The delimiter that is used on the items property. Defaults to a comma.',
        'type' => 'textfield',
        'options' => '',
        'value' => ',',
    ),
    array(
        'name' => 'outputDelim',
        'desc' => 'The delimiter that separates the links that are outputted. Defaults to a comma.',
        'type' => 'textfield',
        'options' => '',
        'value' => ', ',
    ),
    array(
        'name' => 'key',
        'desc' => 'The REQUEST var key that will be used in generating the links.',
        'type' => 'textfield',
        'options' => '',
        'value' => 'tag',
    ),
);
return $properties;