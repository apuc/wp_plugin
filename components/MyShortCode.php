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
        $currentUser = wp_get_current_user();
        if(!isset($currentUser->caps['administrator'])){
            return '403';
        }

        $currentPage = 1;
        $sortType = 'ASC';
        $sortBy = 'user_name';
        if(isset($_COOKIE['tableParams'])){
            $cookie = json_decode(str_replace ('\"','"', $_COOKIE['tableParams']), true);
            $currentPage = $cookie['page'];
            $sortType = $cookie['sortType'];
            $sortBy = $cookie['field'];
        }
        $params = [
            'pageSize' => 10,
            'sortType' => $sortType,
            'sortBy' => $sortBy,
            'currentPage' => $currentPage
        ];

        if ($sortBy == 'meta_value'){
            $params['query'] = [
                'meta_key' => 'role'
            ];
        }

        $users = new UserDataProvider($params);

        $html = $this->render('table.php', ['users' => $users], false);
        return $this->render('section.php', ['data' => $html, 'users' => $users], false);
    }

}