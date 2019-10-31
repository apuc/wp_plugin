<?php


class TableCssJsAction extends AddAction implements AddActionInterface
{
    public function params()
    {
        return [
            'tag' => 'wp_enqueue_scripts',
            'priority' => 99,
            'accepted_args' => 1,
        ];
    }

    public function run()
    {
        wp_enqueue_style('font', PLUGIN_URI . 'public/css/font-awesome.min.css');
        wp_enqueue_style('style-name', PLUGIN_URI . 'public/css/styles.min.css');
        wp_enqueue_script('jq', PLUGIN_URI . 'public/js/jquery-3.2.1.js', array(), '1.0', true);
        wp_enqueue_script('script-name', PLUGIN_URI . 'public/js/script.js', array(), '1.0', true);
        wp_localize_script( 'script-name', 'myajax',
            array(
                'url' => admin_url('admin-ajax.php')
            )
        );
    }
}