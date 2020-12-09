<!DOCTYPE html>

<html lang="en" class="light-style">

<head>
	<title>ERS Gestão - Plataforma para Barbeiros</title>

	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon" type="image/x-icon" href="{{asset('backend/img/favicon.png')}}">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">

	<!-- Icon fonts -->
	<link rel="stylesheet" href="{{asset('backend/vendor/fonts/fontawesome.css')}}">
	<link rel="stylesheet" href="{{asset('backend/vendor/fonts/ionicons.css')}}">
	<link rel="stylesheet" href="{{asset('backend/vendor/fonts/linearicons.css')}}">
	<link rel="stylesheet" href="{{asset('backend/vendor/fonts/open-iconic.css')}}">
	<link rel="stylesheet" href="{{asset('backend/vendor/fonts/pe-icon-7-stroke.css')}}">

	<!-- Core stylesheets -->
	<link rel="stylesheet" href="{{asset('backend/vendor/css/rtl/bootstrap.css')}}" class="theme-settings-bootstrap-css">
	<link rel="stylesheet" href="{{asset('backend/vendor/css/rtl/appwork.css')}}" class="theme-settings-appwork-css">
	<link rel="stylesheet" href="{{asset('backend/vendor/css/rtl/theme-corporate.css')}}" class="theme-settings-theme-css">
	<link rel="stylesheet" href="{{asset('backend/vendor/css/rtl/colors.css')}}" class="theme-settings-colors-css">
	<link rel="stylesheet" href="{{asset('backend/vendor/css/rtl/uikit.css')}}">
	<link rel="stylesheet" href="{{asset('backend/css/demo.css')}}">

	<!-- Load polyfills -->
	<script src="{{asset('backend/vendor/js/polyfills.js')}}"></script>
	<script>document['documentMode']===10&&document.write('<script src="https://polyfill.io/v3/polyfill.min.js?features=Intl.~locale.en"><\/script>')</script>

	<script src="{{asset('backend/vendor/js/material-ripple.js')}}"></script>
	<script src="{{asset('backend/vendor/js/layout-helpers.js')}}"></script>

	<!-- Core scripts -->
	<script src="{{asset('backend/vendor/js/pace.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Libs -->
	<link rel="stylesheet" href="{{asset('backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}">
	<link rel="stylesheet" href="{{asset('backend/vendor/libs/datatables/datatables.css')}}">

</head>

