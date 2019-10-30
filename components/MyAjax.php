<?php


class MyAjax extends BaseComponent
{

    public function run()
    {
        $this->render('test.php', ['data' => 'ajax'], true);
        wp_die();
    }

}