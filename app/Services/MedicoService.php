<?php

namespace App\Services;

use App\Repositories\MedicoRepository;

class MedicoService extends BaseService
{
    protected $medicoRepository;

    public function __construct(MedicoRepository $medicoRepository)
    {
        parent::__construct($medicoRepository);
        $this->medicoRepository = $medicoRepository;
    }

    public function findPacientes($id)
    {
        return $this->medicoRepository->findPacientes($id);
    }
}
