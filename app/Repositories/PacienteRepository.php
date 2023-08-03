<?php

namespace App\Repositories;

use App\Interfaces\PacienteRepositoryInterface;
use App\Models\Paciente;

class PacienteRepository extends BaseRepository implements PacienteRepositoryInterface
{
    protected $pacienteRepository;

    public function __construct(Paciente $pacienteRepository)
    {
        $this->pacienteRepository = $pacienteRepository;
        parent::__construct($pacienteRepository);
    }
}
