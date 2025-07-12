<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index()
    {
        // Aqui eu poderia fazer alguma lógica antes de retornar a view
        // Por exemplo, buscar dados do banco de dados ou processar informações
        // Mas por enquanto, vamos apenas retornar a view 'welcome'
            
        $nome = 'Leonardo';
        

        $data = [
            'name' => $nome,
        ];

        return view('Bem vindo', $data);

    
    }
    public function exit()
    {
        return view('exit');
    }
    public function users(request $r) {
        $data = [
            'quantidade' => $r->qnt
        ];
        return view('users', $data);
    }

    

}
