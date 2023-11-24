<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Hub Manager</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #c0a0c3;
            color: #fff;
            text-align: center;
            padding: 50px 0;
        }

        header h1 {
            font-size: 2em;
        }

        section {
            max-width: 800px;
            margin: 40px auto;
            text-align: center;
        }

        section h2 {
            color: #000000;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
        }

        #cta {
            background-color: #ecf0f1;
            padding: 50px 0;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #c0a0c3;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        

        footer {
            background-color: #8f7193;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<header>
    <h1>MINI HACKATHON ISW811</h1>
    <p>Proyecto rápido hecho por Esteban Soto y Diego Umaña.</p>
</header>

<section id="features">
    <h2>Características</h2>
    <ul>
        <li>Registro e inicio de sesión de usuarios.</li>
        <li>Hosteo en un servicio gratis.</li>
        <li>Uso de un servicio de base de datos en linea gratis.</li>
    </ul>
</section>

<section id="cta">
    <h2>Registro</h2>
    <p>Regístrate y comprueba si funciona.</p>
    <a href="register" class="button">Regístrate</a>
</section>

<section id="cta">
    <h2>¿Ya tienes cuenta?</h2>
    <p>¡Inicia sesión!.</p>
    <a href="login" class="button">Iniciar sesión</a>
</section>

<footer>
    <p>&copy; 2023 Social Hub Manager. Todos los derechos reservados.</p>
</footer>
</body>
</html>