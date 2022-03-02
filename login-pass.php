<?php

	require('conexion.php');        
               
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Actas Unicor</title>
  <link rel="icon" type="image/png" href="escudo.ico" />
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css2/sb-admin.css" rel="stylesheet">
  <link href="css2/dvinci.css" rel="stylesheet">
</head>
<script type="text/javascript">
        function test() {
                var p=document.getElementById("pass");
                var c=document.getElementById("chec");
                p.type=(c.checked) ? "text" : "password";
        }
</script>

<body class="bg-dark">
	
<div class="row">
		<div class="col-md-0 col-lg-8 ">
		<img src="IMG/universidad.jpg" width="920" height="625"> 
		</div>
		<div class="col-md-12  col-lg-4 text-center conte-login">
			<div class="container">
				<br/>
				<h1> Bienvenida a <br/> Actas Unicor</h1>
				<br/><br/>
				
				<br/><br/>			
				<form class="form-horizontal" role="form" method="post" action="validar_clave.php">
                                
				    <div class="form-group">					
						<input class="form-control" name="clave" id="pass" type="password" placeholder="Ingrese su contraseña" required>
						<label for="chec">Ver la contraseña</label>
						<input type="checkbox" id="chec" name="chec" onclick="test()">
					</div>
					<div class="col-lg-10">
						<a href="login-user.php" class="btn btn-success btn-sm" role="button">Atras</a>
					 	<button type="submit" class="btn btn-success btn-sm">Ingresar</button> 
                    </div>
				</form>	
                <br/><br/>
                                
				<div class="navbar navbar-default navbar-fixed-bottom ">
				<div class="col-12 col-md-12 py-4 Reserved">Diseñado por:  Esteban Santamaria V. <br>daniel atencia y luis garcia</div>          
				</div>
				<style type="text/css">
					p
					{
					 text-align: center;
					}
				</style>

			</div>
		</div>
	</div>
	
	
  
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
