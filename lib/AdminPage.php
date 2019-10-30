<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 30.10.19
 * Time: 1:38
 */

class AdminPage extends BaseComponent
{

    public function init()
    {
        $params = $this->params();
        add_action('admin_menu', function () use ($params) {
            add_menu_page(
                $params['page_title'],
                $params['menu_title'],
                $params['capability'],
                $params['menu_slug'],
                $params['function'],
                $params['icon_url'],
                $params['position']
            );
        });
    }

    public function run()
    {
        $get = $_GET;
        if (isset($get['action'])) {
            $action = 'action' . ucfirst($get['action']);
        } else {
            $action = 'actionIndex';
        }
        if (method_exists($this, $action)) {
            $this->$action();
        }
        else {
            echo 'Page not found';
        }
    }

}