@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom fonts for this template-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
       
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
   
</head>
<br>
<body id="page-top">

<!--titulo de la pagina -->
        <div id="titulo-pagina" class="container px-5" >
            <div class="row gx-5 align-items-center justify-content-center">
                <h1 class="display-4 text-center">PROPUESTAS DE ESTRATEGIAS DE GESTIÓN DE T.I</h1>
            </div>
        </div>
 


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Un poco de la Institución</h1>
                    </div>

     <!-- Content Row -->
<div class="row">

<!-- Misión -->
<div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col-auto">
                    <i class="bi bi-bullseye text-primary" style="font-size: 2rem;"></i>
                </div>
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Misión
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <p class="text-muted">Educar integralmente a niños y jóvenes, apoyados en una sólida preparación académica, emocional, deportiva y artística que transforme vidas, fomente la innovación la creación y desarrollo de una Nueva Generación de futuros líderes talentosos, innovadores, entusiastas, responsables y comprometidos con su desarrollo personal y de su entorno en bien de la sociedad, congruentes con su manera de ser, pensar y actuar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Visión -->
<div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col-auto">
                    <i class="bi bi-eye text-success" style="font-size: 2rem;"></i>
                </div>
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Visión
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <p class="text-muted">El Instituto Henry Wallon A.C. será una Institución Educativa de vanguardia, efectiva y en continua evolución, respondiendo a las demandas de la época actual y se distinguirá por su prestigio académico, por su historial, por sus resultados y logros en diferentes ámbitos y niveles, así como por su Modelo Educativo centrado en la formación integral de los alumnos renovándose cada vez que las exigencias de la época actual lo requiera brindando todas las oportunidades necesarias a los alumnos para desarrollarse con eficacia y valores.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Valores -->
<div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col-auto">
                    <i class="bi bi-heart text-warning" style="font-size: 2rem;"></i>
                </div>
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Valores
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <p>Responsabilidad, Actitud positiva, Formación de talento, Reinvención, Competencia, Impulso de habilidades</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


                    <!-- Content Row -->

                    <div class="row">

                     <!-- Image Container -->
<div class="col-xl-12 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Organigrama Instituto Henry Wallon</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <!-- Aquí se muestra la imagen -->
            <div class="text-center">
                <img src="{{ asset('assets/organigramaHW.png') }}" alt="Organigrama de Instituto Henry Wallon" style="max-width: 100%; height: auto;">
                <p class="text-muted mt-3">Organigrama Instituto Henry Wallon, 2024. www.henrywallon.edu.mx</p>
            </div>
        </div>
    </div>
</div><div class="row">
    <!-- Content Column -->
    <div class="col-lg-6 mb-4">
        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Macrolocalización</h6>
            </div>
          <br>
            <div class="row">
                <div class="col-md-8 text-center mb-3 mx-auto">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.650064309644!2d-97.35943668509314!3d19.836177986652263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c4f0c7e5f7b7a9%3A0x8e8c24fe2a4a6887!2sTeziutl%C3%A1n%2C%20Pue.%2C%20Mexico!5e0!3m2!1sen!2sus!4v1637711159206!5m2!1sen!2sus" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                   <br>
                   <br> <p class="text-muted">Ciudad de Teziutlán, Puebla. Google Maps</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Column -->
    <div class="col-lg-6 mb-4">
        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Microlocalización</h6>
            </div>
          <br>
            <div class="row">
                <div class="col-md-8 text-center mb-3 mx-auto">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.650064309644!2d-97.35943668509314!3d19.836177986652263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c4f0c7e5f7b7a9%3A0x8e8c24fe2a4a6887!2sCalle%20Vicente%20Guerrero%20506%2C%20Cruz%20Verde%2C%2073820%20Teziutl%C3%A1n%2C%20Pue.%2C%20Mexico!5e0!3m2!1sen!2sus!4v1637711159206!5m2!1sen!2sus"  width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <p class="text-muted">Calle Vicente Guerrero #506, Col. Cruz Verde, Teziutlán, Puebla. Google Maps</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Row -->
