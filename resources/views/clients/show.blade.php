<x-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">

                    @section('content')
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                Show Client
                            </h2>
                            <div class="flex justify-end mt-5">
                                <a class="px-2 py-1 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600" href="{{ route('clients.index') }}" title="Back">< Back</a>
                            </div>
                        </header>
                        </br>

                        <table class="shadow-lg bg-white">
                            <tr>
                                <td class="border px-8 py-4 font-bold">ID</td>
                                <td class="border px-8 py-4">{{ $client->id }}</td>
                            </tr>
                            <tr><td class="border px-8 py-4 font-bold"> Nome </td><td class="border px-8 py-4"> {{ $client->nome }} </td></tr><tr><td class="border px-8 py-4 font-bold"> Email </td><td class="border px-8 py-4"> {{ $client->email }} </td></tr><tr><td class="border px-8 py-4 font-bold"> Cep </td><td class="border px-8 py-4"> {{ $client->cep }} </td></tr>
                        </table>

                    @endsection

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
