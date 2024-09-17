<?php

namespace App\Http\Requests;

use App\Services\CepService;
use App\Rules\CepRule;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    public $cepService;
    public function __construct(CepService $cepService)
    {
       $this->cepService = $cepService;
    }
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cep'=>['required', new CepRule($this->cepService)]
        ];
    }
}