<div class="row">
    <!-- Image Container -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Servicios</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="row"> <!-- Asegúrate de agregar esta fila aquí -->
                    <!-- Gráficas y Signo Column -->
                    <div class="col-md-12 d-flex justify-content-center align-items-center"> <!-- Usa col-md-12 para ocupar todo el ancho -->
                        <!-- Bar Chart Column -->
                        <div class="col-md-6"> <!-- Usa col-md-6 para tomar la mitad del espacio -->
                            <div class="chart-bar">
                                <canvas id="myBarChart"></canvas>
                            </div>
                        </div>
                        <!-- Signo de más (+) -->
                        <div class="chart-sign-plus">
                        <h2>+</h2>
                        </div>
                        <!-- Donut Chart Column -->
                        <div class="col-md-6"> <!-- Usa col-md-6 para tomar la mitad del espacio -->
                            <div class="chart-pie pt-4">
                                <canvas id="myPieChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin de la fila -->
            </div>
        </div>
    </div>
</div>


<div class="row">
    <!-- Image Container -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Estrategias</h6>
            </div>
            <br>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Scripts -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/chart-area-demo.js"></script>
<script src="js/chart-pie-demo.js"></script>
<script src="js/chart-bar-demo.js"></script>

<div class="row align-items-center justify-content-center">
    <!-- Tarjeta Izquierda -->
    <div class="col-2 mb-4">
        <div class="card border-left-primary shadow py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                        <!-- Icono de Estrella para representar Excelencia Académica -->
                        <i class="bi bi-star-fill text-primary" style="font-size: 2rem;"></i>
                    </div>
                    <div class="col ml-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Excelencia Académica
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Signo de Igual -->
    <div class="col-auto">
        <h1>=</h1>
    </div>
    <!-- Primera Tarjeta Derecha -->
    <div class="col-2 mb-4">
        <div class="card border-left-success shadow py-2">
        <div class="text-center">
                <img src="{{ asset('assets/santilla.png') }}" alt="Organigrama de Instituto Henry Wallon" style="max-width: 30%; height: auto;">
                <p class="text-muted mt-3">Santillana Compartir</p>
            </div>
        </div>
    </div>
    <!-- Signo de Más -->
    <div class="col-auto">
        <h2>+</h2>
    </div>
    <!-- Segunda Tarjeta Derecha -->
    <div class="col-2 mb-4">
        <div class="card border-left-info shadow py-2">
        <div class="text-center">
                <img src="{{ asset('assets/myon.png') }}" alt="Organigrama de Instituto Henry Wallon" style="max-width: 30%; height: auto;">
                <p class="text-muted mt-3">MyOn</p>
            </div>
        </div>
    </div>
    <!-- Signo de Más -->
    <div class="col-auto">
        <h2>+</h2>
    </div>
    <!-- Tercera Tarjeta Derecha -->
    <div class="col-2 mb-4">
        <div class="card border-left-warning shadow py-2">
        <div class="text-center">
                <img src="{{ asset('assets/richmond.png') }}" alt="Organigrama de Instituto Henry Wallon" style="max-width: 45%; height: auto;">
                <p class="text-muted mt-3">Richmond Learning</p>
            </div>
        </div>
    </div>
    <!-- Signo de Más -->
    <div class="col-auto">
        <h2>+</h2>
    </div>
    <!-- Cuarta Tarjeta Derecha -->
    <div class="col-2 mb-4">
        <div class="card border-left-danger shadow py-2">
        <div class="text-center">
                <img src="{{ asset('assets/ecaluassi.png') }}" alt="Organigrama de Instituto Henry Wallon" style="max-width: 30%; height: auto;">
                <p class="text-muted mt-3">Ecaluaasi</p>
            </div>
        </div>
    </div>
</div>
</div>


