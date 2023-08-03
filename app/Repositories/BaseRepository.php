<?php

namespace App\Repositories;

use App\Interfaces\BaseInterface;

class BaseRepository implements BaseInterface
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->orderBy('id', 'desc')->get();
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function update($model, array $attributes)
    {
        return  $model->update($attributes);
    }

    public function destroy($model)
    {
        return $model->delete();
    }
}
