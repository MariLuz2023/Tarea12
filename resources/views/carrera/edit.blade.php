@extends('layouts.profile')

@section('content')
    <div class="mx-96 p-32">
        <p class="text-2xl text-center">Editar Perfil</p>
        <form action="{{ route('profiles.update', $profile->id) }}" class="items-center" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="cargo" class="block text-sm text-blue-500 font-bold pb-5">Cargo</label>
                <input type="text" name="cargo" id="cargo" class="form-control" value="{{ $profile->cargo }}" required class="font-bold mt-2 w-full placeholder-gray-600 dark:placeholder-gray-500 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-white dark:text-gray-600 dark:focus:border-blue-300">
            </div>
            <div class="form-group">
                <label for="description" class="block text-sm text-blue-500 font-bold pb-5">Descripción</label>
                <textarea name="description" id="description" class="form-control" rows="3" required class="form-control" rows="3" required class="font-bold mt-2 w-full placeholder-gray-600 dark:placeholder-gray-500 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-white dark:text-gray-600 dark:focus:border-blue-300">{{ $profile->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="user_id" class="block mb-2 text-sm font-medium font-bold text-blue-500">Usuario</label>
                <select name="user_id" id="user_id" class="form-control" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" @if($profile->user_id == $user->id) selected @endif>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="pt-5 flex flex-row">
            <button type="submit" class="flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80" type="submit" class="btn btn-primary">Actualizar</button>
            <button class=" mx-5 flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80" type="submit" class="btn btn-primary"><a href="/profiles">Volver al inicio</a></button>
            </div>
        </form>
    </div>
@endsection
