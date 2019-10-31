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
            'page_title' => 'User Ajax',
            'menu_title' => 'User Ajax',
            'capability' => 'manage_options',
            'menu_slug' => 'my_pl',
            'function' => [$this, 'run'],
            'icon_url' => null,
            'position' => 50,
        ];
    }

    public function actionIndex()
    {
        $users = new UserDataProvider([
            'sortBy' => 'meta_value',
            'query' => [
                'meta_key' => 'role',
            ],
            'currentPage' => isset($_GET['currentPage']) ? $_GET['currentPage'] : 1
        ]);

        $table = $this->render('table.php', ['users' => $users], false);
        $this->render('section.php', ['users' => $users, 'data' => $table], true);
    }

    public function actionAbout()
    {
        $this->render('test.php', ['data' => 'about'], true);
    }

    public function actionTable()
    {
        $users = new UserDataProvider([
            'sortBy' => 'meta_value',
            'query' => [
                'meta_key' => 'role',
            ],
            'currentPage' => isset($_GET['currentPage']) ? $_GET['currentPage'] : 1
        ]);

        $this->render('table.php', ['users' => $users], true);
    }

}