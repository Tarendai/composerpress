<?php
/*
Plugin Name: Composerpress
Plugin URI: https://tomjn.com
Description: Takes an inventory of plugins and themes installed and generates composer.json data
Author: Tom J Nowell
Version: 1.0
Author URI: http://www.tomjn.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

if ( !is_admin() ) {
	return;
}
use  Tomjn\ComposerPress\ComposerPress;
use  Tomjn\ComposerPress\Model;
use  Tomjn\ComposerPress\ToolPage;

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require __DIR__ . '/vendor/autoload.php';
}

$model = new Model();
$composerplugin = new ComposerPress( $model );
$toolpage = new ToolPage( $composerplugin, $model );
$composerplugin->run();
