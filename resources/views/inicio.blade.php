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


    <title>Planeación Secretaría de Educación San José de Cúcuta</title>

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

    <!--*********************************************************************************************************-->
    <!-- MAIN ***************************************************************************************************-->
    <!--*********************************************************************************************************-->

    <main id="ts-main">

        <!--BREADCRUMB
            =========================================================================================================-->


        <!--PAGE TITLE
            =========================================================================================================-->
        <section id="page-title">
            <div class="container">
                <div class="ts-title">
                    <h1>Datos del aspirante</h1>
                </div>
            </div>
        </section>

        <!--LOGIN / REGISTER SECTION
            =========================================================================================================-->
        <section id="login-register">
            <div class="container">
                <div class="row">

                    <div class="offset-md-2 col-md-8 offset-lg-3 col-lg-6">

                        <!--LOGIN / REGISTER TABS
                            =========================================================================================-->
                        <ul class="nav nav-tabs" id="login-register-tabs" role="tablist">

                            <!--Login tab-->
                      
                            
                            <!--Register tab-->
                            <li class="nav-item">
                                <a class="nav-link active" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">
                                    <h3>Datos del acudiente</h3>
                                </a>
                            </li>

                        </ul>

                        <!--TAB CONTENT
                            =========================================================================================-->
                        <div class="tab-content">


                            <!--REGISTER TAB
                                =====================================================================================-->
                            <div class="tab-pane active" id="register" role="tabpanel" aria-labelledby="register-tab">

                                <!--Register tab-->
                                <form class="ts-form" action="/consultar" method="POST">
                                    @csrf
                                    <!--Name-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="Nombres" name="nombres" placeholder="Nombres" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">                                                 
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="Apellidos" name="apellidos" placeholder="Apellidos" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">   
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electrónico" required>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select  class="form-control" id="comuna" name="comuna"  required>
                                                    <option selected>-- Seleccione una comuna --</option>
                                                    <option value="1">Comuna 1</option>
                                                    <option value="2">Comuna 2</option>
                                                    <option value="3">Comuna 3</option>
                                                    <option value="4">Comuna 4</option>
                                                    <option value="5">Comuna 5</option>
                                                    <option value="6">Comuna 6</option>
                                                    <option value="7">Comuna 7</option>
                                                    <option value="8">Comuna 8</option>
                                                    <option value="9">Comuna 9</option>
                                                    <option value="10">Comuna 10</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">   
                                            <div class="form-group">
                                                <select  class="form-control" id="barrios" name="barrio" required>
                                                    
                                                </select>
                                            </div>
                                        </div>  
                                    </div>


                                    <!--Email-->
                                   

                                    <!--Password-->
                                   

                                    <!--Checkbox-->
                                    <div class="custom-control">
                                        
                                        <a href="#" class="btn-link">Datos del estudiante</a>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="nombresE" name="nombresE" placeholder="Nombres" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">                                                 
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="ApellidosE" name="apellidosE" placeholder="Apellidos" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">   
                                            <div class="form-group">
                                                <select  class="form-control" id="grado" name="grado"  required>
                                                    <option selected>-- Seleccione el grado al que aspira --</option>
                                                    <option value="0">Transicion</option>
                                                    <option value="1">Primero</option>
                                                    <option value="2">Segundo</option>
                                                    <option value="3">Tercero</option>
                                                    <option value="4">Cuarto</option>
                                                    <option value="5">Quinto</option>
                                                    <option value="6">Sexto</option>
                                                    <option value="7">Septimo</option>
                                                    <option value="8">Octavo</option>
                                                    <option value="9">Noveno</option>
                                                    <option value="10">Décimo</option>
                                                    <option value="11">Once</option>

                                                </select>
                                            </div>
                                        </div>  
                                    </div>



                                    <!--Submit button-->
                                    <button type="submit" class="btn btn-primary">Consultar</button>

                                </form>

                            </div>
                            <!--end #register.tab-pane-->
                        </div>
                        <!--end tab-content-->

                    </div>
                    <!--end offset-4.col-md-4-->

                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>

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
<script src="assets/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>
<script>

  
    $('#comuna').on('change', function() {
       
        var id = $('#comuna').val();
        
          $.ajax({
            url: '/barrios/'+id,
            type: 'get',
            dataType: 'json',
            success:function(response){
                console.log(response);
            var len = response.length;
            
            $("#barrios").empty();
            for( var i = 0; i<len; i++){
                var id = response[i]['id'];
                var name = response[i]['nombre'];
                
                $("#barrios").append("<option value='"+id+"'>"+name+"</option>");
                
                }
            }
            });

        });
</script>
</body>
</html>
