<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footer;
use Exception;

class FooterController extends Controller
{
    private $footer;

    public function __construct(Footer $footer)
    {
        $this->Footer = $footer;
    }

    public function index()
    {

        $footer = Footer::get();

        return view('backend.cms.footer.index', compact('footer'));
    }

    public function create()
    {

        return view('backend.cms.footer.create');
    }

    public function store(Request $request)
    {
        try {
            $data = $request->all();
            
            $footer = $this->Footer;
            $footer->description = $data['description'];
            $footer->address = $data['address'];
            $footer->email = $data['email'];
            $footer->phone = $data['phone'];
            $footer->label1 = $data['label1'];
            $footer->label2 = $data['label2'];
            $footer->label3 = $data['label3'];
            $footer->label4 = $data['label4'];
            $footer->label5 = $data['label5'];
            $footer->label6 = $data['label6'];
            $footer->label7 = $data['label7'];
            $footer->label8 = $data['label8'];

            $footer->save();

            return redirect()->route('footer.index')->with('msg', 'Registrado com sucesso!')
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
            $footer = Footer::findOrFail($id);

            return view('backend.cms.footer.edit', compact('footer'));
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

            $footer = Footer::findOrFail($id);

            $footer->update($data);
            return redirect()->route('footer.index')->with('msg', 'Alterado com sucesso!')
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
            $footer = Footer::findOrFail($id);

            $footer->delete();
            return redirect()->route('footer.index')->with('msg', 'Deletado com sucesso!')
                ->with('type', 'success');
        } catch (Exception $e) {

            return redirect()->route('footer.index')->with('msg', 'Ocorreu um erro ao deletar, contate nosso suporte técnico!')
                ->with('type', 'danger');
        }
    }
}
