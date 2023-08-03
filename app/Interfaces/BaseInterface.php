<?php

namespace App\Interfaces;

interface BaseInterface
{
    public function all();

    public function find($id);

    public function create(array $attributes);

    public function update($model, array $attributes);

    public function destroy($model);
}
