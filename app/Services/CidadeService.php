<?php

namespace App\Services;

use App\Repositories\CidadeRepository;

class CidadeService extends BaseService
{
    protected $cidadeRepository;

    public function __construct(CidadeRepository $cidadeRepository)
    {
        parent::__construct($cidadeRepository);
        $this->cidadeRepository = $cidadeRepository;
    }
}
