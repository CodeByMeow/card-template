<?php

/*
 * Copyright (C) 2022  
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/*
 * Plugin Name: Card Temlate
 * Description: General card template.
 * Author: TTK
 * Version: 0.0.1
 * License: GPLv2 or later
 */
if (!defined('ABSPATH')) die;


define('CT_DIR_URL', plugin_dir_url(__FILE__));
define('CT_URL_ASSET', CT_DIR_URL . 'assets/js/');
define('CT_DIR_PATH', plugin_dir_path(__FILE__));

require_once(CT_DIR_PATH . '/admin/AdminSetting.php');
