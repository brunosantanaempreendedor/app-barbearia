@extends('layouts.app')

@section('content')

<!-- Layout content -->
<div class="layout-content">

	<!-- Content -->
	<div class="container-fluid flex-grow-1 container-p-y">
		<h4 class="d-flex justify-content-between align-items-center w-100 font-weight-bold py-3 mb-4">
            <div>Rodapé</div>
	        <a href="{{route('footer.create')}}" type="button" class="btn btn-primary rounded-pill d-block"><span class="ion ion-md-add"></span>&nbsp; Novo
	        </a>
        </h4>
		<div class="row">
			<!-- DataTable within card -->
			<div class="col-sm-6 col-xl-12 card">
				<h6 class="card-header">
					Lista de Rodapé
				</h6>
				<div class="card-datatable table-responsive">
					<table class="datatables-demo table table-striped table-bordered">
						<thead>
							<tr>
								<th>ID:</th>
								<th>Descrição:</th>
								<th>Registrado em:</th>
								<th>Ação:</th>
							</tr>
						</thead>
						<tbody>
							@forelse($footer as $footers)
								<tr class="odd gradeX">
									<td>{{$footers->id}}</td>
									<td>{{$footers->description}}</td>
									<td>{{ date( 'd/m/Y' , strtotime($footers->created_at))}}</td>
									<td>
										<a href="{{route('footer.show',['footer'=> $footers->id])}}"
	                                     class="table-action" data-toggle="tooltip"
	                                      data-original-title="Abrir">
	                                        <i class="fas fa-edit"></i>
	                                    </a>

	                                    <form class="table-action deleteForm" method="post">
	                                        @csrf
	                                        @method(' DELETE') <a class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Deletar" href="javascript:void(0)" onClick="deleteRegister('{{$footers->id}}')">
	                                        <i class="fas fa-trash"></i>
	                                        </a>
	                                    </form>
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
<script>
    deleteRegister = function(id) {

        Swal.fire({
            title: 'Você tem certeza?',
            text: "Gostaria de deletar este registro do seu site?",
            type: 'warning',
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonClass: 'btn btn-danger',
            confirmButtonText: 'Sim, deletar!',
            cancelButtonText: 'Não, manter!',
            cancelButtonClass: 'btn btn-secondary'
        }).then((result) => {
            if (result.value) {
                document.getElementsByClassName('deleteForm')[0].action = "/footer/" + id;
                document.getElementsByClassName('deleteForm')[0].submit();
            }
        })
    }

    @if(session('msg'))
    notify('{{session("msg")}}', '{{session("type")}}');
    @endif
</script>
@endsection