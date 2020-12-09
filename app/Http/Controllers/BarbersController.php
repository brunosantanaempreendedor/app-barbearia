<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barbers;
use Exception;

class BarbersController extends Controller
{
    private $barbers;

    public function __construct(Barbers $barbers)
    {
        $this->Barbers = $barbers;
    }

    public function index()
    {

        $barbers = Barbers::get();

        return view('backend.register.barber.index', compact('barbers'));
    }

    public function create()
    {

        return view('backend.register.barber.create');
    }

    public function store(Request $request)
    {
        try {
            $data = $request->all();

            $barbers = $this->Barbers;
            $barbers->name = $data['name'];

            $barbers->save();

            return redirect()->route('barber.index')->with('msg', 'Registrado com sucesso!')
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
            $barbers = Barbers::findOrFail($id);

            return view('backend.register.barber.edit', compact('barbers'));
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

            $barbers = Barbers::findOrFail($id);

            $barbers->update($data);
            return redirect()->route('barber.index')->with('msg', 'Alterado com sucesso!')
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
            $barbers = Barbers::findOrFail($id);

            $barbers->delete();
            return redirect()->route('barber.index')->with('msg', 'Deletado com sucesso!')
                ->with('type', 'success');
        } catch (Exception $e) {

            return redirect()->route('barber.index')->with('msg', 'Ocorreu um erro ao deletar, contate nosso suporte técnico!')
                ->with('type', 'danger');
        }
    }
}
