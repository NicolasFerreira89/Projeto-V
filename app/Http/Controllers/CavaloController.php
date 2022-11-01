<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cavalo;
use Illuminate\Support\Facades\Redirect;


class CavaloController extends Controller
{
    public function CadastroCavalo()
    {
        return view ('cadastrarCavalo');
    }

    public function EditarCavalo(Request $request )
    {
        $dadoscavalo = Cavalo::query();
        $dadoscavalo->when($request->raca,function($query, $valor)
        {
            $query->where('raca','like','%'.$valor.'%');
        });
        
        $dadoscavalo = $dadoscavalo->get();
        return view('editarCavalo',['registroCavalo'=> $dadoscavalo]);
    
    }

    public function SalvarBancoCavalo(Request $request)
    {
        $dadoscavalo = $request->validate([
            'raca'=> 'string|required',
            'funcao'=> 'string|required',
            'idade'=> 'string|required',
            'pelo'=> 'string|required',
            'valor'=> 'string|required'
        ]); 

        Cavalo::create($dadoscavalo);

        return Redirect::route('home');
    }

    public function ApagarCavalo(Cavalo $registrosCavalos)
    {
        $registrosCavalos->delete();

        return Redirect::route('editar-cavalo');
    }

    public function AlterarBancoCavalo(Cavalo $registrosCavalos, Request $request)
    {
        $banco = $request->validate([
            'raca'=> 'string|required',
            'funcao'=> 'string|required',
            'idade'=> 'string|required',
            'pelo'=> 'string|required',
            'valor'=> 'string|required'
        ]);

        $registrosCavalos->fill($banco);
        $registrosCavalos->save();

        return Redirect::route('editar-cavalo');
    }
}