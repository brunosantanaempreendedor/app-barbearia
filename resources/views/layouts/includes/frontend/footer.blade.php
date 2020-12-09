<footer class="footer_section">
    <section id="contact" class="widget_section padding">
        @foreach($footer as $footers)
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer_widget">
                            <img class="mb-15" src="{{asset('frontend/img/logo.png')}}" alt="Brand">
                            <p>{{$footers->description}}</p>
                            <ul class="widget_social">
                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                <li><a href="#"><i class="social_googleplus"></i></a></li>
                                <li><a href="#"><i class="social_instagram"></i></a></li>
                                <li><a href="#"><i class="social_linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer_widget">
                            <h3>Endereço</h3>
                            <p>{{$footers->address}}</p>
                            <p><a href="http://html.dynamiclayers.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2b634e4747446b4f52454a464248474a524e595805454e5f">{{$footers->email}}</a> <br>{{$footers->phone}}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer_widget">
                            <h3>Horário de Funcionamento</h3>
                            <ul class="opening_time">
                                <li>{{$footers->label1}} {{$footers->label2}}</li>
                                <li>{{$footers->label3}} {{$footers->label4}}</li>
                                <li>{{$footers->label5}} {{$footers->label6}}</li>
                                <li>{{$footers->label7}} {{$footers->label8}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 sm-padding">
                        <div class="footer_widget">
                            <h3>Deixe seu comentário!</h3>
                            <div class="subscribe_form">
                                <form autocomplete="off" novalidate action="{{route('contacts.store')}}" method="post" class="subscribe_form">
                                    <input type="name" name="name" id="name" class="form_input" placeholder="Digite seu nome...">
                                    <input type="email" name="email" id="email" class="form_input" placeholder="Digite seu e-mail...">
                                    <input type="text" name="content" id="content" class="form_input" placeholder="Deixe seu comentário...">
                                    <button type="submit" class="submit">Enviar</button>
                                    <div class="clearfix"></div>
                                    <div id="subscribe-result">
                                        <p class="subscription-success"></p>
                                        <p class="subscription-error"></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    <div class="container">
      <div class="row">
         <div class="col-md-6 xs-padding">
            <div class="copyright">&copy; <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript"> document.write(new Date().getFullYear())</script> Suécia Barbearia e Escola Powered by DellmenER</div>
        </div>
        <div class="col-md-6 xs-padding">
            <ul class="footer_social">
               <li><a href="{{url('/login')}}">Acesso ao Painel</a></li>
           </ul>
       </div>
   </div>
</div>
</footer>
<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

<script src="{{asset('frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>

<script src="{{asset('frontend/js/vendor/bootstrap.min.js')}}"></script>

<script src="{{asset('frontend/js/vendor/imagesloaded.pkgd.min.js')}}"></script>

<script src="{{asset('frontend/js/vendor/owl.carousel.min.js')}}"></script>

<script src="{{asset('frontend/js/vendor/jquery.isotope.v3.0.2.js')}}"></script>

<script src="{{asset('frontend/js/vendor/smooth-scroll.min.js')}}"></script>

<script src="{{asset('frontend/js/vendor/venobox.min.js')}}"></script>

<script src="{{asset('frontend/js/vendor/jquery.ajaxchimp.min.js')}}"></script>

<script src="{{asset('frontend/js/vendor/jquery.slicknav.min.js')}}"></script>

<script src="{{asset('frontend/js/vendor/jquery.nice-select.min.js')}}"></script>

<script src="{{asset('frontend/js/vendor/jquery.mb.YTPlayer.min.js')}}"></script>

<script src="{{asset('frontend/js/vendor/wow.min.js')}}"></script>

<script src="{{asset('frontend/js/contact.js')}}"></script>

<script src="{{asset('frontend/js/appointment.js')}}"></script>

<script src="{{asset('frontend/js/main.js')}}"></script>
</body>

<!-- Mirrored from html.dynamiclayers.net/dl/barbershop/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Oct 2020 19:08:43 GMT -->
</html>