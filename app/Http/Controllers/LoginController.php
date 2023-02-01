<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm() {
        return view('auth.login');
    }

    public function showRegisterform() {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }
        // The user's credentials are invalid, redirect them back to the login page.
        return redirect()->back()->withInput()->withErrors([
            'email' => 'Las credenciales son incorrectas',
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->intended('/login');
        // Redireccionar al usuario a una página de bienvenida o iniciar sesión automáticamente
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    // Aquí iría el código para mostrar la vista de inicio de sesión
}
