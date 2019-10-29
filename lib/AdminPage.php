<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 30.10.19
 * Time: 1:38
 */

class AdminPage extends BaseComponent
{
    public function params()
    {
        return [];
    }

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

}