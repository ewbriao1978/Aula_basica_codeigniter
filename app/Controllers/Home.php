<?php

namespace App\Controllers;
use App\Models\AutomoveisModel;

class Home extends BaseController
{
    public function index(): string
    {
        $meu_vetor['nickname'] = "LordWenzel1978";
        $meu_vetor['outro'] = "qualquer string";
        return view('my_view',$meu_vetor);
    }

    public function outraView(): string
    {
        return view('another_view');
    }
    public function showForm(): string
    {
        return view('formulario');
    }

    public function recebaDados(): string
    {
        //$nome = $this->request->getVar('nome_input');
        
        $data = array(
            'nome' => $this->request->getVar('nome_input'),
            'idade' => $this->request->getVar('idade_input')
        );
        

        return view('showformulario',$data);
    }

    public function listarAutomoveis() : void
    {   
        $automoveis_model = new AutomoveisModel;
        
        $data = $automoveis_model->findAll();

        print_r($data);


        //$data['var'] = " Minha view de listagem";
        //return view('listarAutomoveis',$data);
    }

}
