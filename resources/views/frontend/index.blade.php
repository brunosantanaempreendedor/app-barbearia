@extends('layouts.site')

@section('content')
<div id='preloader'>
    <div class='loader'>
        <img src="{{asset('frontend/img/loading.gif')}}" width="80" alt="">
    </div>
</div>
<section class="slider_section" id="home">
<ul id="main-slider" class="owl-carousel main_slider">
    <li class="main_slide d-flex align-items-center" style="background-image: url({{asset('frontend/img/slide-1.jpg);')}}">
        <div class="container">
            <div class="slider_content">
               <h3>Não é apenas um corte de cabelo, é uma experiência.</h3>
               <p>Nossa barbearia é o território criado exclusivamente para homens que apreciam<br> qualidade premium, tempo e aparência impecável.</p>
               <a href="{{url('/schedule')}}" class="default_btn">Agende seu horário</a>
           </div>
        </div>
    </li>
   <li class="main_slide d-flex align-items-center" style="background-image: url({{asset('frontend/img/slide-2.jpg);')}}">
        <div class="container">
            <div class="slider_content">
               <h3>A barbearia clássica!</h3>
               <p>Tratamento VIP para nossos clientes.</p>
               <a href="{{url('/schedule')}}" class="default_btn">Agende seu horário</a>
           </div>
        </div>
    </li>
    <li class="main_slide d-flex align-items-center" style="background-image: url({{asset('frontend/img/slide-3.jpg);')}}">
        <div class="container">
            <div class="slider_content">
               <h3>Os melhores produtos para barba, cabelo e bigode.</h3>
               <a href="{{url('/schedule')}}" class="default_btn">Agende seu horário</a>
           </div>
        </div>
    </li>
</ul>
</section>
<section id="about" class="about_section bd-bottom padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about_content align-center">
                    @foreach($about as $abouts)
                    <h3 class="wow fadeInUp" data-wow-delay="100ms">{{$abouts->title}}</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms">Suécia Barbearia e Escola <br>Desde 1998</h2>
                    <img class="wow fadeInUp" data-wow-delay="500ms" src="{{asset('frontend/img/about-logo.png')}}" alt="logo">
                    <p class="wow fadeInUp" data-wow-delay="600ms">{{$abouts->description}}</p>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <div class="about_img">
                    <img src="{{asset('frontend/img/about-1.jpg')}}" alt="idea-images" class="about_img_1 wow fadeInLeft" data-wow-delay="200ms">
                    <img src="{{asset('frontend/img/about-2.jpg')}}" alt="idea-images" class="about_img_2 wow fadeInRight" data-wow-delay="400ms">
                    <img src="{{asset('frontend/img/about-3.jpg')}}" alt="idea-images" class="about_img_3 wow fadeInLeft" data-wow-delay="600ms">
                </div>
            </div>
        </div>
    </div>
</section> 
<section id="service" class="service_section bg-grey padding">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
            <h2>Serviços</h2>
            <div class="heading-line"></div>
        </div>
        <div class="row">
            @foreach($price as $prices)
            <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                <div class="service_box">
                    <i class="bs bs-scissors-1"></i>
                    <h3>{{$prices->name}}</h3>
                    <h2>{{$prices->duration}}Min. </h2>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section id="price" class="pricing_section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
            <h2>Tabela de Preços</h2>
            <div class="heading-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-6 sm-padding">
                <div class="price_wrap">
                    <h3>Serviços</h3>
                    <ul class="price_list">
                        @foreach($price as $prices)
                        <li>
                            <h4>{{$prices->name}}</h4>
                            <span class="price">R$ {{$prices->price}}</span>
                        </li>
                         @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection        