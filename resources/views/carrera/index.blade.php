@extends('layouts.profile')

@section('content')
    <div class="text-center p-32">
        <p class="text-5xl mb-16 text-gray-600">Lista de Perfiles</p>
        <div class="flex flex-graw mb-4 mt-2">
            <button class="text-white bg-blue-400 dark:bg-blue-500 cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center"><a class="" href="{{ route('profiles.create') }}">Crear Perfil</a></button>
            <button class="text-white mx-8 bg-blue-400 dark:bg-blue-500 cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center"><a class="" href="{{ route('users.index') }}">Usuarios</a></button>
            <button class="text-white mx-8 bg-blue-400 dark:bg-blue-500 cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center"><a class="" href="/dashboard">Volver al dashboard</a></button>

        </div>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg text-center">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Cargo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Descripción
                        </th>
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
                        @foreach ($profiles as $profile)
                        <td scope="row" class="px-6 py-4 font-medium text-white">
                            {{ $profile->cargo }}
                        </td>
                        <td class="px-6 py-4 font-medium text-white">
                            {{ $profile->description }}
                        </td>
                        <td class="px-6 py-4 font-medium text-white">
                            {{ $profile->user->name }}
                        </td>
                        <td class="py-4 font-medium text-white text-center">
                            <button class="mx-2 text-white bg-blue-400 dark:bg-blue-500 cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center"><a href="{{ route('profiles.show', $profile->id) }}" class="btn btn-info btn-sm">Ver</a></button>
                            <button class="mx-2 text-white bg-blue-400 dark:bg-blue-500 cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center"><a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-primary btn-sm">Editar</a></button>
                            <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST" style="display: inline-block;">
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

        
        
        {{-- <table class="table">
            <thead>
                <tr>
                    <th>Cargo</th>
                    <th>Descripción</th>
                    <th>Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profiles as $profile)
                    <tr>
                        <td>{{ $profile->cargo }}</td>
                        <td>{{ $profile->description }}</td>
                        <td>{{ $profile->user->name }}</td>
                        <td>
                            <a href="{{ route('profiles.show', $profile->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este perfil?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table> --}}
    </div>
@endsection
