@extends('layouts.profile')

@section('content')
    <div class="text-center items-center mx-96 mt-10">
        <p class="text-blue-800 text-4xl font-bold">Lista de Usuarios</p>
        <div class="flex flex-graw mb-4 mt-2 pt-3">
            <button class="text-white bg-blue-400 dark:bg-blue-500 cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center"><a class="" href="{{ route('users.create') }}">Crear Perfil</a></button>
        </div>
        <div class="pt-3 relative overflow-x-auto shadow-md sm:rounded-lg text-center">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Usuario
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    
                    <tr>
                        @foreach ($users as $user)
                        <td class="px-6 py-4 font-medium text-white">
                            {{ $user->name }}
                        </td>
                        <td class="py-4 font-medium text-white text-center flex pt-12">
                            <button type="submit" class="mx-2 text-white bg-blue-400 dark:bg-blue-500 cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center"><a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm">Ver</a></button>
                            <button type="submit" class="mx-2 text-white bg-blue-400 dark:bg-blue-500 cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center"><a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Editar</a></button>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="mx-2 text-white bg-blue-400 dark:bg-blue-500 cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center" onclick="return confirm('¿Estás seguro de eliminar este perfil?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="pt-5 flex flex-row text-center justify-center pt-8">
            <button class=" mx-5 flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80" type="submit" class="btn btn-primary"><a href="/profiles" class="btn btn-primary">Volver al inicio</a></button>
        </div>
    </div>
@endsection
