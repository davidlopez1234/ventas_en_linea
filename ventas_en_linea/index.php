<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MADERA LA FRONTERA</title>
	<!-- Estilos -->
	<link rel="shortcut icon" href="assets/img/logo_adobespark.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">	
	<link rel="stylesheet" href="assets/css/all.css">	
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="app/index_admin.html">
</head>
<body>
	<!-- Contenedor -->
	<div class="container-fuid">		
		<!-- Navegador -->		
		<nav class="navegacion row sticky-top d-flex">
			<div class="logo col-lg-3 d-flex justify-content-center oippppplp-0">
				<img class="img-fluid" src="assets/imag//WhatsApp Image 2023-08-23 at 6.53.11 PM.png" alt=""style="
    width: 60px;
">
			</div>
			<div class="col-lg-9 p-0">
				<div class="navbar navbar-expand-lg navbar-light">
					<a class="navbar-brand" href="#"></a>
					<button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon text-light"></span>

					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link text-white" href="#"><span class="sr-only">(current)</span></a>
							</li>
						</ul>
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link text-white ocul-navbar" href="#">Inicio <span class="sr-only">(current)</span></a>
							</li>
						</ul>
						<ul class="navbar-nav">							
							<li class="nav-item">
								<a class="nav-link text-white ocul-navbar" href="#portafolio">Portafolio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white ocul-navbar" href="#nosotros" >Preguntas mas frecuentes</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white ocul-navbar" href="#contactenos">Contáctenos</a>
							</li>
											
							<li class="nav-item">
								<a class="nav-link text-white ocul-navbar" href="views/inicio_sesion.php">Ingreso</a>
							</li>
											
							<li class="nav-item">
								<a class="nav-link text-white ocul-navbar" href="views/registro.php">Registro</a>
							</li>
											
						</ul>						
					</div>
				</div>
			</div>
		</nav>

		<!-- Formulario Modal Ingreso -->		
		<div class="modal fade" id="iniciar-sesion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form id="enviar">
							<div class="form-group">
								<label for="usuario">usuario</label>
								<input type="email" class="form-control" id="usuario" aria-describedby="emailHelp" placeholder="admin@correo.com/cliente@correo.com">
							</div>
							<div class="form-group">
								<label for="contrasena">Contraseña</label>
								<input type="password" class="form-control" id="contrasena" placeholder="12345"><a href="recu-cont" data-toggle="modal" data-target="#recu-cont">¿Olvidaste la contraseña?</a>	
							</div>

							<button type="submit" class="btn btn-primary">Enviar</button>

							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

						</form>
					</div>					
				</div>
			</div>
		</div>
<!-- Formulario Modal olvido de contraseña -->
<div class="modal fade" id="recu-cont" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recuperar Cuenta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo de recuperación</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Repetir correo</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Recibir código al email</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button> <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
</form>
      </div>
    </div>
  </div>
