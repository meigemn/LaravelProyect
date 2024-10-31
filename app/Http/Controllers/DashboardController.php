<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /* obtiene tareas de usuario */
    public function index(){
        $user = Auth::user();
        $taskController= $user->tasks;
        return view('dashboard', compact('taskController'));
    }
}
