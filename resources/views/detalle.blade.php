<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">

    <!--CSS -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/css/leaflet.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <title>Planeación - {{$data->NomSede}}</title>

</head>

<body>

<!-- WRAPPER
    =================================================================================================================-->
<div class="ts-page-wrapper ts-has-bokeh-bg" id="page-top">

    <!--*********************************************************************************************************-->
    <!--HEADER **************************************************************************************************-->
    <!--*********************************************************************************************************-->
    <header id="ts-header" class="fixed-top">

        <!-- SECONDARY NAVIGATION
        =============================================================================================================-->
        <nav id="ts-secondary-navigation" class="navbar p-0">
            <div class="container justify-content-end justify-content-sm-between">

                <!--Left Side-->
                <div class="navbar-nav d-none d-sm-block">
                    <!--Phone-->
                    <span class="mr-4">
                            <i class="fa fa-phone-square mr-1"></i>
                            +1 123 456 789
                        </span>
                    <!--Email-->
                    <a href="#">
                        <i class="fa fa-envelope mr-1"></i>
                        hello@example.com
                    </a>
                </div>

                <!--Right Side-->
                <div class="navbar-nav flex-row">

                    <!--Search Input-->
               

                    

                </div>
                <!--end navbar-nav-->
            </div>
            <!--end container-->
        </nav>

        <!--PRIMARY NAVIGATION
        =============================================================================================================-->
        <nav id="ts-primary-navigation" class="navbar navbar-expand-md navbar-light">
            <div class="container">

                <!--Brand Logo-->
                <a class="navbar-brand" href="/">
                    <img src="/assets/img/BANNER08312020-1.jpg" alt="">
                </a>

                <!--Responsive Collapse Button-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPrimary" aria-controls="navbarPrimary" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--Collapsing Navigation-->
                <div class="collapse navbar-collapse" id="navbarPrimary">

                </div>
                <!--end navbar-collapse-->
            </div>
            <!--end container-->
        </nav>
        <!--end #ts-primary-navigation.navbar-->

    </header>
    <!--end Header-->

    <!--*********************************************************************************************************-->
    <!-- MAIN ***************************************************************************************************-->
    <!--*********************************************************************************************************-->

    <main id="ts-main">

        <!--BREADCRUMB
            =========================================================================================================-->
        <section id="breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
        </section>

        <!--PAGE TITLE
            =========================================================================================================-->
        <section id="page-title">
            <div class="container">

                <div class="d-block d-sm-flex justify-content-between">

                    <!--Title-->
                    <div class="ts-title mb-0">
                        <h1>{{$data->NomEstable}} <br> {{$data->NomSede}}</h1>
                        <h5 class="ts-opacity__90">
                            <i class="fa fa-map-marker text-primary"></i>
                            {{$data->Direccion}}
                        </h5>
                    </div>
                    @php
                    $cuposs = 0;
                        foreach ($cupos as $cupo)
                        {
                            $cuposs += $cupo->cupos;
                        }
                    @endphp
                    <!--Price-->
                    <h3>
                        <span class="badge badge-primary p-3 font-weight-normal ts-shadow__sm">Total de cupos: {{$cuposs}}</span>
                    </h3>

                </div>

            </div>
        </section>

        <!--CONTENT
            =========================================================================================================-->
        <section id="content">
            <div class="container">
                <div class="row flex-wrap-reverse">

                    <!--LEFT SIDE
                        =============================================================================================-->
                    <div class="col-md-5 col-lg-4">

                        <!--DETAILS
                            =========================================================================================-->
                        <section>
                            <h3>Niveles educativos</h3>
                            <div class="ts-box">

                                <dl class="ts-description-list__line mb-0">
                                    @php
                                         $datos = explode(',', $data->Niveles);
                                    @endphp

                                    @foreach($datos as $datos1)
                                    <dd>{{$datos1}}</dd>
                                    @endforeach

                                </dl>

                            </div>
                        </section>

                        <!--LOCATION
                            =========================================================================================-->
                        <section id="location">
                            <h3>Ubicación</h3>

                            <div class="ts-box p-0">

                                <div class="ts-map ts-map__detail" id="ts-map-simple"
                                     data-ts-map-leaflet-provider="https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}{r}.png"
                                     data-ts-map-zoom="12"
                                     data-ts-map-center-latitude="{{$data->X}}"
                                     data-ts-map-center-longitude="{{$data->Y}}"
                                     data-ts-map-scroll-wheel="1"
                                     data-ts-map-controls="0"></div>

                                <dl class="ts-description-list__line mb-0 p-4">

                                    <dt><i class="fa fa-map-marker ts-opacity__30 mr-2"></i>Dirección:</dt>
                                    <dd class="border-bottom pb-2">{{$data->Direccion}}</dd>
                                 
                               
                                    <dt><i class="fa fa-map-marker ts-opacity__30 mr-2"></i>Zona:</dt>
                                    <dd class="border-bottom pb-2">{{$data->Zona}}</dd>

                                </dl>

                            </div>

                        </section>

                        <!--ACTIONS
                        =============================================================================================-->
                        
                    </div>
                    <!--end col-md-4-->

                    <!--RIGHT SIDE
                        =============================================================================================-->
                    <div class="col-md-7 col-lg-8">

                        <!--GALLERY CAROUSEL
                        =============================================================================================-->
                        <section id="gallery-carousel position-relative">

                            <h3>Galería</h3>

                            <div class="owl-carousel ts-gallery-carousel" data-owl-auto-height="1" data-owl-dots="1" data-owl-loop="1">

                                <!--Slide-->
                                <div class="slide">
                                    <div class="ts-image" data-bg-image="https://planeacion.novatics.co/storage/{{$data->imagen}}">
                                        <a href="https://planeacion.novatics.co/storage/{{$data->imagen}}" class="ts-zoom popup-image"><i class="fa fa-search-plus"></i>Zoom</a>
                                    </div>
                                </div>


                            </div>

                        </section>

                        <!--QUICK INFO
                            =========================================================================================-->
                        <section id="quick-info">
                            <h3>Cupos disponibles</h3>

                            <!--Quick Info-->
                            <div class="ts-quick-info ts-box">

                                <!--Row-->
                                <div class="row no-gutters">
                                    @foreach($cupos as $cupo)
                                    <!--Bathrooms-->
                                    <div class="col-sm-3">
                                        <div class="ts-quick-info__item">
                                            <h6>{{$cupo->jornada}} - {{$cupo->grado}}</h6>
                                            <figure>{{$cupo->cupos}}</figure>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                                <!--end row-->

                            </div>
                            <!--end ts-quick-info-->

                        </section>

                        <!--DESCRIPTION
                            =========================================================================================-->
                        <section id="description">

                            

                        </section>

                        <!--FEATURES
                            =========================================================================================-->
                        <section id="features">

                            <h3>Modelos educativos</h3>

                            <ul class="list-unstyled ts-list-icons ts-column-count-4 ts-column-count-sm-2 ts-column-count-md-2">
                                
                                @php
                                         $datos2 = explode(',', $data->Modelos);
                                    @endphp

                                    @foreach($datos2 as $datos3)
                                    <li>
                                        <i class="fa fa-bell"></i>
                                        {{$datos3}}
                                    </li>
    
                                    @endforeach
                                
                            </ul>

                        </section>

           
                       
                        <!--CONTACT THE AGENT
                        =============================================================================================-->
                   {{--      <section class="contact-the-agent">
                            <h3>Contactar a la institución</h3>

                            <div class="ts-box">
                                <div class="row">

                                    <!--Agent contact form-->
                                    <div class="col-md-12">
                                        <h4>Escríbenos</h4>
                                        <form id="form-agent" class="ts-form">

                                            <!--Name-->
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                                            </div>

                                            <!--Email-->
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico">
                                            </div>

                                            <!--Message-->
                                            <div class="form-group">
                                                <textarea class="form-control" id="form-contact-message" rows="3" name="message" placeholder="Porfavor escriba su mensaje acá"></textarea>
                                            </div>

                                            <!--Submit button-->
                                            <div class="form-group clearfix mb-0">
                                                <button type="submit" class="btn btn-primary float-right" id="form-contact-submit">Enviar mensaje
                                                </button>
                                            </div>

                                        </form>
                                    </div>

                                </div>
                                <!--end row-->
                            </div>
                            <!--end ts-box-->
                        </section> --}}

                    </div>
                    <!--end col-md-8-->

                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>

        <!--SIMILAR PROPERTIES
        =============================================================================================================-->
      

    </main>
    <!--end #ts-main-->

    <!--*********************************************************************************************************-->
    <!--************ FOOTER *************************************************************************************-->
    <!--*********************************************************************************************************-->

    <footer id="ts-footer">

        <!--MAIN FOOTER CONTENT
        =============================================================================================================-->
        <section id="ts-footer-main">
            <div class="container">
                <div class="row">

                    <!--Brand and description-->
                    <div class="col-md-6">
                        <a href="#" class="brand">
                            <img src="/assets/img/planeacion.png" alt="">
                        </a>
                        
                        
                    </div>

                    <!--Navigation-->
                    <div class="col-md-2">
                        
                    </div>

                    <!--Contact Info-->
                    <div class="col-md-4">
                        <h4>SUBSECRETARÍA DE PLANEACIÓN
                        </h4>
                        <address class="ts-text-color-light">
                           <b> Despacho del Subsecretario:<b>
                            <br>
                            – Equipo Técnico de Planeación
                            <br>
                            – Líder de Cobertura
                            <br>
                            – Equipo Técnico de Cobertura
                            <br>
                            – Población Vulnerable
                        </address>
                    </div>

                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end ts-footer-main-->

        <!--SECONDARY FOOTER CONTENT
        =============================================================================================================-->
        <section id="ts-footer-secondary">
            <div class="container">

                <!--Copyright-->
                <div class="ts-copyright">(C) Alcaldía de San José de Cúcuta</div>

                <!--Social Icons-->
                
                <!--end ts-footer-nav-->

            </div>
            <!--end container-->
        </section>
        <!--end ts-footer-secondary-->

    </footer>
    <!--end #ts-footer-->

</div>
<!--end page-->

<script src="/assets/js/jquery-3.3.1.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/leaflet.js"></script>
<script src="/assets/js/custom.js"></script>
<script src="/assets/js/map-leaflet.js"></script>

</body>
</html>
