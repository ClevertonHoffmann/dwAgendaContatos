<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     * Lista itens de uma tabela ou funcionalidade
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agendaindex');
    }

    /**
     * Show the form for creating a new resource.
     * Apresentar formulario de criação e inserir os dados da aplicação
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agendacreate');
    }

    /**
     * Store a newly created resource in storage.
     * Receber os request formulario todo preenchido, processo de insert
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (session()->has('CONTATOS')) {
            if (isset($request['txtId']) && isset($request['txtNome']) && isset($request['txtCelular']) && isset($request['txtTelefone']) && isset($request['txtData'])) {
                $aCONTATOS  = $request->session()->get('CONTATOS');
                $aCONTATOS[$request['txtId']] = [
                    'txtId' => $request['txtId'],
                    'txtNome' => $request['txtNome'],
                    'txtCelular' => $request['txtCelular'],
                    'txtTelefone' => $request['txtTelefone'],
                    'txtData' => $request['txtData']
                ];
                $request->session()->put(['CONTATOS' => $aCONTATOS]);
            } else {
                return "Volte a tela anterior e informe todos os valores!
                    <a href='http://localhost:8000/agenda'>Voltar a tela anterior</a>";
            }
        } else {
            if (isset($request['txtId']) && isset($request['txtNome']) && isset($request['txtCelular']) && isset($request['txtTelefone']) && isset($request['txtData'])) {
                $aCONTATOS[$request['txtId']] = [
                    'txtId' => $request['txtId'],
                    'txtNome' => $request['txtNome'],
                    'txtCelular' => $request['txtCelular'],
                    'txtTelefone' => $request['txtTelefone'],
                    'txtData' => $request['txtData']
                ];
                $request->session()->put(['CONTATOS' => $aCONTATOS]);
            } else {
                return "Volte a tela anterior e informe todos os valores!
                        <a href='http://localhost:8000/agenda'>Voltar a tela anterior</a>";
            }
        }
        return "Salvo com sucesso!<br><br>
                        <a href='http://localhost:8000/'>Voltar ao Menu</a><br><br>
                        <a href='http://localhost:8000/agenda/create'>Voltar a tela anterior</a>";
    }

    /**
     * Display the specified resource.
     * Apresenta apenas alguns dados da tabela, item específico
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('agendashow');
    }

    /**
     * Show the form for editing the specified resource.
     * Mostra o formulário com os dados preenchidos
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('agendaedit');
    }

    /**
     * Update the specified resource in storage.
     * Recebe os dados do edit para alterar
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $aCONTATOS  = $request->session()->get('CONTATOS');
        $aCONTATOS[$request['txtId']] = [
            'txtId' => $request['txtId'],
            'txtNome' => $request['txtNome'],
            'txtCelular' => $request['txtCelular'],
            'txtTelefone' => $request['txtTelefone'],
            'txtData' => $request['txtData']
        ];
        $request->session()->put(['CONTATOS' => $aCONTATOS]);

        return $request['txtId'] . " alterado com sucesso <br><br>
        <a href='http://localhost:8000/'>Voltar ao Menu</a><br><br>
        <a href='http://localhost:8000/agenda/".$id."/edit'>Voltar a tela anterior</a>";
    }

    /**
     * Remove the specified resource from storage.
     * Rotina para exclusão de um item
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aCONTATOS  = session()->get('CONTATOS');
        unset($aCONTATOS[$id]);
        session()->put(['CONTATOS' => $aCONTATOS]);
        return "Item " . $id . " excluído com sucesso!<br><br>
        <a href='http://localhost:8000/'>Voltar ao Menu</a><br><br>
        <a href='http://localhost:8000/agenda/'>Voltar a tela anterior</a>";
    }
}
