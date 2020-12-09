<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Units;
use Exception;

class UnitsController extends Controller
{
    private $units;

    public function __construct(Units $units)
    {
        $this->Units = $units;
    }

    public function index()
    {

        $units = Units::get();

        return view('backend.register.units.index', compact('units'));
    }

    public function create()
    {

        return view('backend.register.units.create');
    }

    public function store(Request $request)
    {
        try {
            $data = $request->all();

            $units = $this->Units;
            $units->name = $data['name'];

            $units->save();

            return redirect()->route('unit.index')->with('msg', 'Registrado com sucesso!')
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
            $units = Units::findOrFail($id);

            return view('backend.register.units.edit', compact('units'));
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

            $units = Units::findOrFail($id);

            $units->update($data);
            return redirect()->route('unit.index')->with('msg', 'Alterado com sucesso!')
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
            $units = Units::findOrFail($id);

            $units->delete();
            return redirect()->route('unit.index')->with('msg', 'Deletado com sucesso!')
                ->with('type', 'success');
        } catch (Exception $e) {

            return redirect()->route('unit.index')->with('msg', 'Ocorreu um erro ao deletar, contate nosso suporte técnico!')
                ->with('type', 'danger');
        }
    }
}
