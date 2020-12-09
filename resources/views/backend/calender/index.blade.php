@extends('layouts.app')

@section('content')

<!-- Layout content -->
<div class="layout-content">

	<!-- Content -->
	<div class="container-fluid flex-grow-1 container-p-y">
		<h4 class="d-flex justify-content-between align-items-center w-100 font-weight-bold py-3 mb-4">
            <div>Agenda</div>
	        <!-- <a href="{{route('client.create')}}" type="button" class="btn btn-primary rounded-pill d-block"><span class="ion ion-md-add"></span>&nbsp; Novo agendamento
	        </a> -->
        </h4>
		<div class="row">
			<!-- DataTable within card -->
			<div class="col-sm-6 col-xl-12 card">
				<h6 class="card-header">
					Lista de Agendamentos
				</h6>
				<div class="card-datatable table-responsive">
					<table class="datatables-demo table table-striped table-bordered">
						<thead>
							<tr>
								<th>Data</th>
								<th>Horário</th>
								<th>Nome</th>
								<th>Telefone</th>
								<th>Atender</th>
							</tr>
						</thead>
						<tbody>
							@foreach($calender as $calenders)
								<tr class="odd gradeX">
									<td>{{ date( 'd/m/Y' , strtotime($calenders->date))}}</td>
									<td>{{ date( 'H:i' , strtotime($calenders->appointment))}}</td>
									<td>{{$calenders->name}}</td>
									<td>{{$calenders->phone}}</td>
									<td>
										<a href="{{route('calender.update',['calender'=> $calenders->id])}}"
	                                     class="table-action" data-toggle="tooltip"
	                                      data-original-title="Abrir">
	                                        <i class="fas fa-edit"></i>
	                                    </a>
									</td>
								</tr>
							@endforeach	
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- / Content -->
	@endsection