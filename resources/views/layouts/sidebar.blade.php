<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Título Aquí</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome para íconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Estilos CSS personalizados -->
    <style>
      /* Mejoras en los estilos */
      body {
        padding-top: 56px; /* Espacio para la barra de navegación fija */
      }

      .navbar-brand {
        font-weight: bold; /* Fuente en negrita */
        color: #007bff !important; /* Color personalizado */
      }

      .navbar {
        background-color: #fff !important; /* Fondo blanco con opacidad */
        box-shadow: 0 2px 4px rgba(0,0,0,.1); /* Sombra sutil */
      }

      .nav-link {
        color: #007bff !important; /* Color de los enlaces */
        margin-right: 10px; /* Espacio entre enlaces */
        transition: color 0.3s; /* Transición suave del color */
      }

      .nav-link:hover {
        color: #ff5500 !important; /* Cambio de color al pasar el ratón */
        text-decoration: none; /* Quitar subrayado al pasar el ratón */
      }

      #contenido {
        background-color: #f8f9fa; /* Color de fondo */
        padding: 20px; /* Espaciado interno */
        margin-top: 20px; /* Margen superior */
        border-radius: 10px; /* Bordes redondeados */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra */
      }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom fixed-top">
  <div class="container">
  <a class="navbar-brand" href="#"><img src="{{ asset('assets/henryWallon.png') }}" style="max-width: 30%; height: auto;" alt="Henry Wallon"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Entorno <br> Organizacional</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Procesos <br> de la organización</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Funciones, <br> roles y procesos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Conclusión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- Bootstrap JS y jQuery al final del body para una carga más rápida -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
