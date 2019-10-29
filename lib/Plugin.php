<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 29.10.19
 * Time: 23:24
 */

class Plugin
{

    /**
     * @var $parser Parser
     */
    static $parser;

    public function __construct()
    {
        Plugin::$parser = new Parser();
    }

    /**
     * @param $page AdminPage
     */
    public function createAdminPage($page)
    {
        $page->init();
    }

}