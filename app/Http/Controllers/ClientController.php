<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Exception;

class ClientController extends Controller
{
    private $client;

    public function __construct(Client $client)
    {
        $this->Client = $client;
    }

    public function index()
    {

        $client = Client::get();

        return view('backend.client.index', compact('client'));
    }

    public function create()
    {

        return view('backend.client.create');
    }

    public function store(Request $request)
    {
        try {
            $data = $request->all();

            $client = $this->Client;
            $client->name = $data['name'];
            $client->email = $data['email'];
            $client->phone = $data['phone'];
            $client->birthday = $data['birthday'];

            $client->save();

            return redirect()->route('client.index')->with('msg', 'Registrado com sucesso!')
                ->with('type', 'success');
        } catch (\Illuminate\Database\QueryException $ex) {

            return redirect()->back()->with('msg', 'Por favor, preencha todos os campos corretamente!')
                ->with('type', 'warning');
        } catch (Exception $e) {

            return redirect()->back()->with('msg', 'Ocorreu um erro na inserção, contate nosso suporte técnico!')
                ->with('type', 'danger');
        }
    }

    public function show($id)
    {
        try {
            $client = Client::findOrFail($id);

            return view('backend.client.edit', compact('client'));
        } catch (Exception $e) {
            return redirect('home')->with('msg', 'Não encontrado!')
                ->with('type', 'warning');
        }
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();

            $client = Client::findOrFail($id);

            $client->update($data);
            return redirect()->route('client.index')->with('msg', 'Alterado com sucesso!')
                ->with('type', 'success');
        } catch (\Illuminate\Database\QueryException $ex) {

            return redirect()->back()->with('msg', 'Por favor, preencha todos os campos corretamente!')
                ->with('type', 'warning');
        } catch (Exception $e) {

            return redirect()->back()->with('msg', 'Ocorreu um erro na alteração, contate nosso suporte técnico!')
                ->with('type', 'danger');
        }
    }

    public function destroy($id)
    {
        try {
            $client = Client::findOrFail($id);

            $client->delete();
            return redirect()->route('client.index')->with('msg', 'Deletado com sucesso!')
                ->with('type', 'success');
        } catch (Exception $e) {

            return redirect()->route('client.index')->with('msg', 'Ocorreu um erro ao deletar, contate nosso suporte técnico!')
                ->with('type', 'danger');
        }
    }
}
