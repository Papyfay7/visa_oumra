<?php

// app/Http/Controllers/Auth/LoginController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Afficher le formulaire de connexion
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Traiter la soumission du formulaire de connexion
    public function login(Request $request)
    {
        // Valider les informations de connexion
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Authentifier l'utilisateur
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            // Rediriger vers la page d'accueil ou une autre page
            return redirect()->intended('/dashboard');
        }

        // Si l'authentification échoue
        return redirect()->back()->withErrors([
            'email' => 'Les informations d\'authentification sont incorrectes.',
        ]);
    }

    // Déconnexion de l'utilisateur
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
