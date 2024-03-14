<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact($users));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUserRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente');
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()->route('users.index')->with('success', 'Usuario modificado exitosamente');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('success', 'Usuario eliminado con exito');
    }
}