<div class="row">
    <!-- Image Container -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Procesos</h6>
            </div>
            <br>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="card border-left-primary shadow py-2">
        <div class="card-body text-center">
          <i class="fas fa-chalkboard-teacher fa-5x text-primary"></i>
          <h5 class="mt-3">Procesos de enseñanza y aprendizaje</h5>
          <p class="mt-3">Incluye evaluación, ejecución y retroalimentación de programas educativos.</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card border-left-primary shadow py-2">
        <div class="card-body text-center">
          <i class="fas fa-file-alt fa-5x text-primary"></i>
          <h5 class="mt-3">Procesos administrativos</h5>
          <p class="mt-3">Gestión de matrícula, recursos humanos y económicos.</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card border-left-primary shadow py-2">
        <div class="card-body text-center">
          <i class="fas fa-book-reader fa-5x text-primary"></i>
          <h5 class="mt-3">Procesos de desarrollo curricular</h5>
          <p class="mt-3">Innovaciones en estrategias pedagógicas para el aprendizaje.</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card border-left-primary shadow py-2">
        <div class="card-body text-center">
          <i class="fas fa-comments fa-5x text-primary"></i>
          <h5 class="mt-3">Procesos de comunicación</h5>
          <p class="mt-3">Interacción entre estudiantes, tutores y docentes.</p>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div>


<div class="row">
    <!-- Image Container -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Área de oportunidad</h6>
            </div>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-2 text-center">
                        <i class="fas fa-bullseye fa-2x text-danger"></i>
                        <h5 class="text-danger">Objetivo General</h5>
                        <p>Desarrollar un marco integrado de gestión de TI.</p>
                    </div>
                    <div class="col-md-1 text-center align-self-center">
                        <i class="fas fa-arrow-down fa-2x text-secondary"></i>
                    </div>
                    <div class="col-md-2 text-center">
                        <i class="fas fa-tasks fa-2x text-warning"></i>
                        <h5 class="text-warning">Objetivos Específicos</h5>
                        <ul class="list-unstyled">
                            <li>Evaluar prácticas de gestión de TI.</li>
                            <li>Desarrollar políticas.</li>
                            <li>Establecer métricas de calidad.</li>
                        </ul>
                    </div>
                    <div class="col-md-1 text-center align-self-center">
                        <i class="fas fa-arrow-down fa-2x text-secondary"></i>
                    </div>
                    <div class="col-md-2 text-center">
                        <i class="fas fa-expand-arrows-alt fa-2x text-success"></i>
                        <h5 class="text-success">Alcances</h5>
                        <p>Guía para la gestión de recursos TI.</p>
                    </div>
                    <div class="col-md-1 text-center align-self-center">
                        <i class="fas fa-arrow-down fa-2x text-secondary"></i>
                    </div>
                    <div class="col-md-2 text-center">
                        <i class="fas fa-ban fa-2x text-info"></i>
                        <h5 class="text-info">Limitaciones</h5>
                        <p>Acceso restringido a información, falta de infraestructura TI.</p>
                    </div>
                    <div class="col-md-1 text-center align-self-center">
                        <i class="fas fa-arrow-down fa-2x text-secondary"></i>
                    </div>
                    <div class="col-md-2 text-center">
                        <i class="fas fa-border-style fa-2x text-primary"></i>
                        <h5 class="text-primary">Delimitaciones</h5>
                        <p>Centrado en la preparatoria del Instituto.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        </section>

        
    </main>
                    
<script>
    $(document).ready(function() {
        // Oculta inicialmente el contenido de los párrafos dentro de las tarjetas
        $('.card-body .text-gray-800 p').hide();

        // Define la acción cuando el mouse entra sobre el cuerpo de la tarjeta
        $('.card-body').on('mouseenter', function() {
            // Encuentra el párrafo dentro del contexto de la tarjeta actual
            const $paragraph = $(this).find('.text-gray-800 p');
            // Establece un retraso antes de mostrar el párrafo
            setTimeout(function() {
                $paragraph.slideDown();
            }, 500); // Retraso de 500ms
        });

        // Define la acción cuando el mouse sale del cuerpo de la tarjeta
        $('.card-body').on('mouseleave', function() {
            // Encuentra el párrafo dentro del contexto de la tarjeta actual y lo oculta
            $(this).find('.text-gray-800 p').slideUp();
        });
    });


    
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts1.js"></script>

@endsection
