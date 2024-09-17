<div>
    <label for="nome" class="block font-medium text-sm text-gray-700">{{ 'Nome' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="nome" name="nome" type="text" value="{{ isset($client->nome) ? $client->nome : ''}}" >
    {!! $errors->first('nome', '<p>:message</p>') !!}
</div>
<div>
    <label for="email" class="block font-medium text-sm text-gray-700">{{ 'Email' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="email" name="email" type="email" value="{{ isset($client->email) ? $client->email : ''}}" >
    {!! $errors->first('email', '<p>:message</p>') !!}
</div>
<div>
    <label for="cep" class="block font-medium text-sm text-gray-700">{{ 'Cep' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="cep" name="cep" type="text" value="{{ isset($client->cep) ? $client->cep : ''}}" >
    {!! $errors->first('cep', '<p>:message</p>') !!}
</div>
<div>
    <label for="logradouro" class="block font-medium text-sm text-gray-700">{{ 'Logradouro' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="logradouro" name="logradouro" type="text" value="{{ isset($client->logradouro) ? $client->logradouro : ''}}" >
    {!! $errors->first('logradouro', '<p>:message</p>') !!}
</div>
<div>
    <label for="bairro" class="block font-medium text-sm text-gray-700">{{ 'Bairro' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="bairro" name="bairro" type="text" value="{{ isset($client->bairro) ? $client->bairro : ''}}" >
    {!! $errors->first('bairro', '<p>:message</p>') !!}
</div>
<div>
    <label for="cidade" class="block font-medium text-sm text-gray-700">{{ 'Cidade' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="cidade" name="cidade" type="text" value="{{ isset($client->cidade) ? $client->cidade : ''}}" >
    {!! $errors->first('cidade', '<p>:message</p>') !!}
</div>
<div>
    <label for="estado" class="block font-medium text-sm text-gray-700">{{ 'Estado' }}</label>
    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="estado" name="estado" type="text" value="{{ isset($client->estado) ? $client->estado : ''}}" >
    {!! $errors->first('estado', '<p>:message</p>') !!}
</div>


<div class="flex items-center gap-4">
    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
        {{ $formMode === 'edit' ? 'Update' : 'Create' }}
    </button>
</div>
