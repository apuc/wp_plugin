<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 29.10.19
 * Time: 23:51
 */

define('PLUGIN_DIR', plugin_dir_path(__FILE__));

require_once __DIR__ . '/lib/BaseComponent.php';

foreach (glob(plugin_dir_path(__FILE__) . "lib/*.php") as $file) {
    require_once($file);
}

foreach (glob(plugin_dir_path(__FILE__) . "components/*.php") as $file) {
    require_once($file);
}

foreach (glob(plugin_dir_path(__FILE__) . "interfaces/*.php") as $file) {
    require_once($file);
}

foreach (glob(plugin_dir_path(__FILE__) . "adminpages/*.php") as $file) {
    require_once($file);
}