<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 30.10.19
 * Time: 0:00
 */

class BaseComponent
{

    public function render($tpl, $data = [], $view = true)
    {
        $dir = PLUGIN_DIR . 'views/';
        return Plugin::$parser->render($dir . $tpl, $data, $view);
    }

}