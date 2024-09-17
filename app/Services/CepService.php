<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;

class CepService
{
    public function consultar(string $cep)
    {
          $response = Http::get(
              "https://webmaniabr.com/api/1/cep/{$cep}/?app_key=MSh7NfNnTyaURlpaMS289FzW9AreLP5I&app_secret=1BneqNEqBm49mQ16jJdg0eCpQeVaIQVMoD6avLPUWYaROGBK"
          );

          return $response->json();
    }

    public function validar(string $cep)
    {
          $response = Http::get(
              "https://webmaniabr.com/api/1/cep/{$cep}/?app_key=MSh7NfNnTyaURlpaMS289FzW9AreLP5I&app_secret=1BneqNEqBm49mQ16jJdg0eCpQeVaIQVMoD6avLPUWYaROGBK"
          );

          $endereco = $response->json();

          return !isset($endereco['error']);
    }
}

