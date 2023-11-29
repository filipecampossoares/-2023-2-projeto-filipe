<?php
include("conexao.php");
include("classes.php");
session_start();
if($_SESSION['log']!="ativo"){
session_destroy();
header("Location:login_inicio.php");
}
$id=$_POST['codigo'];
$agenda=buscaChamadoAlterar($conexao,$id);
 ?>
<!doctype html>
<html lang="en-US">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Projeto chamados</title>
		<meta name="description" content="Unika - Responsive One Page HTML5 Template">
		<meta name="keywords" content="HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio" />
		<meta name="author" content="imransdesign.com">
    <link rel="icon" type="image/png" href="img/logouninove.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Google Fonts  -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="inc/animations/css/animate.min.css">
		<link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.theme.css">

		<!-- Theme CSS -->
        <link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/mobile.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skin/cool-gray.css">
        <!-- <link rel="stylesheet" href="css/skin/ice-blue.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/summer-orange.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/fresh-lime.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/night-purple.css"> -->

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

    <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>  <!-- Display loading image while page loads -->
    	<div class="body">

            <!--========== BEGIN HEADER ==========-->
            <header id="header" class="header-main">


                <!-- Begin Navbar -->
								<nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation"> <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->
                  <div class="container">


                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                          <li><a class="page-scroll" href="index.php">Home</a></li>
                          <li><a class="page-scroll" href="chamados.php">Chamados</a></li>
                          <li><a class="page-scroll" href="sair.php">Sair</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->
            </header>
            <!-- ========= END HEADER =========-->

        	<!-- PAINEL PRINCIPAL COMEÇO -->
			<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/fundo_principal.jpg);">

				<div class="container">
					<div class="caption text-center text-white" data-stellar-ratio="0.7">

						<div id="owl-intro-text" class="owl-carousel">
							<div class="item">
								<h1>ALTERAR CHAMADO</h1>
								<p><img src="img/logo_uninove.png" height="200px" width="200px"></p>
							</div>
						</div>
					</div>
				</div>

			</section>
			<!-- PAINEL PRINCIPAL FIM -->
			<br>
			<br>
			<br>
			<!-- Form começo -->
      <form name='flogin' method="post" action="altera_ticket.php" >
        <input type="hidden"  name="id" value="<?=$agenda['id']?>">
				<center><p>Retorno<br><textarea name="retorno" rows="5" cols="40"></textarea></p></center>
				<br>
				<br>
			 <center><p><input type="submit"  name="Logar" value="Retornar chamado"></center>
				 <br>
				 <br>
				 <br>
				 <br>
			</form>
			<!-- Form fim -->

        <!-- Plugins JS -->
		<script src="inc/jquery/jquery-1.11.1.min.js"></script>
		<script src="inc/bootstrap/js/bootstrap.min.js"></script>
		<script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
		<script src="inc/stellar/js/jquery.stellar.min.js"></script>
		<script src="inc/animations/js/wow.min.js"></script>
        <script src="inc/waypoints.min.js"></script>
		<script src="inc/isotope.pkgd.min.js"></script>
		<script src="inc/classie.js"></script>
		<script src="inc/jquery.easing.min.js"></script>
		<script src="inc/jquery.counterup.min.js"></script>
		<script src="inc/smoothscroll.js"></script>

		<!-- Theme JS -->
		<script src="js/theme.js"></script>

    </body>


</html>
