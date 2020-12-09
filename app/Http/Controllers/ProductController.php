<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Exception;

class ProductController extends Controller
{
    private $products;

    public function __construct(Products $products)
    {
        $this->Products = $products;
    }

    public function index()
    {

        $products = Products::get();

        return view('backend.register.product.index', compact('products'));
    }

    public function create()
    {

        return view('backend.register.product.create');
    }

    public function store(Request $request)
    {
        try {
            $data = $request->all();

            $products = $this->Products;
            $products->name  = $data['name'];
            $products->price = $data['price'];

            $products->save();

            return redirect()->route('product.index')->with('msg', 'Registrado com sucesso!')
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
            $products = Products::findOrFail($id);

            return view('backend.register.product.edit', compact('products'));
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

            $products = Products::findOrFail($id);

            $products->update($data);
            return redirect()->route('product.index')->with('msg', 'Alterado com sucesso!')
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
            $products = Products::findOrFail($id);

            $products->delete();
            return redirect()->route('product.index')->with('msg', 'Deletado com sucesso!')
                ->with('type', 'success');
        } catch (Exception $e) {

            return redirect()->route('product.index')->with('msg', 'Ocorreu um erro ao deletar, contate nosso suporte técnico!')
                ->with('type', 'danger');
        }
    }
}