<body>
	<div class="page-loader">
		<div class="bg-primary"></div>
	</div>

	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-2">
		<div class="layout-inner">

			<!-- Layout sidenav -->
			<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark">

				<!-- Brand demo (see assets/css/demo/demo.css) -->
				<div class="app-brand demo">
					<span class="app-brand-logo demo bg-primary">
					<link rel="icon" type="image/x-icon" href="{{asset('backend/img/logo.png')}}">

					</span>
					<a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">ERS Gestão</a>
					<a href="javascript:void(0)" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
						<i class="ion ion-md-menu align-middle"></i>
					</a>
				</div>

				<div class="sidenav-divider mt-0"></div>

				<!-- Links -->
				<ul class="sidenav-inner py-1">

					<!-- Dashboards -->
					<li class="sidenav-item">
						<a href="{{url('/home')}}" class="sidenav-link"><i class="sidenav-icon ion ion-md-speedometer"></i>
							<div>Dashboard</div>
						</a>
					</li>

					<li class="sidenav-divider mb-1"></li>
					<li class="sidenav-header small font-weight-semibold">Módulos</li>

					<li class="sidenav-item">
						<a href="{{url('/client')}}" class="sidenav-link"><i class="sidenav-icon fas fa-user d-block"></i>
							<div>Clientes</div>
						</a>
					</li>

					<!-- UI elements -->
					<li class="sidenav-item">
						<a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon fas fa-plus-circle d-block"></i>
							<div>Cadastros</div>
						</a>

						<ul class="sidenav-menu">
							<li class="sidenav-item">
								<a href="{{url('/product')}}" class="sidenav-link">
									<div>Produtos</div>
								</a>
							</li>
							<li class="sidenav-item">
								<a href="{{url('/unit')}}" class="sidenav-link">
									<div>Unidades</div>
								</a>
							</li>
							<li class="sidenav-item">
								<a href="{{url('/service')}}" class="sidenav-link">
									<div>Serviços</div>
								</a>
							</li>
							<li class="sidenav-item">
								<a href="{{url('/barber')}}" class="sidenav-link">
									<div>Barbeiros</div>
								</a>
							</li>
						</ul>
					</li>

					<li class="sidenav-item">
						<a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon fas fa-bullhorn d-block"></i>
							<div>Gestão Site</div>
						</a>

						<ul class="sidenav-menu">
							<!-- <li class="sidenav-item">
								<a href="{{url('/pagina-inicial')}}" class="sidenav-link">
									<div>Home</div>
								</a>
							</li> -->
							<li class="sidenav-item">
								<a href="{{url('/about')}}" class="sidenav-link">
									<div>Sobre</div>
								</a>
							</li>
							<li class="sidenav-item">
								<a href="{{url('/service')}}" class="sidenav-link">
									<div>Serviços</div>
								</a>
							</li>
							<li class="sidenav-item">
								<a href="{{url('/footer')}}" class="sidenav-link">
									<div>Rodapé</div>
								</a>
							</li>
						</ul>
					</li>

					<li class="sidenav-item">
						<a href="{{url('/calender')}}" class="sidenav-link"><i class="sidenav-icon fas fa-calendar-alt"></i>
							<div>Agenda</div>
						</a>
					</li>

					<li class="sidenav-item">
						<a href="{{url('/contacts')}}" class="sidenav-link"><i class="sidenav-icon fab fa-rocketchat"></i>
							<div>Mensagens</div>
						</a>
					</li>
					<!-- <li class="sidenav-item">
						<a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon fas fa-dollar-sign d-block"></i>
							<div>Financeiro</div>
						</a>

						<ul class="sidenav-menu">
							<li class="sidenav-item">
								<a href="forms_controls.html" class="sidenav-link">
									<div>Categoria de Conta</div>
								</a>
							</li>
							<li class="sidenav-item">
								<a href="forms_custom-controls.html" class="sidenav-link">
									<div>Meio de Pagamento</div>
								</a>
							</li>
							<li class="sidenav-item">
								<a href="forms_input-groups.html" class="sidenav-link">
									<div>Contas a Pagar</div>
								</a>
							</li>
							<li class="sidenav-item">
								<a href="forms_switchers.html" class="sidenav-link">
									<div>Contas a Receber</div>
								</a>
							</li>   
						</ul>
					</li>
					<li class="sidenav-item">
						<a href="relatorio.html" class="sidenav-link"><i class="sidenav-icon fas fa-chart-pie d-block"></i>
							<div>Relatórios</div>
						</a>
					</li>
					<li class="sidenav-item">
						<a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon fas fa-cog"></i>
							<div>Configurações</div>
						</a>

						<ul class="sidenav-menu">
							<li class="sidenav-item">
								<a href="usuario.html" class="sidenav-link">
									<div>Usuários</div>
								</a>
							</li>
							<li class="sidenav-item">
								<a href="configuracoes-ambiente.html" class="sidenav-link">
									<div>Configurações ambiente</div>
								</a>
							</li>
						</ul>
					</li> -->
				</ul>
			</div>
			<!-- / Layout sidenav -->

			<!-- Layout container -->
			<div class="layout-container">
				<!-- Layout navbar -->
				<nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-white container-p-x" id="layout-navbar">

					<!-- Brand demo (see assets/css/demo/demo.css) -->
					<a href="index.html" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
						<span class="app-brand-logo demo bg-primary">
							<svg viewBox="0 0 148 80" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient id="a" x1="46.49" x2="62.46" y1="53.39" y2="48.2" gradientUnits="userSpaceOnUse"><stop stop-opacity=".25" offset="0"></stop><stop stop-opacity=".1" offset=".3"></stop><stop stop-opacity="0" offset=".9"></stop></linearGradient><linearGradient id="e" x1="76.9" x2="92.64" y1="26.38" y2="31.49" xlink:href="#a"></linearGradient><linearGradient id="d" x1="107.12" x2="122.74" y1="53.41" y2="48.33" xlink:href="#a"></linearGradient></defs><path style="fill: #fff;" transform="translate(-.1)" d="M121.36,0,104.42,45.08,88.71,3.28A5.09,5.09,0,0,0,83.93,0H64.27A5.09,5.09,0,0,0,59.5,3.28L43.79,45.08,26.85,0H.1L29.43,76.74A5.09,5.09,0,0,0,34.19,80H53.39a5.09,5.09,0,0,0,4.77-3.26L74.1,35l16,41.74A5.09,5.09,0,0,0,94.82,80h18.95a5.09,5.09,0,0,0,4.76-3.24L148.1,0Z"></path><path transform="translate(-.1)" d="M52.19,22.73l-8.4,22.35L56.51,78.94a5,5,0,0,0,1.64-2.19l7.34-19.2Z" fill="url(#a)"></path><path transform="translate(-.1)" d="M95.73,22l-7-18.69a5,5,0,0,0-1.64-2.21L74.1,35l8.33,21.79Z" fill="url(#e)"></path><path transform="translate(-.1)" d="M112.73,23l-8.31,22.12,12.66,33.7a5,5,0,0,0,1.45-2l7.3-18.93Z" fill="url(#d)"></path></svg>
						</span>
						<span class="app-brand-text demo font-weight-normal ml-2">ENI Gestão</span>
					</a>

					<!-- Sidenav toggle (see assets/css/demo/demo.css) -->
					<div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
						<a class="nav-item nav-link px-0 mr-lg-4" href="javascript:void(0)">
							<i class="ion ion-md-menu text-large align-middle"></i>
						</a>
					</div>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="navbar-collapse collapse" id="layout-navbar-collapse">
						<!-- Divider -->
						<hr class="d-lg-none w-100 my-2">
						
						<div class="navbar-nav align-items-lg-center ml-auto">
							<!-- Divider -->
							<div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>

							<div class="demo-navbar-user nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
									<span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
										<img src="{{asset('backend/img/avatars/1.png')}}" alt class="d-block ui-w-30 rounded-circle">
										<span class="px-1 mr-lg-2 ml-2 ml-lg-0">{{Auth::user()->name}}</span>
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<!-- <a href="usuario.html" class="dropdown-item"><i class="ion ion-ios-person text-lightest"></i> &nbsp; Meu perfil</a>
									<a href="configuracoes-ambiente.html" class="dropdown-item"><i class="ion ion-md-settings text-lightest"></i> &nbsp; Configurações ambiente</a> -->
									<!-- <div class="dropdown-divider"></div> -->
									<a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                 		document.getElementById('logout-form').submit();"><i class="ion ion-ios-log-out text-danger"></i> &nbsp; Sair
                                 		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        	@csrf
                                    	</form>
                             		</a>
								</div>
							</div>
						</div>
					</div>
				</nav>
				<!-- / Layout navbar -->