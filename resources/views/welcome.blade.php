<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">

    <!--CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/jquery.scrollbar.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/css/datatable/responsive.bootstrap5.min.css">

    <title>Planeación Secretaría de Educación San José de Cúcuta</title>
    <style>
        table.dataTable.table-responsive:not(.datatables-ajax) {
            display: block;
        }

        .card .table {
            margin-bottom: 0;
            border-bottom-left-radius: 0.357rem;
            border-bottom-right-radius: 0.357rem;
        }
        table.dataTable {
            width: 100% !important;
            border-collapse: collapse !important;
        }
        table.dataTable {
            clear: both;
            margin-top: 6px !important;
            margin-bottom: 6px !important;
            max-width: none !important;
            border-collapse: separate !important;
            border-spacing: 0;
        }
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        .table {
            --bs-table-bg: transparent;
            --bs-table-accent-bg: transparent;
            --bs-table-striped-color: #6e6b7b;
            --bs-table-striped-bg: #fafafc;
            --bs-table-active-color: #6e6b7b;
            --bs-table-active-bg: rgba(34, 41, 47, 0.1);
            --bs-table-hover-color: #6e6b7b;
            --bs-table-hover-bg: #f6f6f9;
            width: 100%;
            margin-bottom: 1rem;
            color: #000000;
            font-weight: 500;
            vertical-align: middle;
            border-color: #ebe9f1;
        }
        table {
            caption-side: bottom;
            border-collapse: collapse;
        }
        *, *::before, *::after {
            box-sizing: border-box;
        }
        
        table {
            display: table;
            border-collapse: separate;
            box-sizing: border-box;
            text-indent: initial;
            border-spacing: 2px;
            border-color: grey;
        }
        .table > thead {
            vertical-align: bottom;
        }
        thead, tbody, tfoot, tr, td, th {
            border-color: inherit;
            border-style: solid;
            border-width: 0;
        }
        *, *::before, *::after {
            box-sizing: border-box;
        }
        thead {
            display: table-header-group;
            vertical-align: middle;
            border-color: inherit;
        }
        tr:hover {
            background-color: #afa9a9;
        }
    </style>
</head>

<body>

