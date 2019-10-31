<?php


class DataProvider
{

    public $pageSize;
    public $sortType;
    public $sortBy;
    public $count;
    public $totalCount;
    public $query;
    public $currentPage;

    public function __construct(Array $data)
    {
        $this->pageSize = isset($data['pageSize']) ? $data['pageSize'] : 10;
        $this->query = isset($data['query']) ? $data['query'] : null;
        $this->sortType = isset($data['sortType']) ? $data['sortType'] : 'ASC';
        $this->sortBy = isset($data['sortBy']) ? $data['sortBy'] : null;
        $this->currentPage = isset($data['currentPage']) ? $data['currentPage'] : 1;
    }

    public function getOffset()
    {
        return ($this->currentPage - 1) * $this->pageSize;
    }

    public function getPageCount()
    {
        return ceil($this->totalCount / $this->pageSize);
    }

}