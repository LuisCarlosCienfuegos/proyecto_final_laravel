<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function createUserAdmin()
    {
        User::create([
            'name' => 'Luis Carlos Cienfuegos',
            'email' => 'carlos.cienfuegos@pjedomex.gob.mx',
            'password' => Hash::make('123456789'),
            'photo' => '',
            'status' => 1,
            'id_branch' => 0,
            'role' => 'Administrador',
            'last_login' => '',
        ]);
        return 'Usuario creado';
    }
}
