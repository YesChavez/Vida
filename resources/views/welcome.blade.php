<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vida+</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f8f8f8;
            color: #212121;
        }

        header {
            background-color: #e30613;
            color: white;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin-bottom: 0;
        }

        .main-menu {
            background-color: #004aad;
            text-align: center;
            padding: 10px;
        }

        .main-menu ul {
            list-style: none;
            padding: 0;
        }

        .main-menu ul li {
            display: inline;
            margin: 0 15px;
        }

        .main-menu ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
        }

        .main-menu ul li a:hover {
            text-decoration: underline;
        }

        main {
            padding: 20px;
        }

        .section {
            margin-bottom: 40px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #e30613;
            margin-bottom: 15px;
        }

        ul {
            list-style: disc;
            padding-left: 20px;
        }

        footer {
            background-color: #737373;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>
<body style="background-color: #edbea4;">


        <!-- Bienvenida y logo -->
        <div class="row">
            <div class="col-12 text-center">
                <p class="text-muted" style="font-size: 4.5rem;">Bienvenido a</p>
            </div>
        </div>

        <div class="row align-items-center">
            <!-- Sección izquierda con logo y frase -->
            <div class="col-md-6 d-flex flex-column align-items-center justify-content-center">

                <h1 class="mt-3" style="font-size: 7rem;"><img src="{{ asset('images/logo.png') }}" alt="Logo Vida+" class="img-fluid" style="max-width: 350px;">VIDA +</h1>
                <p class="lead text-center mt-2" style="font-size: 2rem;">Siempre listo para salvar</p>

                <!-- Botón de comenzar -->
                <a href="#" class="btn btn-lg mt-4" style="background-color: #b1424e; color: white;">
                    Comenzar <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <!-- Sección derecha con imagen principal -->
            <div class="col-md-6 d-flex justify-content-center">
                <img src="{{ asset('images/imag_bienvenido.png') }}" alt="Imagen de primeros auxilios" class="img-fluid" style="max-width: 1135px;">
            </div>
        </div>

        <!-- Icono de accesibilidad en la esquina superior derecha -->
        <div class="position-fixed top-0 end-0 p-4">
            <a href="#" aria-label="Accesibilidad">
                <img src="{{ asset('images/accesibilidad.png') }}" alt="Icono de accesibilidad" style="width: 60px; height: 60px;">
            </a>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
