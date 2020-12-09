@extends('layouts.app')

@section('content')

<!-- Layout content -->
<div class="layout-content">

	<!-- Content -->
	<div class="container-fluid flex-grow-1 container-p-y">
		<h4 class="d-flex justify-content-between align-items-center w-100 font-weight-bold py-3 mb-4">
            <div>Clientes</div>
	        <a href="{{route('client.create')}}" type="button" class="btn btn-primary rounded-pill d-block"><span class="ion ion-md-add"></span>&nbsp; Novo cliente
	        </a>
        </h4>
		<div class="row">
			<!-- DataTable within card -->
			<div class="col-sm-6 col-xl-12 card">
				<h6 class="card-header">
					Lista de Clientes
				</h6>
				<div class="card-datatable table-responsive">
					<table class="datatables-demo table table-striped table-bordered">
						<thead>
							<tr>
								<th>Nome</th>
								<th>Telefone</th>
								<th>Data de Nascimento</th>
								<th>E-mail:</th>
								<th>Ação</th>
							</tr>
						</thead>
						<tbody>
							@forelse($client as $client)
								<tr class="odd gradeX">
									<td>{{$client->name}}</td>
									<td>{{$client->phone}}</td>
									<td>{{$client->birthday != null ? date( 'd/m/Y' , strtotime($client->birthday)) : "Sem data"}}</td>
									<td>{{$client->email}}</td>
									<td>
										<a href="{{route('client.show',['client'=> $client->id])}}"
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