@extends('layouts.profile')

@section('content')
    <div class="text-center p-32 items-center mx-96">
        <p class="text-blue-800 text-4xl font-bold">Detalles del Usuario</p>
        <p class="font-bold text-blue-700 flex pt-16 pb-3">Nombre:</p><p class="text-blue-400 font-bold text-left px-20 pt-3 pb-3"> {{ $user->name }}</p>
        <p class="font-bold text-blue-700 flex pt-3 pb-3">Email:</p> <p class="text-blue-400 font-bold text-left px-20 pt-3 pb-3">{{ $user->email }}</p>
        <div class="pt-5 flex flex-row text-center justify-center pt-8">
            <button class="mx-5 flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80"><a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar</a></button>
        </div>
        
    </div>
@endsection
