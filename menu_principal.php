
<?php
	include("sesion.php");

?>
<!DOCTYPE html>

<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Actas unicor </title>
    <link href="css1/media_query.css" rel="stylesheet" type="text/css"/>
    <link href="css1/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css1/animate.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="css1/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="css1/owl.theme.default.css" rel="stylesheet" type="text/css"/>
    <link href="css1/style_1.css" rel="stylesheet" type="text/css"/>
    <script src="js1/modernizr-3.5.0.min.js"></script>
</head>
<body>

<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
        <img src="IMG/logUNICORDOBA.png"  width="450" height="100"> 
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Menú Principal<span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                            <?php if ($_SESSION["tipo"] == "Administrador" or $_SESSION["tipo"] == "Funcionario"){?>
                                <a class="dropdown-item" href="ver_usuario.php">Usuarios</a> 
                                <a class="dropdown-item" href="ver_acta.php">Crear acta</a>  
                                <a class="dropdown-item" href="form_consulta_registro.php">Consulta de registro</a>
                            <?php }else{ ?> 
                                <a class="dropdown-item" href="ver_usuario.php">Usuario</a> 
                                <a class="dropdown-item" href="form_consulta_registro.php">Registros de actas</a>                           
                            <?php } ?>                        
                        </div>
                    </li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="cerrar.php" >Salir</a>                        						
					</li>	
                </ul>
            </div>
        </nav>
    </div>
</div>
<center><img src="IMG/universidad2.jpg"  width="1200" height="600"></center>



<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row" align='center'>
            <div class="col-12 col-md-12 py-4 Reserved">Diseñado por:  Esteban Santamaria V. <br>daniel atencia y luis garcia</div>       
        </div>
    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>