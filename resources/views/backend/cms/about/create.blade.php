@extends('layouts.app')

@section('content')
<!-- Content -->
<div class="container-fluid flex-grow-1 container-p-y">

	<h4 class="font-weight-bold py-3 mb-4">
	  <span class="text-muted font-weight-light">Sobre \</span> Novo sobre
	</h4>

	<div class="card mb-4">
		<h6 class="card-header">
			Formulário de criação
		</h6>
		<div class="card-body">
			<form autocomplete="off" novalidate action="{{route('about.store')}}" method="post">
				<div class="form-row">
					{{csrf_field()}}
					<div class="form-group col-md-4">
						<label class="form-label">Título:</label>
						<input name="title" type="text" class="form-control">
					</div>
					<div class="form-group col-md-4">
						<label class="form-label">Descrição:</label>
						<input name="description" type="text" class="form-control">
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="{{ url('/about')}}" type="submit" class="btn btn-danger">Voltar</a>
			</form>
		</div>
	</div>
</div>

@endsection