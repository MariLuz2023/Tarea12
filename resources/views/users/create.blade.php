@extends('layouts.profile')

@section('content')
    <div class="mx-96 p-32">
        <p class="text-2xl text-center">Crear Nuevo Usuario</p>
        <form class="items-center" action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group pt-5">
                <label for="name" class="block text-sm text-blue-500 font-bold pb-5">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" class="font-bold mt-2 w-full placeholder-gray-600 dark:placeholder-gray-500 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-white dark:text-gray-600 dark:focus:border-blue-300" required>
            </div>
            <div class="form-group">
                <label for="email" class="block text-sm text-blue-500 font-bold pb-5">Email</label>
                <input type="email" name="email" id="email" class="form-control" class="font-bold mt-2 w-full placeholder-gray-600 dark:placeholder-gray-500 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-white dark:text-gray-600 dark:focus:border-blue-300" required>
            </div>
            <div class="form-group">
                <label for="password" class="block text-sm text-blue-500 font-bold pb-5">Contraseña</label>
                <input type="password" name="password" class="font-bold mt-2 w-full placeholder-gray-600 dark:placeholder-gray-500 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-white dark:text-gray-600 dark:focus:border-blue-300" id="password" class="form-control" required>
            </div>

            <div class="pt-5 flex flex-row">
                <button class="flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80" type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
@endsection
