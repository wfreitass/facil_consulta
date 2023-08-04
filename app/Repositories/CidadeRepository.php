<?php

namespace App\Repositories;

use App\Interfaces\CidadeRepositoryInterface;
use App\Models\Cidade;

class CidadeRepository extends BaseRepository implements CidadeRepositoryInterface
{
    protected $cidadeRepository;

    public function __construct(Cidade $cidadeRepository)
    {
        $this->cidadeRepository = $cidadeRepository;
        parent::__construct($cidadeRepository);
    }

    public function find($id)
    {
        return $this->cidadeRepository->with('medicos')->findOrFail($id);
    }
}
