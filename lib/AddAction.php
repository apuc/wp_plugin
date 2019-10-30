<?php


class AddAction extends BaseComponent
{

    public function params()
    {
        return [];
    }

    public function add()
    {
        $params = $this->params();
        add_action($params['tag'], [$this, 'run'], $params['priority'], $params['accepted_args']);
    }

}