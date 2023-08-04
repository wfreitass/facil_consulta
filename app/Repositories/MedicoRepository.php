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

    public function all()
    {
        return $this->medicoRepository->with('cidade')->orderBy('id', 'asc')->get();
    }

    public function find($id)
    {
        return $this->medicoRepository->with('cidade')->findOrFail($id);
    }

    public function findPacientes($id)
    {
        return $this->medicoRepository->with('pacientes')->findOrFail($id);
    }
}
