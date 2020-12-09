<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scheduling;
use App\Services;
use App\Barbers;
use App\client;
use App\Units;
use Exception;

class SchedulingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $scheduling;

    public function __construct(Scheduling $scheduling, Client $client)
    {
        $this->Scheduling = $scheduling;
        $this->Client = $client;
    }

    public function index()
    {
        $scheduling = Scheduling::get();
        $services = Services::get();
        $barbers = Barbers::get();
        $units = Units::get();

        return view('frontend.scheduling.index', ['scheduling' => $scheduling,'services' => $services,'barbers' => $barbers,'units' => $units]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();

            $scheduling = $this->Scheduling;
            $scheduling->date = $data['date'];
            $scheduling->services_id = $data['services_id'];
            $scheduling->units_id = $data['units_id'];
            $scheduling->appointment = $data['appointment'];
            $scheduling->barbers_id = $data['barbers_id'];
            $scheduling->name = $data['name'];
            $scheduling->email = $data['email'];
            $scheduling->phone = $data['phone'];
            // $scheduling->another_person = $data['another_person'];
            // $scheduling->name_person_checked = $data['name_person_checked'];
            $scheduling->status_id = 1;

            $verify_scheduling = Scheduling::where('appointment', $data['appointment'])->where('date', $data['date'])->first();

            if ($verify_scheduling != null) {

            return redirect()->back()->with('msg', 'Já existe um horário marcado!')
                ->with('type', 'warning')
                ->with('scheduling', $scheduling);
            }

            $scheduling->save();

            $client = $this->Client;
            $client->name = $data['name'];
            $client->email = $data['email'];
            $client->phone = $data['phone'];

            $client->save();


            return redirect()->route('/.website')->with('msg', 'Registrado com sucesso!')
                ->with('type', 'success');
        } catch (\Illuminate\Database\QueryException $ex) {

            return redirect()->back()->with('msg', 'Por favor, preencha todos os campos corretamente!')
                ->with('type', 'warning');
        } catch (Exception $e) {

            return redirect()->back()->with('msg', 'Ocorreu um erro na inserção, contate nosso suporte técnico!')
                ->with('type', 'danger');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $scheduling = Scheduling::findOrFail($id);

            return view('backend.schedule.edit', compact('scheduling'));
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

            $scheduling = Scheduling::findOrFail($id);

            $scheduling->update($data);
            return redirect()->route('schedule.index')->with('msg', 'Alterado com sucesso!')
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
            $scheduling = Scheduling::findOrFail($id);

            $scheduling->delete();
            return redirect()->route('schedule.index')->with('msg', 'Deletado com sucesso!')
                ->with('type', 'success');
        } catch (Exception $e) {

            return redirect()->route('schedule.index')->with('msg', 'Ocorreu um erro ao deletar, contate nosso suporte técnico!')
                ->with('type', 'danger');
        }
    }
}
