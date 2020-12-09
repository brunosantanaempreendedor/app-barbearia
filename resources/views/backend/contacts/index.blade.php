@extends('layouts.app')

@section('content')

<!-- Layout content -->
<div class="layout-content">

	<!-- Content -->
	<div class="container-fluid flex-grow-1 container-p-y">
		<h4 class="d-flex justify-content-between align-items-center w-100 font-weight-bold py-3 mb-4">
            <div>Mensagens</div>
	        <!-- <a href="{{route('client.create')}}" type="button" class="btn btn-primary rounded-pill d-block"><span class="ion ion-md-add"></span>&nbsp; Novo cliente
	        </a> -->
        </h4>
		<div class="row">
			<!-- DataTable within card -->
			<div class="col-sm-6 col-xl-12 card">
				<h6 class="card-header">
					Lista de Mensagens
				</h6>
				<div class="card-datatable table-responsive">
					<table class="datatables-demo table table-striped table-bordered">
						<thead>
							<tr>
								<th>Nome:</th>
								<th>E-mail:</th>
								<th>Registrado em:</th>
								<th>Mensagem:</th>
							</tr>
						</thead>
						<tbody>
							@forelse($contact as $contacts)
								<tr class="odd gradeX">
									<td>{{$contacts->name}}</td>
									<td>{{$contacts->email}}</td>
									<td>{{ date( 'd/m/Y' , strtotime($contacts->created_at))}}</td>
									<td>{{$contacts->content}}</td>
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