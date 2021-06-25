<?php

/**
 * Plugin Name:       wp-block-extend-style
 * Description:       Extending Core Block Styless
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            MainulDip
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-block-extend-style-lg
 *
 * @package           create-block
 */



// core/group

define('TXTDOM', 'wp-block-extend-style-lg');

register_block_style('core/group', array('name' => 'add-border', 'label' => __('Bordered', 'TXTDOM'), 'inline_style' => '.wp-block-group.is-style-add-border { border: 2px solid gray; }'));
register_block_style('core/group', array('name' => 'add-shadow', 'label' => __('Drop Shadow', 'TXTDOM'), 'inline_style' => '.wp-block-group.is-style-add-shadow { box-shadow: 0px 7px 27px -12px gray; }'));
