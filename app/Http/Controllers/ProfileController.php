<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('carrera.index', compact('profiles'));
    }

    public function create()
    {
        $users = User::all(); // Obtener la lista de todos los usuarios
        return view('carrera.create', compact('users'));
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'cargo' => 'required|string|max:45',
            'description' => 'required|string',
            'user_id' => 'required|exists:users,id'
        ]);

        // Crear un nuevo perfil
        Profile::create($request->all());

        return redirect()->route('carrera.index')
            ->with('success', 'Perfil creado exitosamente.');
    }

    public function show(Profile $profile)
    {
        return view('carrera.show', compact('profile'));
    }

    public function edit(Profile $profile)
    {
        $users = User::all(); // Obtener todos los usuarios
        return view('carrera.edit', compact('profile', 'users'));
    }

    public function update(Request $request, Profile $profile)
    {
        // Validación de datos
        $request->validate([
            'cargo' => 'required|string|max:45',
            'description' => 'required|string',
            'user_id' => 'required|exists:users,id'
        ]);

        // Actualizar el perfil con los datos del formulario
        $profile->update($request->all());

        return redirect()->route('carrera.index')
            ->with('success', 'Perfil actualizado exitosamente.');
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();

        return redirect()->route('carrera.index')
            ->with('success', 'Perfil eliminado exitosamente.');
    }
}
