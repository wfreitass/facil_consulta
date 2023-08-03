<?php

namespace App\Services;

use App\Repositories\PacienteRepository;

class PacienteService extends BaseService
{
    protected $pacienteRepository;

    public function __construct(PacienteRepository $pacienteRepository)
    {
        parent::__construct($pacienteRepository);
        $this->pacienteRepository = $pacienteRepository;
    }
}
