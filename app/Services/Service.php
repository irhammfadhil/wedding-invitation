<?php

namespace App\Services;

use App\Repositories\Repository;

class Service
{
    protected $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function first($fields = [], $joins = [], $conditions = [], $orderBy = [], $distinct = false, $groupBy = [])
    {
        return $this->repository->first($fields, $joins, $conditions, $orderBy, $distinct, $groupBy);
    }

    public function get($fields = [], $joins = [], $conditions = [], $orderBy = [], $distinct = false, $groupBy = [])
    {
        return $this->repository->get($fields, $joins, $conditions, $orderBy, $distinct, $groupBy);
    }

    public function view($id)
    {
        return $this->repository->view($id);
    }

    public function create($data)
    {
        return $this->repository->create($data);
    }

    public function update($id, $data)
    {
        return $this->repository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}
