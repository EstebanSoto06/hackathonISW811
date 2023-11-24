<!DOCTYPE html> 
<html lang="es"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Mini Hackathon</title> 
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

        form {
            max-width: 400px;
            margin: 40px auto; /* Añadido para centrar el formulario en la página */
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #3498db;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .button {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
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
    <h1>¡BIENVENIDOS AL MINI HACKATHON ISW811!</h1> 
    <p>Proyecto hecho por Esteban Soto y Diego Umaña.</p> 
</header> 
 
<section id="features"> 
    <h2>Características del proyecto:</h2> 
    <ul> 
        <li>Registro e inicio de sesión de usuarios.</li> 
        <li>Base de datos en linea.</li>
        <li>Hosteo en un servicio gratis.</li> 
        <li>Uso de un servicio de base de datos en linea gratis.</li> 
    </ul> 
</section> 
 

<form action="/logout" method="POST">
    @csrf
    <button type="submit">Salir</button>
</form>

 
<footer> 
    <p>&copy; 2023 Social Hub Manager. Todos los derechos reservados.</p> 
</footer> 
</body> 
</html>