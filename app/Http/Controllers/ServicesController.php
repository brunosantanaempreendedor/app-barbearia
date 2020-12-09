<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use Exception;

class ServicesController extends Controller
{
    private $services;

    public function __construct(Services $services)
    {
        $this->Services = $services;
    }

    public function index()
    {

        $services = Services::get();

        return view('backend.register.service.index', compact('services'));
    }

    public function create()
    {

        return view('backend.register.service.create');
    }

    public function store(Request $request)
    {
        try {
            $data = $request->all();

            $services = $this->Services;
            $services->name  = $data['name'];
            $services->price = $data['price'];
            $services->duration = $data['duration'];
            $services->description = $data['description'];            

            $services->save();

            return redirect()->route('service.index')->with('msg', 'Registrado com sucesso!')
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
            $services = Services::findOrFail($id);

            return view('backend.register.service.edit', compact('services'));
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

            $services = Services::findOrFail($id);

            $services->update($data);
            return redirect()->route('service.index')->with('msg', 'Alterado com sucesso!')
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
            $services = Services::findOrFail($id);

            $services->delete();
            return redirect()->route('service.index')->with('msg', 'Deletado com sucesso!')
                ->with('type', 'success');
        } catch (Exception $e) {

            return redirect()->route('service.index')->with('msg', 'Ocorreu um erro ao deletar, contate nosso suporte técnico!')
                ->with('type', 'danger');
        }
    }
}
