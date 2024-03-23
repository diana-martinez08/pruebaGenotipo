<?php
include_once "conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <title>UpperLogistics</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <img src="img/logo.png" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nosotros</a>
                        </li>                       
                        <li class="nav-item">
                            <a class="nav-link" href="#">Almacenaje</a>
                        </li>                       
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logística</a>
                        </li>                       
                        <li class="nav-item">
                            <a class="nav-link" href="#">Transporte terrestre</a>
                        </li>                       
                    </ul>
                    <form class="d-flex">
                        <svg class="tel" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                        </svg>
                        <p class="numero">5541925311</p>
                        <img src="img/mexico.png" alt="" width="20px" height="15px" style="margin: auto; margin-right: 20px">
                        <button class="btn Bcontacto" type="submit"><b>Contacto</b></button>
                    </form>
                </div>
            </div>
        </nav> <br><br>
        <div class="container-fluid inicio">
            <div class="row">
                <div class="col-6">
                    <img src="img/mask.png" alt="" style="display: block; margin: 0 auto;">
                </div>
                <div class="col-5"> <br>
                    <b class="texto1">Upper Logistics:</b>
                    <b class="texto2">Empresa líder en</b>
                    <b class="texto2">innovación logística</b>
                    <b class="texto3">Ventajas de Elegirnos como tu Operador Logístico</b> <br>
                    <p class="texto4">Nuestro compromiso es convertirnos en tu aliado estratégico para optimizar tu cadena de suministro. Con más de una década de experiencia, ofrecemos <b>soluciones integrales en logística</b>a la medida de tus necesidades, garantizando eficiencia, seguridad y adaptabilidad.</p>
                </div>
                <div class="col-1">
                    <a class="whats" href="https://api.whatsapp.com/send?phone=TUNUMERO&text=Hola%20desde%20mi%20sitio%20web" target="_blank"><i class="fab fa-whatsapp whatsapp-icon"></i></a>
                </div>
            </div>
        </div>
        <div class="container-fluid parte2">
            <svg class="check1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            <b>Somos una empresa registrada ante REPSE</b>
        </div>
    </header>

    <div class="container-fluid parte3">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-4">
                <br> <br>
                <b class="texto5">Nuestras unidades de transporte de carga</b> <br>
                <p class="texto6">Nuestra flota de <b>camiones y tráilers</b> está equipada para <b>cargas pesadas, transporte refrigerado y envíos especializados,</b> garantizando que tus productos lleguen en perfectas condiciones.</p>
            </div>
            <div class="col-2"></div>
            <div class="col-4">
                <br> <br>
                <b class="texto5">Transporte de mercancías peligrosas</b> <br>
                <p class="texto6">Nuestro equipo está altamente capacitado en <b>transporte de cargas peligrosas y envíos de alto valor,</b> asegurando que cada paquete se maneje con el cuidado y la precisión que merece.</p>
            </div>
            <div class="col-1"></div>
        </div> <br> <br>
    </div>

    <div class="container-fluid parte4">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-5"> <br> <br>
                <b class="texto7">No solo somos una empresa de logística, somos tu socio estratégico.</b> <br> <br>
                <p class="texto6">Nos involucramos en tu negocio para comprender tus necesidades y ofrecerte soluciones que optimicen tu cadena de suministro, te ayuden a alcanzar tus objetivos y te hagan más competitivo.</p>
                <br>
                <button class="btn Binteresa" type="submit"><b>Me interesa</b></button>
            </div>
            <div class="col-1"></div>
            <div class="col-5">
                <img src="img/imagen1.png" alt="">
            </div>
        </div>
    </div>  
    
    <div class="container-fluid parte3">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <b class="texto8"> <br> <br> ¿Por qué somos tu mejor opción para resguardar tu mercancía?</b>
            </div>
            <div class="col-2"> <br> <br>
                <img src="img/imagen2.png" alt="">
            </div>
        </div> <br> <br>

        <div class="row">
            <div class="col-3"></div>
            <div class="col-1 circle">
                <svg class="calendar" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-calendar4" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                </svg>
            </div>
            <div class="col-6">
            <b class="texto5">Tiempo de estadía</b> <br>
            <p class="texto6">Ya sea que estés buscando un <b> almacenar tu mercancía </b> a largo plazo, una solución temporal durante las temporadas de alta demanda, o <b>servicio de cross docking </b> eficiente para acelerar el <b>tránsito de mercancías,</b> somos tu mejor opción.</p>
            </div>
            <div class="col-2"></div>
        </div> <br> <br>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-1 circle">
                <svg class="calendar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07"/>
                </svg>
            </div>
            <div class="col-6">
            <b class="texto5">Eficiencia en administración</b> <br>
            <p class="texto6">Con nuestro moderno <b> WMS (Sistema de Gestión de Almacenes), </b> garantizamos una<b> administración de stock </b> precisa, <b> control de inventarios </b> en tiempo real, y verificación de calidad, asegurando que sus productos siempre estén listos para el mercado.</p>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-1 naranja"></div>
            <div class="col-3 parte5">
                <img src="img/imagen3.png" alt="" width="270px" height="180px" style="margin: 40px;">
            </div>
            <div class="col-1 azul"></div>
            <div class="col-6 azul"> <br> <br>
                <b class="texto9 d-flex align-items-center justify-content-center">Servicios de almacenaje</b> <br>
                <p class="texto10 align-items-center justify-content-center"> Nos especializamos en ofrecer <b> soluciones de almacenaje </b> a medida, espacios de almacenamiento seguro y <b>centros de distribución </b>de alta tecnología para satisfacer las necesidades de tu negocio. </p>
            </div>
            <div class="col-1 azul"></div>
        </div>
    </div>

    <div class="container-fluid parte3">
        <b style="font-size: 35px"><br>Nuestros almacenes en México</b> <br> <br>
        <div class="row">
            <div class="col-7">               
                <iframe width="710" height="400" src="https://www.youtube.com/embed/dlLJb9pr0iA?si=uJd5DnodFLf0uQkn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>    
            </div>
            <div class="col-5">
                <div class="container">
                    <div class="list-group"> <br> <br>
                        <div class="list-group-item border-0 d-flex  align-items-start">
                            <svg class="check" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                            <div class="ms-2 me-auto texto6">
                                <div class="fw-bold" style="font-size: 22px; color: black;">Querétaro</div>
                                21,000 m² para operaciones de gran escala.
                            </div>
                        </div>
                        <div class="list-group-item border-0 d-flex  align-items-start">
                            <svg class="check" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                            <div class="ms-2 me-auto texto6">
                                <div class="fw-bold" style="font-size: 22px; color: black;">Cuautitlán</div>
                                5,000 m² para atender la zona centro del país.
                            </div>
                        </div>
                        <div class="list-group-item border-0 d-flex align-items-start">
                            <svg class="check" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                            <div class="ms-2 me-auto texto6">
                                <div class="fw-bold" style="font-size: 22px; color: black;">Guadalajara</div>
                                5,000 m² para gestionar logística en el occidente de México.
                            </div>
                        </div>
                        <div class="list-group-item border-0 d-flex align-items-start">
                            <svg class="check2" xmlns="http://www.w3.org/2000/svg" widt="34" height="34" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                            <div class="ms-2 me-auto texto6">
                                <div class="fw-bold" style="font-size: 22px; color: black;">Manzanillo</div>
                                2,000 m² ubicado estratégicamente en el puerto marítimo más importante de la región.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <br> <br> <br>
        <div class="row">
            <b class="texto7"> En Upper Logistics, nuestro objetivo principal es tu éxito.</b>
            <b style="font-size: 22px;">Empresas que han confiado en Upper Logistics</b>
        </div>
        <div class="row">
            <div class="slider left-slider">
                <div class="slide-track">
                    <div class="slide">
                        <img src="img/logo1.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo2.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo3.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo4.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo5.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo6.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo1.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo2.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo3.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo4.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo5.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo6.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- slider 2  -->
        <div class="row">
            <div class="slider right-slider">
                <div class="slide-track">
                    <div class="slide">
                        <img src="img/logo7.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo8.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo9.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo10.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo11.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo12.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo7.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo8.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo9.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo10.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo11.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo12.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- slider 3 -->
        <div class="row">
            <div class="slider left-slider">
                <div class="slide-track">
                    <div class="slide">
                        <img src="img/logo13.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo14.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo15.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo16.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo17.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo18.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo13.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo14.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo15.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo16.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo17.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/logo18.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid parte2"> <br>
        <b class="texto9">Servicios integrales en logística</b>
        <p class="texto10">Contamos con la experiencia, el conocimiento y la infraestructura necesaria para cubrir todas tus necesidades.</p>
        <!-- ARTICULOS AGREGADOS -->
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <?php 
                        $stmt = $pdo->query('SELECT imagen, titulo, descripcion FROM articulos');
                        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        $groups = array_chunk($results, 3);
                        
                        foreach ($groups as $key => $group) {
                        $active = ($key === 0) ? 'active' : '';
                        echo '<div class="carousel-item ' . $active . '">';
                        echo '<div class="row">';
                        foreach ($group as $row) {
                            echo '<div class="card">';
                            echo '<img src="' . $row["imagen"] . '" class="card-img-top" alt="...">';
                            echo '<div class="card-body">';
                            echo '<b class="card-title">' . $row["titulo"] . '</b>';
                            echo '<p class="card-text">' . $row["descripcion"] . '</p>';
                            echo '<a href="#" class="btn Bmas">Ver más</a>';
                            echo '</div>';
                            echo '</div>';
                        }
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div> <br> <br>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="container-fluid parte4">
        <div class="row">
            <div class="col-4">
                <img class="imgCor" src="img/image5.png" alt="">               
            </div>
            <div class="col-5"></div>
            <div class="col-2"> <br> <br>
                <form class="d-flex">
                    <svg class="tel2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                    </svg>
                    <p class="numero2">5541925311</p>
                    <img src="img/in.png" alt="" width="20px" height="15px" style="margin: auto; margin-right: 20px">
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid parte4">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-3"> <br>
                <ul class="list-group">
                    <li class="list-group-item border-0 parte4"><b>Almacenaje</b></li>
                    <li class="list-group-item border-0 parte4"><a href="" style="color: #6F6F71; text-decoration: none;">Tiempo de estadía</a></li>
                    <li class="list-group-item border-0 parte4"><a href="" style="color: #6F6F71; text-decoration: none;">Eficiencia en administración</a></li>
                    <li class="list-group-item border-0 parte4"><a href="" style="color: #6F6F71; text-decoration: none;">Sectores</a></li>
                    <li class="list-group-item border-0 parte4"><a href="" style="color: #6F6F71; text-decoration: none;">Ubicaciones</a></li>
                    <li class="list-group-item border-0 parte4"><a href="" style="color: #6F6F71; text-decoration: none;">Hub logístico</a></li>                   
                </ul>
            </div>
            <div class="col-3"> <br>
                <ul class="list-group">
                    <li class="list-group-item border-0 parte4"><b>Logística</b></li>
                    <li class="list-group-item border-0 parte4"><a href="" style="color: #6F6F71; text-decoration: none;">Fullfillment | Carga de software </a></li>
                    <li class="list-group-item border-0 parte4"><a href="" style="color: #6F6F71; text-decoration: none;">Logística inversa</a></li>
                    <li class="list-group-item border-0 parte4"><a href="" style="color: #6F6F71; text-decoration: none;">Servicios inhouse</a></li>
                </ul>
            </div>
            <div class="col-2"> <br>
                <ul class="list-group">
                    <li class="list-group-item border-0 parte4"><b>Transporte terrestre</b></li>
                    <li class="list-group-item border-0 parte4"><a href="" style="color: #6F6F71; text-decoration: none;">Tipo de unidades</a></li>
                    <li class="list-group-item border-0 parte4"><a href="" style="color: #6F6F71; text-decoration: none;">Última milla</a></li>
                    <li class="list-group-item border-0 parte4"><a href="" style="color: #6F6F71; text-decoration: none;">Especialidades</a></li>
                    <li class="list-group-item border-0 parte4"><a href="" style="color: #6F6F71; text-decoration: none;">Paquetería</a></li>
                </ul>
            </div>
            <div class="col-3"> <br>
                <ul class="list-group">
                    <li class="list-group-item border-0 parte4"><b>Nosotros</b></li>
                    <li class="list-group-item border-0 parte4"><a href="" style="color: #6F6F71; text-decoration: none;">¿Por qué Upper?</a></li>
                    <li class="list-group-item border-0 parte4"><a href="" style="color: #6F6F71; text-decoration: none;">Cobertura</a></li>
                    <li class="list-group-item border-0 parte4"><a href="" style="color: #6F6F71; text-decoration: none;">Acerca de nosotros</a></li>
                    <li class="list-group-item border-0 parte4"><a href="" style="color: #6F6F71; text-decoration: none;">Nuestros clientes</a></li>
                    <li class="list-group-item border-0 parte4"><a href="" style="color: #6F6F71; text-decoration: none;">Blog</a></li>
                </ul> <br> <br>
            </div>
        </div>
    </div>

    <div class="container-fluid parte6">
        <div class="row">
            <div class="col-6">
                <p><br> Aviso de Privacidad  |  Soporte Técnico  |  Empresas HMNS</p>
            </div>
            <div class="col-6">
                <p> <br>©2023 Upper Logistics. Todos los Derechos Reservados. Diseño y desarrollo web por: Genotipo®</p>
            </div>
        </div>
    </div>
</body>
</html>