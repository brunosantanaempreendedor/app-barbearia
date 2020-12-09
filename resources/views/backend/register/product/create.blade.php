@extends('layouts.app')

@section('content')
<!-- Content -->
<div class="container-fluid flex-grow-1 container-p-y">

	<h4 class="font-weight-bold py-3 mb-4">
	  <span class="text-muted font-weight-light">Produto \</span> Novo Produto
	</h4>

	<div class="card mb-4">
		<h6 class="card-header">
			Formulário de criação
		</h6>
		<div class="card-body">
			<form autocomplete="off" novalidate action="{{route('product.store')}}" method="post">
				<div class="form-row">
					{{csrf_field()}}
					<div class="form-group col-md-4">
						<label class="form-label">Nome:</label>
						<input name="name" type="text" class="form-control">
					</div>
					<div class="form-group col-md-4">
						<label class="form-label">Preço:</label>
						<input name="price" type="decimal" class="form-control">
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="{{ url('/product')}}" type="submit" class="btn btn-danger">Voltar</a>
			</form>
		</div>
	</div>
</div>

@endsection