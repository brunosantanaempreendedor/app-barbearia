@extends('layouts.app')

@section('content')
				<!-- Layout content -->
				<div class="layout-content">

					<!-- Content -->
					<div class="container-fluid flex-grow-1 container-p-y">

						<h4 class="font-weight-bold py-3 mb-4">
							Dashboard
							<div class="text-muted text-tiny mt-1"><small class="font-weight-normal">Hoje é quarta-feira, 9 setembro 2020</small></div>
						</h4>

						<!-- Counters -->
						<div class="row">
							<div class="col-sm-6 col-xl-4">

								<div class="card mb-4">
									<div class="card-body">
										<div class="d-flex align-items-center">
											<div class="pe-7s-plus d-block display-4 text-success"></div>
											<div class="ml-3">
												<div class="text-muted small">Novos agendamentos</div>
												<div class="text-large">{{$new}}</div>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="col-sm-6 col-xl-4">

								<div class="card mb-4">
									<div class="card-body">
										<div class="d-flex align-items-center">
											<div class="pe-7s-download d-block display-4 text-info"></div>
											<div class="ml-3">
												<div class="text-muted small">Agendamentos confirmados</div>
												<div class="text-large">{{$confirmed}}</div>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="col-sm-6 col-xl-4">
								<div class="card mb-4">
									<div class="card-body">
										<div class="d-flex align-items-center">
											<div class="pe-7s-alarm d-block display-4 text-danger"></div>
											<div class="ml-3">
												<div class="text-muted small">Agendamentos atendidos</div>
												<div class="text-large">{{$attended}}</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-xl-3">
								<div class="card mb-4">
									<h6 class="card-header bg-success text-white">
										<i class="ion ion-md-cash"></i>&nbsp;
										Financeiro
									</h6>
									<div class="bg-success text-white">
										<div class="d-flex align-items-center position-relative mt-4" style="height:140px;">
											<div class="w-100 position-absolute" style="height:140px;top:0;">
												<canvas id="statistics-chart-5"></canvas>
											</div>
											<div class="w-100 text-center text-xlarge">{{$balance}}</div>
										</div>
										<div class="text-center mt-3 mb-4">
											Saldo atual
										</div>
									</div>
									<!-- <div class="card-footer border-0 text-center py-3">
										<div class="row">
											<div class="col">
												<div class="text-muted small mb-1">Despesas</div>
												<strong class="text-big">R$ 45,50</strong>
											</div>
											<div class="col">
												<div class="text-muted small mb-1">Aguardando pagamento</div>
												<strong class="text-big">R$654,50</strong>
											</div>
										</div>
									</div> -->
								</div>

							</div>
							<div class="col-md-9">
								<!-- DataTable within card -->
								<div class="col-sm-6 col-xl-12 card">
									<h6 class="card-header">
										Lista de Clientes
									</h6>
									<div class="card-datatable table-responsive">
										<table class="datatables-demo table table-striped table-bordered">
											<thead>
												<tr>
													<th>Data</th>
													<th>Hora</th>
					 								<th>Nome</th>
					 								<th>Serviço</th>
					 								<th>Unidade</th>
												</tr>
											</thead>
											<tbody>
												@forelse($scheduling as $scheduling)
													<tr class="odd gradeX">
														<td>{{ date( 'd/m/Y' , strtotime($scheduling->date))}}</td>
														<td>{{ date( 'H:i' , strtotime($scheduling->appointment))}}</td>
					 									<td>{{$scheduling->name}}</td>
					 									<td>{{$scheduling->services->name}}</td>
														<td>{{$scheduling->units->name}}</td>
													</tr>
												@endforeach	
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- / Content -->
@endsection
					