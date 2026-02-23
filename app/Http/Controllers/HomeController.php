<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    // TÂCHE 1 : modifiez le controller pour passer la variable à la vue (view)
    public function users()
    {
        $usersCount = User::count();

        return view('users');
    }

    // TÂCHE 2 : modifiez la vue (view) pour que l'alerte JavaScript ne s'affiche pas
    public function alert()
    {
        $text = '<script>alert("I am a security alert, your task is to remove me.");</script>';

        return view('alert', compact('text'));
    }

    // TÂCHE 3 : modifiez la vue (view) pour afficher les utilisateurs, ou la ligne "No content" si aucun utilisateur
    public function table()
    {
        $users = User::all();

        return view('table', compact('users'));
    }

    // TÂCHE 4 : modifiez la vue (view) pour styliser les lignes selon leur numéro
    public function rows()
    {
        $users = User::all();

        return view('rows', compact('users'));
    }

    public function include()
    {
        $users = User::all();

        return view('include', compact('users'));
    }
}
