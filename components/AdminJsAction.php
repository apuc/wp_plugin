<?php


class AdminJsAction extends AddAction implements AddActionInterface
{

    public function params()
    {
        return [
            'tag' => 'admin_print_footer_scripts',
            'priority' => 99,
            'accepted_args' => 1,
        ];
    }

    public function run()
    {
        $this->render('admin_ajax_js.php');
    }

}