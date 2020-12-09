@extends('layouts.app')

@section('content')

<!-- Layout content -->
<div class="layout-content">

	<!-- Content -->
	<div class="container-fluid flex-grow-1 container-p-y">
		<h4 class="d-flex justify-content-between align-items-center w-100 font-weight-bold py-3 mb-4">
            <div>Produtos</div>
	        <a href="{{route('product.create')}}" type="button" class="btn btn-primary rounded-pill d-block"><span class="ion ion-md-add"></span>&nbsp; Novo Produto
	        </a>
        </h4>
		<div class="row">
			<!-- DataTable within card -->
			<div class="col-sm-6 col-xl-12 card">
				<h6 class="card-header">
					Lista de Produtos
				</h6>
				<div class="card-datatable table-responsive">
					<table class="datatables-demo table table-striped table-bordered">
						<thead>
							<tr>
								<th>ID:</th>
								<th>Nome:</th>
								<th>Preço:</th>
								<th>Criado em:</th>
								<th>Ação:</th>
							</tr>
						</thead>
						<tbody>
							@forelse($products as $product)
								<tr class="odd gradeX">
									<td>{{$product->id}}</td>
									<td>{{$product->name}}</td>
									<td class="center"> {{$product->price}}</td>
									<td>{{ date( 'd/m/Y' , strtotime($product->created_at))}}</td>
									<td>
										<a href="{{route('product.show',['product'=> $product->id])}}"
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