@extends('layouts.app')

@section('content')
<!-- Content -->
<div class="container-fluid flex-grow-1 container-p-y">

	<h4 class="font-weight-bold py-3 mb-4">
	  <span class="text-muted font-weight-light">Cliente \</span> Edição de Cliente
	</h4>

	<div class="card mb-4">
		<h6 class="card-header">
			Formulário de Edição
		</h6>
		<div class="card-body">
			<form autocomplete="off" novalidate action="{{route('client.update', ['client'  =>  $client->id])}}" method="post">
				<div class="form-row">
					{{csrf_field()}}
                    @method("PUT")
					<div class="form-group col-md-4">
						<label class="form-label">Nome:</label>
						<input name="name" type="text" value="{{$client->name}}" class="form-control">
					</div>
					<div class="form-group col-md-4">
						<label class="form-label">E-mail:</label>
						<input name="email" type="email" value="{{$client->email}}" class="form-control">
					</div>
					<div class="form-group col-md-2">
						<label class="form-label">Telefone:</label>
						<input name="phone" type="string" value="{{$client->phone}}" class="form-control">
					</div>
					<div class="form-group col-md-2">
						<label class="form-label">Data de Nascimento:</label>
						<input name="birthday" type="date" value="{{$client->birthday}}" class="form-control">
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="{{ url('/client')}}" type="submit" class="btn btn-danger">Voltar</a>
			</form>
		</div>
	</div>
</div>

@endsection