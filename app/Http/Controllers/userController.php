<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function getAllUsers()
    {
        $members = User::whereHas('roles')
        ->with('roles')
        ->get();
        return $members;
    }
    public function assignRoleToAdmin()
    {
        $user = Auth::user();
        $user->roles->pluck('name');
        return redirect('/dashboard');

    }
}
