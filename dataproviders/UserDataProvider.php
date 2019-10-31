<?php


class UserDataProvider extends DataProvider implements DataProviderInterface
{
    public $models;

    public function __construct(array $data)
    {
        parent::__construct($data);

        $params = [
            'number' => $this->pageSize,
            'offset' => $this->getOffset(),
            'orderby' => $this->sortBy,
            'order' => $this->sortType,
        ];

        if(isset($this->query['fields'])){
            $params['fields'] = $this->query['fields'];
        }

        if(isset($this->query['meta_key'])){
            $params['meta_key'] = $this->query['meta_key'];
        }

        $this->models = new WP_User_Query($params);

        $this->totalCount = $this->models->get_total();
    }

    public function getModels()
    {
        return $this->models->get_results();
    }
}