<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Exception;

class AboutController extends Controller
{
    private $about;

    public function __construct(About $about)
    {
        $this->About = $about;
    }

    public function index()
    {

        $about = About::get();

        return view('backend.cms.about.index', compact('about'));
    }

    public function create()
    {

        return view('backend.cms.about.create');
    }

    public function store(Request $request)
    {
        try {
            $data = $request->all();

            $about = $this->About;
            $about->title = $data['title'];
            $about->description = $data['description'];

            $about->save();

            return redirect()->route('about.index')->with('msg', 'Registrado com sucesso!')
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
            $about = About::findOrFail($id);

            return view('backend.cms.about.edit', compact('about'));
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

            $about = About::findOrFail($id);

            $about->update($data);
            return redirect()->route('about.index')->with('msg', 'Alterado com sucesso!')
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
            $about = About::findOrFail($id);

            $about->delete();
            return redirect()->route('about.index')->with('msg', 'Deletado com sucesso!')
                ->with('type', 'success');
        } catch (Exception $e) {

            return redirect()->route('about.index')->with('msg', 'Ocorreu um erro ao deletar, contate nosso suporte técnico!')
                ->with('type', 'danger');
        }
    }
}
