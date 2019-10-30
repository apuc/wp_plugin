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

    /**
     * @var $debug Debug
     */
    static $debug;

    public function __construct()
    {
        Plugin::$parser = new Parser();
        Plugin::$debug = new Debug();
    }

    /**
     * @param $page AdminPage
     */
    public function createAdminPage($page)
    {
        $page->init();
    }

    public function createAjax($action, $function)
    {
        add_action('wp_ajax_' . $action, $function);
        add_action('wp_ajax_nopriv_' . $action, $function);
    }

    /**
     * @param $obj AddAction
     */
    public function addAction($obj)
    {
        $obj->add();
    }

    public function createShortCode($name, $handler)
    {
        add_shortcode( $name, $handler );
    }

}