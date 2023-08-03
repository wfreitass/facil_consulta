<?php

namespace App\Services;

use App\Interfaces\BaseInterface;

class BaseService implements BaseInterface
{
    protected $repository;

    public function __construct($repository)
    {
        $this->repository = $repository;
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function create(array $attributes)
    {
        return $this->repository->create($attributes);
    }

    public function update($model, array $attributes)
    {

        return $this->repository->update($model, $attributes);
    }

    public function destroy($model)
    {
        return $this->repository->destroy($model);
    }
}
