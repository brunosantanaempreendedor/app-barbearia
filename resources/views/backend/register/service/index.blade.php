@extends('layouts.app')

@section('content')

<!-- Layout content -->
<div class="layout-content">

	<!-- Content -->
	<div class="container-fluid flex-grow-1 container-p-y">
		<h4 class="d-flex justify-content-between align-items-center w-100 font-weight-bold py-3 mb-4">
            <div>Serviços</div>
	        <a href="{{route('service.create')}}" type="button" class="btn btn-primary rounded-pill d-block"><span class="ion ion-md-add"></span>&nbsp; Novo serviço
	        </a>
        </h4>
		<div class="row">
			<!-- DataTable within card -->
			<div class="col-sm-6 col-xl-12 card">
				<h6 class="card-header">
					Lista de Serviços
				</h6>
				<div class="card-datatable table-responsive">
					<table class="datatables-demo table table-striped table-bordered">
						<thead>
							<tr>
								<th>ID:</th>
								<th>Nome:</th>
								<th>Preço:</th>
								<th>Duração (min.):</th>
								<th>Criado em:</th>
								<th>Ação:</th>

							</tr>
						</thead>
						<tbody>
							@foreach($services as $service)
								<tr class="odd gradeX">
									<td>{{$service->id}}</td>
									<td>{{$service->name}}</td>
									<td>{{$service->price}}</td>
									<td>{{$service->duration}}</td>
									<td>{{ date( 'd/m/Y' , strtotime($service->created_at))}}</td>
									<td>
										<a href="{{route('service.show',['service'=> $service->id])}}"
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