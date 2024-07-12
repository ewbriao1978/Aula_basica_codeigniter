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

    public function listarAutomoveis() : string
    {   
        $automoveis_model = new AutomoveisModel;
        
        $data['dados'] = $automoveis_model->findAll();

        
        return view('listarAutomoveis',$data);
    }

    public function showFormInsert() : string
    {
        return view('form_insert');
    }

    public function salvarAutomoveis()
    {
        $data = array(
            'marca' => $this->request->getVar('marca_input'),
            'modelo' => $this->request->getVar('modelo_input'),
            'km' => $this->request->getVar('km_input'),
            'ano' => $this->request->getVar('ano_input'),
            'preco' => $this->request->getVar('preco_input')
        );

        $automoveis_model = new AutomoveisModel;        
        $automoveis_model->insert($data);
        $this->session->setFlashdata('success','Dados inseridos com sucesso');
        return redirect()->to('/listar');

    }

    public function removerAuto()
    {
        $id = $this->request->getVar('id_removed');
        $automoveis_model = new AutomoveisModel;        
        $automoveis_model->delete($id);
        $this->session->setFlashdata('success_remove','Dados removidos com sucesso');

        return redirect()->to('/listar');
    }

    public function showFormUpdate($id_param):string{
        $automoveis_model = new AutomoveisModel;
        $data['dados'] = $automoveis_model->find($id_param);
        return view('formupdate',$data);
    }

    public function updateData(){
        $id_for_updating = $this->request->getVar('id_up');

        $data = array(
            'marca' => $this->request->getVar('marca_input'),
            'modelo' => $this->request->getVar('modelo_input'),
            'km' => $this->request->getVar('km_input'),
            'ano' => $this->request->getVar('ano_input'),
            'preco' => $this->request->getVar('preco_input')
        );


        $automoveis_model = new AutomoveisModel;
        $automoveis_model->update($id_for_updating, $data);
        $this->session->setFlashdata('success_updating','Dados atualizados com sucesso');

        return redirect()->to('/listar');



    }


}
