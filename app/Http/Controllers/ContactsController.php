<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Exception;

class ContactsController extends Controller
{
    private $contact;

    public function __construct(Contact $contact)
    {
        $this->Contact = $contact;
    }

    public function index()
    {

        $contact = Contact::get();

        return view('backend.contacts.index', compact('contact'));
    }

    public function create()
    {

        return view('backend.contacts.create');
    }

    public function store(Request $request)
    {

        try {
            $data = $request->all();

            $contact = $this->Contact;
            $contact->name = $data['name'];
            $contact->email = $data['email'];
            $contact->content = $data['content'];

            $contact->save();

            return redirect()->route('contacts.index')->with('msg', 'Registrado com sucesso!')
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
            $contact = Contact::findOrFail($id);

            return view('backend.contacts.edit', compact('contact'));
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

            $contact = Contact::findOrFail($id);

            $contact->update($data);
            return redirect()->route('contact.index')->with('msg', 'Alterado com sucesso!')
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
            $contact = Contact::findOrFail($id);

            $contact->delete();
            return redirect()->route('contact.index')->with('msg', 'Deletado com sucesso!')
                ->with('type', 'success');
        } catch (Exception $e) {

            return redirect()->route('contact.index')->with('msg', 'Ocorreu um erro ao deletar, contate nosso suporte técnico!')
                ->with('type', 'danger');
        }
    }
}
