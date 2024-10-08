<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login y Registro con HTML5 y CSS3</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
    <main>
        <article>
            <section>
                <form method="POST" id="register">
                    <h1>Registrate</h1>
                    <img src="icons-social/facebook.svg" title="Inicia Sesion con Facebook" alt="Inicia Sesion con Facebook">
                    <img src="icons-social/google.svg" title="Inicia Sesion con Google" alt="Inicia Sesion con Google">
                    <img src="icons-social/twitter.svg" title="Inicia Sesion con Twitter" alt="Inicia Sesion con Twitter">
                    <img src="icons-social/github.svg" title="Inicia Sesion con GitHub" alt="Inicia Sesion con GitHub">

                    <input type="text" name="name" placeholder="Nombre" required><br/>
                    <input type="text" name="surname" placeholder="Apellidos" required><br/>
                    <input type="email" name="email" placeholder="Correo electr&oacute;nico" required><br/>
                    <input type="password" name="password" placeholder="Contrase&ntilde;a" required><br/>
                    <input type="password" name="password2" placeholder="Repite la Contrase&ntilde;a" required><br/>
                    <input type="submit" name="Register"> <input type="reset" >
                    <p>¿Ya tienes cuenta?</p>
                    <p>
                        <a href="index.php">Inicia Sesión</a>
                    </p>
                </form>
                <?php
                include "registrar.php";
                ?>
            </section>
        </article>
    </main>
</body>
</html>