</div>
		<!-- Formulario Modal Registro -->
		<div class="modal fade" id="registro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Registro</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form id="registro">
							<div class="form-row">
								<div class="form-group col-6">
									<label for="nombres">Nombres</label>
									<input type="text" class="form-control" id="nombres" placeholder="Nombres">
								</div>
								<div class="form-group col-6">
									<label for="apellidos">Apellidos</label>
									<input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
								</div>
							</div>
							<div class="form-group">
								<label for="correo">E-Mail</label>
								<input type="email" class="form-control" id="correo" placeholder="usuario@correo.com">
							</div>
							<div class="form-row">
								<div class="form-group col-6">
									<label for="contrasena_reg">Contraseña</label>
									<input type="password" class="form-control" id="contrasena_reg" placeholder="Entre 5 y 8 caracteres">
								</div>
								<div class="form-group col-6">
									<label for="confirmacion">Confirmación</label>
									<input type="password" class="form-control" id="confirmacion" placeholder="Confirmar contraseña">
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Enviar</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>							
						</form>
					</div>					
				</div>
			</div>
		</div>

		<!-- Encabezado -->
		<header class="row">
			<div class="col bg-light p-0">
				<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="assets/imag/WhatsApp Image 2023-08-23 at 6.53.11 PM.png" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block"></div>
						</div>
						<div class="carousel-item">
							<img src="img/" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block"></div>
						</div>
						<div class="carousel-item">
							<img src="assets/imag/jon-moore-WrPJktSNMgk-unsplash.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block"></div>
						</div>
						<div class="carousel-item">
							<img src="assets/imag/moren-hsu-VLaKsTkmVhk-unsplash.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block"></div>
						</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</header>

		<!-- Portafolio -->		
		<div class="portafolio">
			<div id="portafolio"></div>
			<div class="titulo row text-center">
				<div class="col p-2 text-white">
					<h2>Portafolio</h2>
				</div>
			</div>
		</div>
		<section class="portafolio row bg-light border">
			<div class="col-lg-4 col-md-12 p-2 d-flex justify-content-center">
				<div class="card">
					<h5 class="card-title text-center p-3 m-0">PUERTAS EN MADEFONDO</h5>
					<div class="card-body text-center">
						<img src="assets/imag/imagen 3.jpg" class="img-fluid px-5" alt="...">
						<p class="card-text p-3 text-justify">MADEFONDO. Es una chapa de madera que tiene vetas. Se utiliza en aplicaciones de decoración de interiores o arquitectura. En la fabricación de muebles finos, puertas, divisiones de interiores, revestimiento de muros, o donde se quiere resaltar la belleza natural de la madera.</p>
						<a href="https://classroom.google.com/c/OTIwODExMTMzMzVa?cjc=kj67qwg" target="_blank" class="btn btn-secondary">Ver más ...</a>
					</div>
				</div>
			</div>			
			<div class="col-lg-4 col-md-6 p-2 d-flex justify-content-center">
				<div class="card">
					<h5 class="card-title text-center p-3 m-0">PUERTAS EN TRIPLEX</h5>
					<div class="card-body text-center">
						<img src="assets/imag/imagen 4.jpg" class="img-fluid px-5" alt="...">
						<p class="card-text p-3 text-justify">La puertas de Triplex okume son fabricadas con chapas de madera natural, permitiendo tener en la apertura de cada espacio una pieza única con los diseños propios de la naturaleza.</p>
						<a href="https://classroom.google.com/c/OTIwODExMTMzMzVa?cjc=kj67qwg" target="_blank" class="btn btn-secondary">Ver más ...</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 p-2 d-flex justify-content-center">
				<div class="card">
					<h5 class="card-title text-center p-3 m-0">PUERTAS EN MELAMINAS</h5>
					<div class="card-body text-center">
						<img src="assets/imag/imagen 5.jpg" class="img-fluid px-5" alt="...">
						<p class="card-text p-3 text-justify">LLa melamina es una material duradero, ligero, amigable con el ambiente y sobre todo más barato que la madera. Posee de características únicas como su alta resistencia al impacto, resistencia al fuego, resistencia a solventes y químicos, además es resistente a doblarse y es homogénea.</p>
						<a href="https://classroom.google.com/c/OTIwODExMTMzMzVa?cjc=kj67qwg" target="_blank" class="btn btn-secondary">Ver más ...</a>
					</div>
				</div>
			</div>						
		</section>

		<!-- Nosotros -->
		<div class="nosotros">
			<div id="nosotros"></div>
			<div class="titulo row text-center">
				<div class="col p-2 text-white">
					<h2>Preguntas mas frecuentes</h2>
				</div>
			</div>
		</div>
		<section class="row p-1 bg-light border">
			<div class="col-12 p-0 d-flex flex-column">
				<div class="col d-md-flex flex-md-row p-2">
					<div class="col-lg-5 col-md-8 pl-0 d-flex align-items-center justify-content-center align-items-md-center justify-content-md-end">
						<div class="card d-none d-md-block">
							<div class="card-body text-center text-md-right">
								<h5 class="card-title">¿Qué tipo de puerta necesito para mi espacio?</h5>
								<p class="card-text">La elección del tipo de puerta dependerá de dónde se va a instalar. Por ejemplo, para la entrada principal de tu hogar, una puerta de seguridad resistente podría ser ideal.
								</p>
								<a href="#" class="btn btn-secondary"></a>
							</div>
						</div>
					</div>
					<div class="card col-lg-2 col-md-4 p-4 text-center d-flex align-items-center justify-content-center">
						<img src="assets/imag/sophie-dale-dJycgkec2p0-unsplash.jpg" class="img-fluid" alt="">
					</div>
					<div class="col-lg-5 d-md-none p-0">
						<div class="card">
							<div class="card-body text-center text-md-right">
								<h5 class="card-title"></h5>
								<p class="card-text"></p>
								<a href="#" class="btn btn-secondary">Ver Más ...</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col d-md-flex flex-md-row p-2">
					<div class="col-lg-5 d-none d-lg-block"></div>
					<div class="card col-lg-2 col-md-4 p-4 text-center d-flex align-items-center justify-content-center">
						<img src="assets/imag/WhatsApp-Image-2023-08-23-at-6.52.04-PM-_2_.png" class="img-fluid" alt="">
					</div>
					<div class="col-lg-5 col-md-8 p-0 pl-md-3 d-flex align-items-center justify-content-center align-items-md-center justify-content-md-start">
						<div class="card w-100">						  
							<div class="card-body text-center text-md-left">
								<h5 class="card-title">¿Puedo personalizar el diseño o el color de la puerta?</h5>
								<p class="card-text"> Sí,ofrecemos opciones de personalización en términos de diseño, color y acabados. Pregunta sobre las posibilidades de personalización.</p>
								<a href="#" class="btn btn-secondary">Ver Más ...</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col d-md-flex flex-md-row p-2">
					<div class="col-lg-5 col-md-8 pl-0 d-flex align-items-center justify-content-center align-items-md-center justify-content-md-end">
						<div class="card d-none d-md-block">
							<div class="card-body text-center text-md-right">
								<h5 class="card-title">¿Cuál es el costo total, incluyendo la instalación?</h5>
								<p class="card-text">El costo variará según el tipo de puerta y el material. Asegúrate de obtener un presupuesto detallado que incluya tanto la puerta como los costos de instalación.</p>
								<a href="#" class="btn btn-secondary">Ver Más ...</a>
							</div>
						</div>
					</div>
					<div class="card col-lg-2 col-md-4 p-4 text-center d-flex align-items-center justify-content-center">
						<img src="assets/imag/jill-nissen-yB4lh9pwvdI-unsplash.jpg" class="img-fluid" alt="">
					</div>
					<div class="col-lg-5 d-md-none p-0">
						<div class="card">
							<div class="card-body text-center text-md-right">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
								<a href="#" class="btn btn-secondary">Ver Más ...</a>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</section>

		<!-- Contáctenos -->
		<div class="contactenos">
			<div id="contactenos"></div>
			<div class="titulo row text-center">
				<div class="col p-2 text-white">
					<h2>Contáctenos</h2>
				</div>
			</div>
		</div>
		<section class="contacto row border">
			<div class="col-lg-6 p-2 bg-light p-1 d-lg-flex">
				<form class="card p-3 bg-white d-lg-flex justify-content-center w-100">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nombres">Nombres</label>
							<input type="text" class="form-control" id="nombres">
						</div>
						<div class="form-group col-md-6">
							<label for="apellidos">Apellidos</label>
							<input type="text" class="form-control" id="apellidos">
						</div>
					</div>
					<div class="form-group">
						<label for="inputAddress">E-Mail</label>
						<input type="email" class="form-control" id="inputAddress">
					</div>
					<div class="form-group">
					    <label for="exampleFormControlTextarea1">Mensaje</label>
					    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
				  	</div>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</div>
			<div class="col-lg-6 d-md-flex flex-md-column p-0">
				<div class="mapa p-2 bg-light">
					<iframe class="card h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.102181725617!2d-74.1064326862082!3d4.575663844005497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9eaa83c20311%3A0xceff7813a5f8233e!2sGimnasio%20San%20Jos%C3%A9!5e0!3m2!1ses!2sco!4v1628633008996!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="col p-2 bg-light">					
					<div class="esp-temp card col mb-2 p-3 text-center">
						<p>Sede de madera la frontera</p>
						<p>Dirección:calle 27 sur 8a 45-Teléfono: 3112281675 Ext: 14915</p>
						<p>Conmutador Nacional (57 1) 5461500 - Extensiones</p>
						<p>Atención telefónica: lunes a viernes 7:00 a.m. a 7:00 p.m. - sábados 8:00 a.m. a 1:00 p.m.</p>
						<p>Atención al ciudadano: Bogotá (601) 2729204 - </p>
						<p>Atención al empresario: Bogotá (57 1) 1809654 - </p>
					</div>
					<div class="card col p-2 d-flex flex-row justify-content-center align-items-center">
						<i class="fab fa-whatsapp-square"></i>
						<i class="fab fa-facebook"></i>
						<i class="fab fa-twitter"></i>
						<i class="fab fa-youtube"></i>
						<i class="fab fa-instagram-square"></i>
					</div>
				</div>
			</div>
		</section>

		<!-- Pie de Página -->
		<footer class="row">
			<div class="col p-2 text-white">				
				<h6 class="text-center m-0">Todos los Derechos Reservados a:</h6>
				<h6 class="text-center m-0">@ 2023 David Santiago Lopez Solano y Nicolar Rozo Lopez </h6>				
			</div>
		</footer>
	</div>
	<!-- Scripts -->
	<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/scripts.js"></script>	
</body>
</html>