<!-- WRAPPER
=====================================================================================================================-->
<div class="ts-page-wrapper ts-homepage" id="page-top">

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
                    <img src="assets/img/BANNER08312020-1.jpg" alt="">
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
    <main id="ts-main">

    

        <!--LATEST LISTINGS
        =============================================================================================================-->
        <section id="latest-listings" class="ts-block">
            <div class="container">

                <!--Title-->
                <div class="ts-title">
                    <h2>Búsqueda personalizada</h2>
                </div>
                <div class="ts-form ts-box mb-0">
                    <div class="form-row">
                        <div class="mb-1 col-md-3">
                            <label class="form-label" for="institucion">Nombre del establecimiento</label>
                            <input type="text" class="form-control" id="nombreestablecimiento" name="nombreestablecimiento" value="">
                          </div>
                          
                          <div class="mb-1 col-md-3">
                            <label class="form-label" for="institucion">Nombre de la Sede</label>
                            <input type="text" class="form-control" id="nombresede" name="nombresede" value="">
                          </div>
                    
                          <div class="mb-1 col-md-3">
                            <label class="form-label" for="tipo">Zona</label>
                            <select class="custom-select mb-3" id="zona" name="zona" required>
                              <option value="">- Seleccione -</option>
                              <option value="RURAL">RURAL</option>
                              <option value="URBANA">URBANA</option>
            
                            </select>
                          </div>
                   
                          <div class="mb-1 col-md-3">
                            <label class="form-label" for="tipo">Grado académico</label>
                            <select class="custom-select mb-3" id="grado" name="grado" required>
                              <option value="">- Seleccione -</option>
                              <option value="0">TRANSICIÓN</option>
                              <option value="1">PRIMERO</option>
                              <option value="2">SEGUNDO</option> 
                              <option value="3">TERCERO</option> 
                              <option value="4">CUARTO</option> 
                              <option value="5">QUINTO</option> 
                              <option value="6">SEXTO</option> 
                              <option value="7">SEPTIMO</option> 
                              <option value="8">OCTAVO</option> 
                              <option value="9">NOVENO</option> 
                              <option value="10">DÉCIMO</option> 
                              <option value="11">UNDÉCIMO</option> 

                            </select>
                          </div>
                    
                        <!--Keyword-->
                    

                    </div>


                    <div class="ts-center__vertical justify-content-between">
                        <!--More Options Button-->
                        <a href="#more-options-collapse" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="more-options-collapse">
                            
                        </a>

                        <!--Submit button-->
                        <div class="form-group mb-0">
                            <button  class="btn btn-primary w-100" id="filtrar">Buscar</button>
                        </div>

                    </div>

                    <!--Hidden Form-->
                    
                    <!--end more-options-collapse-->
                </div>
                <!--Row-->
                <div class="row" id="dataS">

                    <div class="card-datatable">
                        <table class="table table-responsive" id="example">
                        <thead>
                            <th></th>
                            <th>
                                Sede
                            </th>
                            <th>Dirección</th>
                            <th>Total cupos disponibles</th>
                            <th>Ver</th>
                        </thead>
                        <tbody >

                        </tbody>
                    </table>
                    </div>

                </div>

                <!--end row-->
            </div>
            <!--end container-->
        </section>
        
        <section id="ts-hero" class=" mb-0">

            <!--Fullscreen mode-->
            <div class="ts-full-screen d-flex">
    
                <!-- MAP
                =========================================================================================================-->
                <div class="ts-map w-100">
                    <div id="ts-map-hero" class="h-100"
                         data-ts-map-controls="1"
                         data-ts-map-zoom="13"
                         data-ts-map-center-latitude="7.908843"
                         data-ts-map-center-longitude="-72.5456202"
                         data-ts-map-zoom-position="google.maps.ControlPosition.LEFT_TOP"
                         data-ts-google-map-style='[{"featureType":"administrative",
                                                    "elementType":"labels.text.fill",
                                                    "stylers":[{"color":"#444444"}]},
                                                    {"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},
                                                    {"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},
                                                    {"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},
                                                    {"color":"#e9e9e9"}]},
                                                    {"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#deebd8"},
                                                    {"visibility":"on"}]},
                                                    {"featureType":"road","elementType":"all","stylers":[{"saturation":-100},
                                                    {"lightness":45}]},
                                                    {"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},
                                                    {"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},
                                                    {"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},
                                                    {"featureType":"water","elementType":"all","stylers":[{"color":"#c4e5f3"},
                                                    {"visibility":"on"}]}]'
                         data-ts-locale="es-CO"
                         data-ts-currency="USD"
                         data-ts-unit="m<sup>2</sup>"
                         data-ts-display-additional-info="cupos_Cupos"
                    >
                    </div>
                </div>
    
                <!-- RESULTS
                =========================================================================================================-->
                <div class="ts-results__vertical ts-results__grid ts-shadow__sm w-100 h-100 scrollbar-inner bg-white">
    
                    <!-- FORM
                    =====================================================================================================-->
              
                    <!--end ts-form__grid-->
    
                    <!-- TITLE and CONTROLS
                    =====================================================================================================-->
    
                    <section class="ts-center__vertical justify-content-between px-4 pt-3 pb-0">
                        <h4 class="font-weight-normal ts-text-color-light mb-0" id="total"></h4>
    
    
                    </section>
    
                    <!-- RESULTS
                    =====================================================================================================-->
                    <section id="ts-results" class="h-100">
                        <div class="ts-results-wrapper"></div>
                    </section>
    
                </div>
                <!--end ts-results-vertical-->
    
            </div>
            <!--end full-screen-->
    
        </section>
        <section id="partners" class="ts-block pt-4 pb-0">
            <div class="container">
    
                <!--Logos-->
                <div class="d-block d-md-flex justify-content-between align-items-center text-center ts-partners py-3">
    
                    <a href="#">
                        <img src="assets/img/alcaldia.jpg" alt="">
                    </a>
    
                    <a href="#">
                        <img src="assets/img/alcaldia.jpg" alt="">
                    </a>
    
                    <a href="#">
                        <img src="assets/img/alcaldia.jpg" alt="">
                    </a>
    
                    <a href="#">
                        <img src="assets/img/alcaldia.jpg" alt="">
                    </a>
    
                    <a href="#">
                        <img src="assets/img/alcaldia.jpg" alt="">
                    </a>
    
                </div>
                <!--end logos-->
            </div>
        </section>
    </main>
    <!-- HERO MAP
    =================================================================================================================-->
   
    <!--end ts-hero-->
  
    <!--*********************************************************************************************************-->
    <!-- MAIN ***************************************************************************************************-->
    <!--*********************************************************************************************************-->

    

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
                            <img src="assets/img/planeacion.png" alt="">
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
                <div class="ts-footer-nav">
                    <nav class="nav">
                        <a href="#" class="nav-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </nav>
                </div>
                <!--end ts-footer-nav-->

            </div>
            <!--end container-->
        </section>
        <!--end ts-footer-secondary-->

    </footer>
    <!--end #ts-footer-->

</div>
<!--end page-->

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/datatable/jquery.dataTables.min.js"></script>
<script src="assets/js/datatable/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/datatable/dataTables.responsive.min.js"></script>
<script src="assets/js/datatable/responsive.bootstrap5.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyD03FlkWF3CwUkJOU9a1bcOQgalbW1FbCo"></script>
<script src="assets/js/richmarker-compiled.js"></script>
<script src="assets/js/markerclusterer_packed.js"></script>
<script src="assets/js/infobox.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/dragscroll.js"></script>
<script src="assets/js/jquery.scrollbar.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/map-google.js"></script>

<script src="assets/js/tables/table-datatables-advanced.js"></script>
<script>
      
    $('body').on('click', '#filtrar', function () {
    var nombreestablecimiento = $('#nombreestablecimiento').val();   
    var nombresede = $('#nombresede').val();
    var niveles = $('#niveles').val();
    var tipo = $('#tipo').val();
    var zona = $('#zona').val();
    var grado = $('#grado').val();
    if(typeof nombreestablecimiento == 'undefined'){
      nombreestablecimiento = '';
    }
    if(typeof nombresede == 'undefined'){
      nombresede = '';
    }
    if(typeof niveles == 'undefined'){
      niveles = '';
    }
    if(typeof tipo == 'undefined'){
      tipo = '';
    }
    if(typeof zona == 'undefined'){
      zona = '';
    }
    if(typeof grado == 'undefined'){
        grado = '';
    }
      $.ajax({
        type: "GET",
        url: "/institucionesData",
        data: { 
            "nombreestablecimiento": nombreestablecimiento, 
            "nombresede": nombresede,
            "niveles": niveles,
            "tipo": tipo,
            "zona": zona,
            "grado": grado,
        },
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            
            $("#example > tbody").empty();//limpia solo los registros del body
            $.each(data, function (i, item) {
              var rows ="<tr>" +
                          "<td id='id'>" + item.id + "</td>" +
                          "<td id='sede'>" + item.NomSede + "</td>" +
                          "<td id='Direccion'>" + item.Direccion + "</td>" +
                          "<td id='grados'>"+ item.totalcupos+"</td>" +
                          "<td id='apellido2'><a href='detalle/"+item.id+"'>Ver</a></td>" +
                          "</tr>";
                $('#example tbody').append(rows);
            });
            console.log(data);
        },

        failure: function (data) {
            alert(data.responseText);
        },
        error: function (data) {
            alert(data.responseText);
        }

    });
  });
</script>
</body>
</html>
