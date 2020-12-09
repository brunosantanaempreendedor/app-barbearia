@extends('layouts.app')

@section('content')
<!-- Content -->
<div class="container-fluid flex-grow-1 container-p-y">

	<h4 class="font-weight-bold py-3 mb-4">
	  <span class="text-muted font-weight-light">Sobre \</span> Edição do SObre
	</h4>

	<div class="card mb-4">
		<h6 class="card-header">
			Formulário de Edição
		</h6>
		<div class="card-body">
			<form autocomplete="off" novalidate action="{{route('about.update', ['about'  =>  $about->id])}}" method="post">
				<div class="form-row">
					{{csrf_field()}}
                    @method("PUT")
                    <div class="form-group col-md-4">
						<label class="form-label">Título:</label>
						<input name="title" type="text" value="{{$about->title}}" class="form-control">
					</div>
					<div class="form-group col-md-4">
						<label class="form-label">Descrição/Slogan:</label>
						<input name="description" type="text" value="{{$about->description}}" class="form-control">
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="{{ url('/about')}}" type="submit" class="btn btn-danger">Voltar</a>
			</form>
		</div>
	</div>
</div>

@endsection