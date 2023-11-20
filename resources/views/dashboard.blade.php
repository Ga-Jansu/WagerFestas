<head>
    <title>WagerFestas - Cadastrado!</title>
    <link rel="shortcut icon" href="{{ URL::asset('images/wagerlogo.png') }}" type="image/x-icon">
</head>

<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="text-4xl font-bold text-center text-black pt-6 mb-2">{{ __("Você está logado!") }}</h1>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="/admin_menu" class="text-white hover:underline bg-blue-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Admin</a>
                    <a href="/aniver_menu" class="text-white hover:underline bg-blue-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Aniversariante</a>
                    <a href="/ops_menu" class="text-white hover:underline bg-blue-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Operador</a>
                    <a href="/comer_menu" class="text-white hover:underline bg-blue-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Comercial</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>