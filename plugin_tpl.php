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

$plugin->createShortCode('base', [ new MyShortCode(), 'printSC' ] );

$plugin->createAdminPage(new PluginPage());

$plugin->createAjax('pl_ajax', [new MyAjax(), 'run']);

$plugin->createAjax('get_table', [new TableAjax(), 'run']);

$plugin->addAction(new AdminJsAction());

$plugin->addAction(new TableCssJsAction());