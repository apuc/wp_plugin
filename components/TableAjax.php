<?php


class TableAjax extends BaseComponent
{

    public function run()
    {
        $sortBy = isset($_GET['field']) ? $_GET['field'] : 'user_name';
        $params = [
            'pageSize' => 10,
            'sortType' => isset($_GET['sortType']) ? $_GET['sortType'] : 'ASC',
            'sortBy' => $sortBy,
            'currentPage' => isset($_GET['page']) ? $_GET['page'] : 1
        ];

        if ($sortBy == 'meta_value'){
            $params['query'] = [
                'meta_key' => 'role'
            ];
        }

        $users = new UserDataProvider($params);

        $this->render('table.php', ['users' => $users], true);
        wp_die();
    }

}