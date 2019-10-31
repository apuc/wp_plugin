<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 30.10.19
 * Time: 0:11
 */

class MyShortCode extends BaseComponent
{

    public function printSC($atts, $content)
    {
        $users = new UserDataProvider([
            'pageSize' => 5,
            'sortType' => isset($_GET['sort_type']) ? $_GET['sort_type'] : 'ASC',
            'sortBy' => isset($_GET['sort_by']) ? $_GET['sort_by'] : 'user_name',
            'currentPage' => isset($_GET['current_page']) ? $_GET['current_page'] : 1
        ]);

        return $this->render('table.php', ['users' => $users], false);
    }

}