<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Repository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function select($query, $fields = [], $joins = [], $conditions = [], $orderBy = [], $distinct = false, $groupBy = []) {
        if ($distinct) {
            $query->distinct();
        }

        if (!empty($fields)) {
            $query->select($fields);
        }

        foreach ($joins as $join) {
            list($table, $firstColumn, $operator, $secondColumn) = $join;
            $query->join($table, $firstColumn, $operator, $secondColumn);
        }

        foreach ($conditions as $condition) {
            $type = $condition[0];
            if ($type === 'where') {
                list($type, $column, $operator, $value) = $condition;
                $query->where($column, $operator, $value);
            } elseif ($type === 'orWhere') {
                list($type, $column, $operator, $value) = $condition;
                $query->orWhere($column, $operator, $value);
            } elseif ($type === 'whereNotNull') {
                list($type, $column) = $condition;
                $query->whereNotNull($column);
            } elseif ($type === 'whereNull') {
                list($type, $column) = $condition;
                $query->whereNull($column);
            } elseif ($type === 'whereIn') {
                list($type, $column, $values) = $condition;
                $query->whereIn($column, $values);
            } elseif ($type === 'whereNotIn') {
                list($type, $column, $values) = $condition;
                $query->whereNotIn($column, $values);
            }
        }

        if (!empty($groupBy)) {
            $query->groupBy($groupBy);
        }

        if (!empty($orderBy)) {
            foreach ($orderBy as $order) {
                list($column, $direction) = $order;
                $query->orderBy($column, $direction);
            }
        }

        return $query;
    }

    public function first($fields = [], $joins = [], $conditions = [], $orderBy = [], $distinct = false, $groupBy = [])
    {
        $query = $this->model->query();
        $query = $this->select($query, $fields, $joins, $conditions, $orderBy, $distinct, $groupBy);

        return $query->first();
    }

    public function get($fields = [], $joins = [], $conditions = [], $orderBy = [], $distinct = false, $groupBy = [])
    {
        $query = $this->model->query();
        $query = $this->select($query, $fields, $joins, $conditions, $orderBy, $distinct, $groupBy);

        return $query->get();
    }

    public function view($id)
    {
        return $this->model->find($id);
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update($id, $data)
    {
        $record = $this->model->find($id);
        if (!$record) {
            return null;
        }
        $record->update($data);
        return $record;
    }

    public function delete($id)
    {
        $record = $this->model->find($id);
        if (!$record) {
            return null;
        }
        $record->delete();
        return true;
    }
}
