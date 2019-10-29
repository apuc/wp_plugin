<?php
/*
 * Plugin Name: Шаблон плагина
 * Plugin URI: https://web-artcraft.com/
 * Description: Пробуем ООП
 * Version: 0.1
 * Author: Kavalar
 * License: GPLv2 or later
 */

include __DIR__ . '/init.php';

$plugin = new Plugin();

add_shortcode( 'base', [ new MyShortCode(), 'printSC' ] );

$plugin->createAdminPage(new PluginPage());