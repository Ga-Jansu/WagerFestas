<head>
    <title>WagerFestas - Cadastrado!</title>
    <link rel="shortcut icon" href="{{ URL::asset('images/wagerlogo.png') }}" type="image/x-icon">
</head>

<x-app-layout>
    <div class="bg">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-40">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Você está logado!") }}
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-0">
            <div class="bg-black shadow-sm sm:rounded-lg">
                <ul>
                    <div class="p-6 text-gray-900">
                        <li><a href="/admin_menu">Admin</a></li>
                        <li><a href="/aniver_menu">Aniversariante</a></li>
                    </div>
                </ul>
            </div>
        </div>
    </div> 
</x-app-layout>
