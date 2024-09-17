<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Services\CepService;



class CepRule implements ValidationRule
{
    public function __construct(CepService $cepService)
    {
       $this->cepService = $cepService;
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Remove qualquer caractere não numérico do CEP
        $cep = preg_replace('/\D/', '', $value);

        // Verifica se o CEP tem 8 dígitos
        if (strlen($cep) !== 8) {
            $fail('O campo :attribute deve conter um CEP válido com 8 dígitos.');
            return;
        }

        // Verifica se o CEP é um número válido
        if (!is_numeric($cep)) {
            $fail('O campo :attribute deve conter apenas números.');
            return;
        }
    }


}

