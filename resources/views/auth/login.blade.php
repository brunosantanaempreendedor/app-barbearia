@extends('layouts.auth')

@section('content')

<!-- Content -->

<div class="authentication-wrapper authentication-3">
  <div class="authentication-inner">

    <!-- Side container -->
    <!-- Do not display the container on extra small, small and medium screens -->
    <div class="d-none d-lg-flex col-lg-8 align-items-center ui-bg-cover ui-bg-overlay-container p-5" style="background-image: url('backend/img/bg/21.jpg');">
      <div class="ui-bg-overlay bg-dark opacity-50"></div>

      <!-- Text -->
      <div class="w-100 text-white px-5">
        <h1 class="display-2 font-weight-bolder mb-4">Agregando valor a<br>sua BARBEARIA</h1>
        <div class="text-large font-weight-light">
          Mantenha todo controle gerencial da sua barberia e voe para o sucesso.
        </div>
      </div>
      <!-- /.Text -->
    </div>
    <!-- / Side container -->

    <!-- Form container -->
    <div class="theme-bg-white d-flex col-lg-4 align-items-center p-5">
      <!-- Inner container -->
      <!-- Have to add `.d-flex` to control width via `.col-*` classes -->
      <div class="d-flex col-sm-7 col-md-5 col-lg-12 px-0 px-xl-4 mx-auto">
        <div class="w-100">

          <!-- Logo -->
          <div class="d-flex justify-content-center align-items-center">
            <div class="ui-w-60">
              <div class="w-100 position-relative" style="padding-bottom: 54%">
                <svg class="w-100 h-100 position-absolute" viewBox="0 0 148 80" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient id="a" x1="46.49" x2="62.46" y1="53.39" y2="48.2" gradientUnits="userSpaceOnUse"><stop stop-opacity=".25" offset="0"></stop><stop stop-opacity=".1" offset=".3"></stop><stop stop-opacity="0" offset=".9"></stop></linearGradient><linearGradient id="e" x1="76.9" x2="92.64" y1="26.38" y2="31.49" xlink:href="#a"></linearGradient><linearGradient id="d" x1="107.12" x2="122.74" y1="53.41" y2="48.33" xlink:href="#a"></linearGradient></defs><path class="fill-primary" transform="translate(-.1)" d="M121.36,0,104.42,45.08,88.71,3.28A5.09,5.09,0,0,0,83.93,0H64.27A5.09,5.09,0,0,0,59.5,3.28L43.79,45.08,26.85,0H.1L29.43,76.74A5.09,5.09,0,0,0,34.19,80H53.39a5.09,5.09,0,0,0,4.77-3.26L74.1,35l16,41.74A5.09,5.09,0,0,0,94.82,80h18.95a5.09,5.09,0,0,0,4.76-3.24L148.1,0Z"></path><path transform="translate(-.1)" d="M52.19,22.73l-8.4,22.35L56.51,78.94a5,5,0,0,0,1.64-2.19l7.34-19.2Z" fill="url(#a)"></path><path transform="translate(-.1)" d="M95.73,22l-7-18.69a5,5,0,0,0-1.64-2.21L74.1,35l8.33,21.79Z" fill="url(#e)"></path><path transform="translate(-.1)" d="M112.73,23l-8.31,22.12,12.66,33.7a5,5,0,0,0,1.45-2l7.3-18.93Z" fill="url(#d)"></path></svg>
              </div>
            </div>
          </div>
          <!-- / Logo -->

          <h4 class="text-center text-lighter font-weight-normal mt-5 mb-0">Acesse sua conta</h4>

          <!-- Form -->
          <form class="my-5" method="POST" action="{{route('login')}}">
            @csrf
            <div class="form-group">
              <label class="form-label">E-mail:</label>
              <input name="email" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label class="form-label">Senha:</label>
              <input name="password" type="password" class="form-control">
            </div>
            <div class="d-flex justify-content-between align-items-center m-0">
              <button type="submit" value="OK!" class="btn btn-primary">Conectar</button>
            </div>
          </form>
          <!-- / Form -->
        </div>
      </div>
    </div>
    <!-- / Form container -->

  </div>
</div>

<!-- / Content -->

<!-- Core scripts -->
<script src="{{asset('backend/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('backend/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('backend/vendor/js/sidenav.js')}}"></script>

<!-- Libs -->
<script src="{{asset('backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

<!-- Demo -->
<script src="{{asset('backend/js/demo.js')}}"></script>

</body>

</html>




@endsection
