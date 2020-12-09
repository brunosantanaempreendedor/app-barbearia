@extends('layouts.app')

@section('content')
<!-- Content -->
<div class="container-fluid flex-grow-1 container-p-y">

	<h4 class="font-weight-bold py-3 mb-4">
	  <span class="text-muted font-weight-light">Rodapé \</span> Novo Rodapé
	</h4>

	<div class="card mb-4">
		<h6 class="card-header">
			Formulário de criação
		</h6>
		<div class="card-body">
			<form autocomplete="off" novalidate action="{{route('footer.store')}}" method="post">
				<div class="form-row">
					{{csrf_field()}}
					<div class="form-group col-md-4">
						<label class="form-label">Descrição/Slogan:</label>
						<input name="description" type="text" class="form-control">
					</div>
					<div class="form-group col-md-4">
						<label class="form-label">Endereço:</label>
						<input name="address" type="text" class="form-control">
					</div>
					<div class="form-group col-md-2">
						<label class="form-label">E-mail:</label>
						<input name="email" type="email" class="form-control">
					</div>
					<div class="form-group col-md-2">
						<label class="form-label">Telefone:</label>
						<input name="phone" type="string" class="form-control">
					</div>
					<div class="form-group col-md-5">
						<label class="form-label">Periodo:</label>
						<input name="label1" type="text" class="form-control">
					</div>
					<div class="form-group col-md-5">
						<label class="form-label">Horário:</label>
						<input name="label2" type="text" class="form-control">
					</div>
					<div class="form-group col-md-5">
						<label class="form-label">Periodo:</label>
						<input name="label3" type="string" class="form-control">
					</div>
					<div class="form-group col-md-5">
						<label class="form-label">Horário:</label>
						<input name="label4" type="text" class="form-control">
					</div>
					<div class="form-group col-md-5">
						<label class="form-label">Periodo:</label>
						<input name="label5" type="text" class="form-control">
					</div>
					<div class="form-group col-md-5">
						<label class="form-label">Horário:</label>
						<input name="label6" type="string" class="form-control">
					</div>
					<div class="form-group col-md-5">
						<label class="form-label">Periodo:</label>
						<input name="label7" type="string" class="form-control">
					</div>
					<div class="form-group col-md-5">
						<label class="form-label">Horário:</label>
						<input name="label8" type="string" class="form-control">
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="{{ url('/footer')}}" type="submit" class="btn btn-danger">Voltar</a>
			</form>
		</div>
	</div>
</div>

@endsection