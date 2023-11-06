<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; // Importe a classe correta

class AdminController extends Controller
{
    public function index()
    {
        return view('login/admin_menu'); // Use uma notação de ponto para o caminho da view
    }
}