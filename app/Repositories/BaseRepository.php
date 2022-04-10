<?php

namespace App\Repositories;

class BaseRepository {
    protected $model;

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function get(array $criteria)
    {
        return $this->model->where($criteria)->get();
    }
    
    public function getAll()
    {
        return $this->model->getAll();
    }
}