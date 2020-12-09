@include('layouts.includes.frontend.header')
@yield('content')
<br>
<br>
<br>
<br>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Agendamento Online - Suécia Barbearia</div>
				<div class="card-body">
					<form autocomplete="off" novalidate action="{{route('schedule.store')}}" method="post">
						{{csrf_field()}}
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="example-date-input">Data:</label>
								<input class="form-control" type="date" name ="date" id="date">
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationDefault02">Serviços:</label>
								<select class="form-control" name ="services_id" id="services_id">
								@foreach($services as $service)
									<option value="{{$service->id}}">{{$service->name}}</option>
								@endforeach	
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-4 mb-3">
								<label for="validationDefault02">Unidades:</label>
								<select class="form-control" name ="units_id" id="units_id">
								@foreach($units as $unit)
									<option value="{{$unit->id}}">{{$unit->name}}</option>
								@endforeach	
								</select>
							</div>
							<div class="col-md-4 mb-3">
								<label for="validationDefault02">Horário</label>
								<input class="form-control" type="time" name="appointment" id="appointment">
							</div>
							<div class="col-md-4 mb-3">
								<label for="validationDefault02">Barbeiros:</label>
								<select class="form-control" name="barbers_id" id="barbers_id">
									@foreach($barbers as $barber)
										<option value="{{$barber->id}}">{{$barber->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="col-md-4 mb-3">
								<label for="validationDefault01">Nome Completo</label>
								<input type="text" class="form-control" name="name" id="validationDefault01" required>
							</div>
							<div class="col-md-4 mb-3">
								<label for="validationDefault03">E-mail:</label>
								<input class="form-control" type="email" name="email" id="email">
							</div>
							<div class="col-md-4 mb-3">
								<label for="validationDefault04">Telefone:</label>
								<input class="form-control" type="tel" name="phone" id="phone">
							</div>
						</div>
						<!-- <div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" name="another_person" id="another_person">
								<label class="form-check-label" for="invalidCheck2">
									Estou marcando para outra pessoa
								</label>
							</div>
						</div> -->
						<button class="btn btn-primary" type="submit">Agendar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var cbs = document.getElementsByClassName('cb');

	function cbClick() {
		var input = document.querySelector('input[data-id="' + this.getAttribute('data-id') + '"]:not([type="checkbox"])');
		input.disabled = !this.checked;
	}

	for(var i in cbs) {
		cbs[i].onclick = cbClick;
	}
</script>