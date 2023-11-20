<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WagerFestas - Editar</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{URL::asset('images/wagerlogo.png') }}" type="image/x-icon">
</head>

<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="/admin/comida" class="text-white hover:underline bg-red-500 text-white px-4 py-2 rounded-full mb-4 flex justify-center items-center mx-auto">Voltar</a>
                <h1 class="text-4xl font-bold text-center text-black pt-6 mb-2">Comidas {{$food->id}}</h1>
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('comida.update', $food->id)}}" method="POST">
                        @csrf()
                        @method('PUT')
                        <div class="mb-4 w-full">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Assunto</label>
                            <input type="text" placeholder="Assunto" id="name" value="{{$food->name}}" name="name" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="mb-4 w-full">
                            <label for="body" class="block text-gray-700 text-sm font-bold mb-2">Comidas</label>
                            <textarea name="body" id="body" class="form-textarea resize-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" cols="30" rows="10" placeholder="Comidas">{{$food->body}}</textarea>
                        </div>

                        <div class="mb-4 w-full">
                            <label for="drink" class="block text-gray-700 text-sm font-bold mb-2">Bebidas</label>
                            <textarea name="drink" id="drink" class="form-textarea resize-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" cols="30" rows="10" placeholder="Bebidas">{{$food->body}}</textarea>
                        </div>

                        <textarea name="drink" cols="30" rows="5" placeholder="Bebidas">{{$food->body}}</textarea>
                        <input type="number" placeholder="Preço" name="money" value="{{$food->money}}">
                    
                        <div class="text-center mt-4">
                            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-full w-full max-w-sm mx-auto text-lg">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>