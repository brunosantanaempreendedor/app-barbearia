@extends('layouts.app')

@section('content')

<!-- Layout content -->
<div class="layout-content">

	<!-- Content -->
	<div class="container-fluid flex-grow-1 container-p-y">
		<h4 class="d-flex justify-content-between align-items-center w-100 font-weight-bold py-3 mb-4">
            <div>Sobre</div>
	        <a href="{{route('about.create')}}" type="button" class="btn btn-primary rounded-pill d-block"><span class="ion ion-md-add"></span>&nbsp; Novo
	        </a>
        </h4>
		<div class="row">
			<!-- DataTable within card -->
			<div class="col-sm-6 col-xl-12 card">
				<h6 class="card-header">
					Sobre a Barbearia
				</h6>
				<div class="card-datatable table-responsive">
					<table class="datatables-demo table table-striped table-bordered">
						<thead>
							<tr>
								<th>ID:</th>
								<th>Título:</th>
								<th>Registrado em:</th>
								<th>Ação:</th>
							</tr>
						</thead>
						<tbody>
							@forelse($about as $abouts)
								<tr class="odd gradeX">
									<td>{{$abouts->id}}</td>
									<td>{{$abouts->title}}</td>
									<td>{{ date( 'd/m/Y' , strtotime($abouts->created_at))}}</td>
									<td>
										<a href="{{route('about.show',['about'=> $abouts->id])}}"
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