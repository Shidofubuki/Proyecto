<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mi Valle</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css'/>
	<link rel="stylesheet" href="css/shop.css" type="text/css"/>
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<link rel="icon" href="images/Simbolo tu valle.png">
</head>
<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>Ayuda</h6>
					<ul>
						<li>
							<i class="fas fa-phone"></i> Telefono:</li>
						<li class="number-phone mt-3">3152200214.</li>
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="index.php">Mi Valle</a>
					</h1>
				</div>
				<!-- <div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
						<li class="button-log">
							<a class="btn-open" href="#">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</li>
						<li class="galssescart galssescart2 cart cart box_1">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="top_googles_cart" type="submit" name="submit" value="">
									Carro
									<i class="fas fa-cart-arrow-down"></i>
								</button>
							</form>
						</li>
					</ul> -->
					<!---->
					<!-- <div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Bienvenido</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form action="#" method="post">
									<div class="form-group">
										<label class="mb-2">Correo</label>
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
										<small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
									</div>
									<div class="form-group">
										<label class="mb-2">Contraseña</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
									</div>
									<div class="form-check mb-2">
										<input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label class="form-check-label" for="exampleCheck1">Me echa un vistazo</label>
									</div>
									<button type="submit" class="btn btn-primary submit mb-4">Inicar Seccion</button>
								</form>
							</div>
							
						</div>
					</div>
					<---->
				</div>
			</div> 
			<div class="search">
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>
			
				<div class="overlay overlay-door">
					<button type="button" class="overlay-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<form  name="formulario" role="form" method ="post" class="d-flex">
						<input class="form-control" type="search" name="nombre" placeholder="Search here..." required="">
						<button type="submit" class="btn btn-primary submit">
							<i class="fas fa-search"></i>
						</button>
					</form>
					<?php
    if ($_SERVER ['REQUEST_METHOD']==='POST') 
    {
        include('Funciones.php');
        $vid=$_POST['nombre'];
        
        $miconexion=conectar_bd ('fXSujtXUbMVd667NwTtN','boxwhlwosv6kdml5xuhb');
        $resultado=consulta ($miconexion, "select * from servicio where trim(nombre) like '%{$vid}%'"); 
                        if($resultado->num_rows>0)
                        {
                        $cadena="";
                        $cadena=$cadena."<table class='table table-dark table-hover>'";
                            
                        while ($fila = $resultado->fetch_object())
                            {
                            $cadena=$cadena."<tr>";
                            $cadena=$cadena."<td>$fila->nombre</td>";
                            $cadena=$cadena."</tr>";

                            $cadena=$cadena."<tr>";
                            $cadena=$cadena."<td>$fila->descripcion</td>"; 							
                            $cadena=$cadena."</tr>";
							
							$cadena=$cadena."<tr>";
							$cadena=$cadena."<td>$fila->direccion</td>";
                            $cadena=$cadena."</tr>";
							
							$cadena=$cadena."<tr>";
                            $cadena=$cadena."<td>$fila->fecha</td>";
                            $cadena=$cadena."</tr>";
                            
                            echo $cadena;
                            $cadena ="";
                            }
                        echo "</table>";
                    }
                    else{
                            echo "No existen registros";
                    }
                $miconexion->close();
    }?>
				</div>
				<!-- open/close -->
			</div>
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="/Consultas/Index.html" target="_blank">Valledupar
								<span class="sr-only">(current)</span>
							</a>
						</li>						
						<li class="nav-item">
							<a class="nav-link" href="/Login/validador.php">Iniciar Sesion</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="admin.php" target="_blank">Administrador</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- //header -->
		<!-- banner -->
		<div class="banner">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="carousel-caption text-center">
							<h3>Valledupar
								<span>Tus Vacaciones Estan Listas</span>
							</h3>
							<a href="#" class="btn btn-sm animated-button gibson-three mt-4">Mostrar ahora</a>
						</div>
					</div>
					<div class="carousel-item item2">
						<div class="carousel-caption text-center">
							<h3>Que Hermoso dia para visitarnos 
								<span>Que esperas porque no nos visitas</span>
							</h3>
							<a href="#" class="btn btn-sm animated-button gibson-three mt-4">Mostrar ahora</a>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Siguiente</span>
				</a>
			</div>
			<!--//banner -->
	</div>



		<!-- Video -->
		<!-- <center>
			<video controls width="840" height="840" autoplay>
                    <source src="/images/MiValle2021.mp4" type="video/mp4">
					<source src="/images/MiValle2021.mp4" type="video/ogg">
			</video>
            <center>
		</div> -->
		<!-- FIn de video -->


	<!--//banner-sec-->
				<!-- /testimonials -->
				<div class="testimonials py-lg-4 py-3 mt-4">
					<div class="testimonials-inner py-lg-4 py-3">
						<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Testimonios</h3>
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<div class="testimonials_grid text-center">
										<h3>Juan Maestre
											<span>Usuario</span>
										</h3>
										<label>Colombia</label>
										<p>Es excelente gracias a esta pagina web pude conocer a valledupar.</p>
									</div>
								</div>
								<div class="carousel-item">
									<div class="testimonials_grid text-center">
										<h3>Maria Jose
											<span>Usuario</span>
										</h3>
										<label>Colombia</label>
										<p>Vivi una experiencia muy linda en Valledupar.</p>
									</div>
								</div>
								<div class="carousel-item">
									<div class="testimonials_grid text-center">
										<h3>Carlos Martinez
											<span>Usuario</span>
										</h3>
										<label>Colombia</label>
										<p>Me encanto quedo muy recomendable a los visitantes a futuro.</p>
									</div>
								</div>
								<a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="fas fa-long-arrow-alt-left"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>
				</div>
	<br>


	<!-- Codigo QR	
	<div id="qrcode" class="qrcode">
	<img src="https://www.codigos-qr.com/qr/php/qr_img.php?d=https%3A%2F%2Fmivalle.herokuapp.com%2F&s=6&e=m" alt="Generador de Códigos QR Codes" width="200px"/>
	<br/> <p><i><b>Para ir a la pagina directa</b></i></p>
	</div> -->

	<center><div id="qrcode" class="qrcode1">
	<img src="https://www.codigos-qr.com/qr/php/qr_img.php?d=https%3A%2F%2Fdocs.google.com%2Fforms%2Fd%2Fe%2F1FAIpQLSemDkagISgj7iBIsV8_Eix_G3K187Bg6DAGns_KQt8V-ujzHw%2Fviewform%3Fusp%3Dsf_link&s=4&e=l" alt="QR Code generator" width="200px"/>
	<br/> <p><i><b>Danos tu opinion</b></i></p>
	</div></center>
	<!-- Fin de Codigo QR -->


	<!--footer -->
	<footer class="py-lg-5 py-3">
		<div class="container-fluid px-lg-5 px-3">
			<div class="row footer-top-w3layouts">
				<div class="col-lg-4 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Sobre nosotros</h3>
					</div>
					<div class="footer-text">
						<p>Somos un grupo de desarrolladores que viendo la problematica que tiene valledupar. Y viendo todo lo que tiene para ofrecer desarrollamos una pagina web para solucionar esa problematica.</p>
                    </div>
				</div>
				<div class="col-lg-4 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Ponerse en contacto</h3>
					</div>
					<div class="contact-info">
						<h4>Ubicacion :</h4>
						<p>Valledupar (Cesar).</p>
						<div class="phone">
							<h4>Contacto :</h4>
							<p>Phone :+57 3152200214 </p>
							<p>Correo :
								<a href="mailto:info@example.com">plmarquez2@misena.edu.co</a>
							</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Regístrese para recibir sus ofertas</h3>
					</div>
					<div class="footer-text">
						<p>Al suscribirse a nuestra lista de correo, siempre recibirá nuestras últimas noticias y actualizaciones.</p>
						<form action="#" method="post">
							<input class="form-control" type="email" name="Email" placeholder="Ingrese su Correo..." required="">
							<button class="btn1">
								<i class="far fa-envelope" aria-hidden="true"></i>
							</button>
							<div class="clearfix"> </div>
						</form>
					</div>
				</div>
			</div>
			<div class="copyright-w3layouts mt-4">
				<p class="copy-right text-center ">&copy; 2021 Mi Valle. Reservados todos los derechos | Diseñado por
					<a href="#"> Pedro Marquez </a>
				</p>
			</div>
		</div>
	</footer>
	<!-- //footer -->

	<!--jQuery-->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- newsletter modal -->
	<!-- Modal -->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center p-5 mx-auto mw-100">
					<h6>Espero que le guste nuestra pagina web</h6>
					<h3>Bienvenidos</h3>
						<p class="text-center">
						<a href="#">Gracias por visitarnos</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function () {
			$("#myModal").modal();
		});
	</script>
	<!-- // modal -->

	<!--search jQuery-->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/classie-search.js"></script>
	<script src="js/demo1-search.js"></script>
	<!--//search jQuery-->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		googles.render();

		googles.cart.on('googles_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
	</script>
	<!-- carousel -->
	<!-- Count-down -->
	<script src="js/simplyCountdown.js"></script>
	<link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
	<script>
		var d = new Date();
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script>
	<!--// Count-down -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					900: {
						items: 3,
						nav: false
					},
					1000: {
						items: 4,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>

	<!-- //end-smooth-scrolling -->


	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /* 	var defaults = { containerID: 'toTop', // fading element containerHoverID: 'toTopHover', // fading element hover id scrollSpeed: 1200, easingType: 'linear }; */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->

	<script src="js/bootstrap.js"></script>
	<!-- js file -->
</body>

</html>