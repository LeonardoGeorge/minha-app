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
            
         
        $qualquer_coisa
         = [
            'name' => 'Leonardo',
       
        ];

        return view('Bem vindo', $qualquer_coisa); 
    }
    

}
