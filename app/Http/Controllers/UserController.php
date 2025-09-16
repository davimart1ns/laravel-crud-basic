<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use Pest\Mutate\Mutators\Sets\ReturnSet;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUserRequest $request)
    {
        try {
            $user = User::create($request->validated());

            return redirect()->route('user.show', ['user' => $user->id])->with('success', 'Usuário cadastrado com sucesso!');
        } catch (Exception $e) {
            return back()->withInput()->with('error', "Usuário não cadastrado!");
        }
    }

    public function index(Request $request)
    {
        $users = User::orderByDesc('id')->paginate(5);
        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        try {
            if ($request->filled('name', 'email')) {
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);

                return redirect()->route('user.show', ['user' => $user->id])->with('success', 'Usuário editado com sucesso!');
            }

            return back()->with('error', 'Usuário não editado');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function edit_password(User $user)
    {
        return view('users.edit_password', ['user' => $user]);
    }

    public function update_password(UpdateUserRequest $request, User $user)
    {
        try {
            if ($request->filled('password')) {
                $user->update([
                    'password' => Hash::make($request->password)
                ]);


                return redirect()->route('user.show', ['user' => $user->id])->with('success', 'Senha editada com sucesso!');
            }

            return back()->with('error', 'A nova senha não foi editada');
        } catch (Exception $e) {
            return back()->withInput()->with('error', "Senha não editada!");
        }
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();

            return redirect()->route('user.index')->with('success', 'Usuário excluído com sucesso!');
        } catch (Exception $e) {
            return back()->withInput()->with('error', "Usuário não excluído!");
        }
    }
}
