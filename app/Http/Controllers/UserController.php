<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('userdomicilio')->get();
        foreach ($users as $user) {
            $anio_nacimiento = '';
            $edad = Carbon::parse($user->fecha_nacimiento)->age;
            $user->edad=$edad;
        }
        return $users;
    }
}
