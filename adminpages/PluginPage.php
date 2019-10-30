<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 30.10.19
 * Time: 1:25
 */

class PluginPage extends AdminPage implements AdminPageInterface
{

    public function params()
    {
        return [
            'page_title' => 'Заголовок',
            'menu_title' => 'Пункт',
            'capability' => 'manage_options',
            'menu_slug' => 'my_pl',
            'function' => [$this, 'run'],
            'icon_url' => null,
            'position' => 50,
        ];
    }

    public function actionIndex()
    {
        $this->render('test.php', ['data' => 'index'], true);
    }

    public function actionAbout()
    {
        $this->render('test.php', ['data' => 'about'], true);
    }

    public function actionTable()
    {
        $this->render('table.php', [], true);
    }

}