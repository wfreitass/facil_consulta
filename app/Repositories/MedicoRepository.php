<?php

namespace App\Repositories;

use App\Interfaces\MedicoRepositoryInterface;
use App\Models\Medico;

class MedicoRepository extends BaseRepository implements MedicoRepositoryInterface
{
    protected $medicoRepository;

    public function __construct(Medico $medicoRepository)
    {
        $this->medicoRepository = $medicoRepository;
        parent::__construct($medicoRepository);
    }
}
