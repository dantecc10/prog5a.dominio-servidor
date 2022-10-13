<!DOCTYPE html>
<html lang="es">

<head>
    <title>PROG5A - Inicio</title>
    <meta charset="UTF-8">

    <meta name="description" content="Dante Castelán Carpinteyro: Web dedicada a publicación de proyectos y código personal.">
    <meta name="author" content="Dante Castelán Carpinteyro">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/Formulario.css">
    <link rel="stylesheet" type="text/css" href="CSS/ReglasExtra.css">

    <link rel="shortcut icon" href="IMG/Logo-PROG5A.png" type="image/x-icon">

    <link rel="preload" as="image" href="IMG/Equipos/1.jpg">
    <link rel="preload" as="image" href="IMG/Equipos/2.jpg">
    <link rel="preload" as="image" href="IMG/Equipos/3.jpeg">
    <link rel="preload" as="image" href="IMG/Equipos/4.jpg">
    <link rel="preload" as="image" href="IMG/Equipos/5.jpg">
    <link rel="preload" as="image" href="IMG/Equipos/6.jpg">
    <link rel="preload" as="image" href="IMG/Equipos/7.jpeg">
    <link rel="preload" as="image" href="IMG/Equipos/8.jpeg">
    <link rel="preload" as="image" href="IMG/Equipos/9.jpeg">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <?php
    include "Scripts PHP/ConexiónUsuarios.php";
    include "Scripts PHP/InicioSesión.php";
    ?>
    <div id="DivInicioSesión" class="modal">
        <form class="modal-content animate myForm" action="" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('DivInicioSesión').style.display='none'" class="CerrarCuadro" title="Close Modal">×</span>
                <img src="IMG/img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="Usuario"><b>Usuario</b></label>
                <input type="text" placeholder="usuario@prog5a*" name="Usuario" required="">
                <br>
                <label for="Contraseña"><b>Contraseña</b></label>
                <input type="password" placeholder="Contraseña (@prog5a!!)*" name="Contraseña" required="">

                <input type="hidden" name="latitude" value="">
                <input type="hidden" name="longitude" value="">

                <input type="submit" name="InicioSesión" value="Iniciar sesión" class="IniciarSesión DecoradoBotón">

                <label>
                    <input type="checkbox" checked="checked" name="remember">Recordarme
                </label>

            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('DivInicioSesión').style.display='none'" class="BotónCancelar DecoradoBotón">Cancel</button>
                <span class="psw">¿Olvidaste tu <a href="#">contraseña</a>?</span>
            </div>
        </form>
    </div>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">PROG5A</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Equipos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Acerca de</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Colaboradores</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                    <li class="nav-item"><button onclick="document.getElementById('DivInicioSesión').style.display='block'" class="IniciarSesión DecoradoBotón" style="width:auto;" id="BotónAbreInicioSesión">Iniciar sesión</button></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image: url(assets/img/52894.jpg);">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><span><span style="color: rgb(245, 245, 240); background-color: rgba(10, 10, 10, 0.58);">¡Bienvenido al
                            servidor del</span></span></div>
                <div class="intro-heading text-uppercase"><span><span style="color: rgb(243, 248, 248); background-color: rgba(6, 6, 6, 0.58);">PROG5A!</span></span></div><a class="btn btn-primary btn-xl text-uppercase" role="button" href="#services">Explorar</a>
            </div>
        </div>
    </header>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Servicios</h2>
                    <h3 class="text-muted section-subheading">El grupo desarrolla programación web con las siguientes
                        características.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">E-Commerce</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                        architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-laptop fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Responsive Design</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                        architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-lock fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Web Security</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                        architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Equipos</h2>
                    <h3 class="text-muted section-subheading">Los siguientes son los equipos del PROG5A que tienen
                        sitios web alojados en el servidor.</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal1" data-bs-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="IMG/Equipos/1.jpg">
                </a>
                <div class="portfolio-caption">
                    <h4>Equipo 1</h4>
                    <p class="text-muted">Dante Castelán Carpinteyro</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal2" data-bs-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="IMG/Equipos/2.jpg">
                </a>
                <div class="portfolio-caption">
                    <h4>Equipo 2</h4>
                    <p class="text-muted">Agustín Gómez Cruz</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal3" data-bs-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="IMG/Equipos/3.jpeg">
                </a>
                <div class="portfolio-caption">
                    <h4>Equipo 3</h4>
                    <p class="text-muted">Daniela Guzmán Barrientos</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal4" data-bs-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="IMG/Equipos/4.jpg">
                </a>
                <div class="portfolio-caption">
                    <h4>Equipo 4</h4>
                    <p class="text-muted">Justin Lael Ureaga Ramírez</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal5" data-bs-toggle="modal">
                    <div class="portfolio-hover">
                    </div><img class="img-fluid" src="IMG/Equipos/5.jpg">
                </a>
                <div class="portfolio-caption">
                    <h4>Equipo 5</h4>
                    <p class="text-muted">Website Design</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal6" data-bs-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="IMG/Equipos/6.jpg">
                </a>
                <div class="portfolio-caption">
                    <h4>Equipo 6</h4>
                    <p class="text-muted">Brayan Muñoz Flores</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal7" data-bs-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="IMG/Equipos/7.jpeg">
                </a>
                <div class="portfolio-caption">
                    <h4>Equipo 7</h4>
                    <p class="text-muted">Alexander Sandoval Lobo</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal8" data-bs-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="IMG/Equipos/8.jpeg">
                </a>
                <div class="portfolio-caption">
                    <h4>Equipo 8</h4>
                    <p class="text-muted">Oliver Jack Cruz Méndez</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal9" data-bs-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="IMG/Equipos/9.jpeg">
                </a>
                <div class="portfolio-caption">
                    <h4>Equipo 9</h4>
                    <p class="text-muted">Melanie Aidee Cruz López</p>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase">About</h2>
                    <h3 class="text-muted section-subheading">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row"></div>
        </div>
    </section>
    <section class="bg-light" id="team">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="assets/img/team/DANTE-CC.jpg">
                        <h4>Dante</h4>
                        <p class="text-muted">Castelán Carpinteyro</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="https://www.facebook.com/DanteCC10.4T"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/dantecc10"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="assets/img/team/JEREMY-HB.jpeg">
                        <h4>Jeremy</h4>
                        <p class="text-muted">Hernández Balderas</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100022690430842"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/dantecc10"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="assets/img/team/MELANIE-ACL.jpg">
                        <h4>Melanie Aidee</h4>
                        <p class="text-muted">Cruz López</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="https://www.facebook.com/mel.cruzlopez.54"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/dantecc10"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3"><a href="#"><img class="img-fluid d-block mx-auto" src="assets/img/clients/creative-market.jpg"></a></div>
                <div class="col-sm-6 col-md-3"><a href="#"><img class="img-fluid d-block mx-auto" src="assets/img/clients/designmodo.jpg"></a></div>
                <div class="col-sm-6 col-md-3"><a href="#"><img class="img-fluid d-block mx-auto" src="assets/img/clients/envato.jpg"></a></div>
                <div class="col-sm-6 col-md-3"><a href="#"><img class="img-fluid d-block mx-auto" src="assets/img/clients/themeforest.jpg"></a></div>
            </div>
        </div>
    </section>
    <!-- Sección de contacto
    <section id="contact" style="background-image:url('assets/img/map-image.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Contact Us</h2>
                    <h3 class="text-muted section-subheading">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3"><input class="form-control" type="text" id="name" placeholder="Your Name *" required=""><small class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                                <div class="form-group mb-3"><input class="form-control" type="email" id="email" placeholder="Your Email *" required=""><small class="form-text text-danger help-block lead"></small></div>
                                <div class="form-group mb-3"><input class="form-control" type="tel" placeholder="Your Phone *" required=""><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3"><textarea class="form-control" id="message" placeholder="Your Message *" required=""></textarea><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    !-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Copyright&nbsp;© 2022 PROG5A - CECyTE Chignahuapan</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#">Política de privacidad</a></li>
                        <li class="list-inline-item"><a href="#">Términos de uso</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Vistas previas de proyectos web !-->
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2>Equipo</h2>
                                <p class="text-muted item-intro">Subtítulo modificable.</p><img class="img-fluid d-block mx-auto" src="IMG/Equipos/1.jpg">
                                <p>Descripción del sitio</p>
                                <ul class="list-unstyled">
                                    <li>Fecha: octubre del 2022</li>
                                    <li>Cliente: </li>
                                    <li>Categoría: </li>
                                </ul><button class="IniciarSesión DecoradoBotón">Visitar</button><button class="IniciarSesión DecoradoBotón">Administrar</button><button class="btn btn-primary" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal2">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2>Equipo</h2>
                                <p class="text-muted item-intro">Subtítulo modificable.</p><img class="img-fluid d-block mx-auto" src="IMG/Equipos/2.jpg">
                                <p>Descripción del sitio</p>
                                <ul class="list-unstyled">
                                    <li>Fecha: octubre del 2022</li>
                                    <li>Cliente: </li>
                                    <li>Categoría: </li>
                                </ul><button class="IniciarSesión DecoradoBotón">Visitar</button><button class="IniciarSesión DecoradoBotón">Administrar</button><button class="btn btn-primary" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2>Equipo</h2>
                                <p class="text-muted item-intro">Subtítulo modificable.</p><img class="img-fluid d-block mx-auto" src="IMG/Equipos/3.jpeg">
                                <p>Descripción del sitio</p>
                                <ul class="list-unstyled">
                                    <li>Fecha: octubre del 2022</li>
                                    <li>Cliente: </li>
                                    <li>Categoría: </li>
                                </ul><button class="IniciarSesión DecoradoBotón">Visitar</button><button class="IniciarSesión DecoradoBotón">Administrar</button><button class="btn btn-primary" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal4">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2>Equipo</h2>
                                <p class="text-muted item-intro">Subtítulo modificable.</p><img class="img-fluid d-block mx-auto" src="IMG/Equipos/4.jpg">
                                <p>Descripción del sitio</p>
                                <ul class="list-unstyled">
                                    <li>Fecha: octubre del 2022</li>
                                    <li>Cliente: </li>
                                    <li>Categoría: </li>
                                </ul><button class="IniciarSesión DecoradoBotón">Visitar</button><button class="IniciarSesión DecoradoBotón">Administrar</button><button class="btn btn-primary" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal5">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2>Equipo</h2>
                                <p class="text-muted item-intro">Subtítulo modificable.</p><img class="img-fluid d-block mx-auto" src="IMG/Equipos/5.jpg">
                                <p>Descripción del sitio</p>
                                <ul class="list-unstyled">
                                    <li>Fecha: octubre del 2022</li>
                                    <li>Cliente: </li>
                                    <li>Categoría: </li>
                                </ul><button class="IniciarSesión DecoradoBotón">Visitar</button><button class="IniciarSesión DecoradoBotón">Administrar</button><button class="btn btn-primary" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal6">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2>Equipo</h2>
                                <p class="text-muted item-intro">Subtítulo modificable.</p><img class="img-fluid d-block mx-auto" src="IMG/Equipos/6.jpg">
                                <p>Descripción del sitio</p>
                                <ul class="list-unstyled">
                                    <li>Fecha: octubre del 2022</li>
                                    <li>Cliente: </li>
                                    <li>Categoría: </li>
                                </ul><button class="IniciarSesión DecoradoBotón">Visitar</button><button class="IniciarSesión DecoradoBotón">Administrar</button><button class="btn btn-primary" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal7">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2>Equipo</h2>
                                <p class="text-muted item-intro">Subtítulo modificable.</p><img class="img-fluid d-block mx-auto" src="IMG/Equipos/7.jpeg">
                                <p>Descripción del sitio</p>
                                <ul class="list-unstyled">
                                    <li>Fecha: octubre del 2022</li>
                                    <li>Cliente: </li>
                                    <li>Categoría: </li>
                                </ul><button class="IniciarSesión DecoradoBotón">Visitar</button><button class="IniciarSesión DecoradoBotón">Administrar</button><button class="btn btn-primary" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal8">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2>Equipo</h2>
                                <p class="text-muted item-intro">Subtítulo modificable.</p><img class="img-fluid d-block mx-auto" src="IMG/Equipos/8.jpeg">
                                <p>Descripción del sitio</p>
                                <ul class="list-unstyled">
                                    <li>Fecha: octubre del 2022</li>
                                    <li>Cliente: </li>
                                    <li>Categoría: </li>
                                </ul><button class="IniciarSesión DecoradoBotón">Visitar</button><button class="IniciarSesión DecoradoBotón">Administrar</button><button class="btn btn-primary" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-center portfolio-modal" role="dialog" tabindex="-1" id="portfolioModal9">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2>Equipo</h2>
                                <p class="text-muted item-intro">Subtítulo modificable.</p><img class="img-fluid d-block mx-auto" src="IMG/Equipos/9.jpeg">
                                <p>Descripción del sitio</p>
                                <ul class="list-unstyled">
                                    <li>Fecha: octubre del 2022</li>
                                    <li>Cliente: </li>
                                    <li>Categoría: </li>
                                </ul><button class="IniciarSesión DecoradoBotón">Visitar</button><button class="IniciarSesión DecoradoBotón">Administrar</button><button class="btn btn-primary" type="button" data-bs-dismiss="modal"><i class="fa fa-times"></i><span>&nbsp;Cerrar</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>