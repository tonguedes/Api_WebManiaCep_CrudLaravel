<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Services\CepService;

class CepController extends Controller
{
    /**
     * Provision a new web server.
     */
    public function __invoke($cep, CepService $cepService)
    {
                return $cepService->consultar($cep);

    }
}
