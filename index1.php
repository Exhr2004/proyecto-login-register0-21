<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - MagtimusPro</title>

    <link href="stylo.css" rel="stylesheet">


    <link rel="stylesheet" href="css.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/conexionbasededatosbe.php" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico">
                        <input type="password" placeholder="Contraseña">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="scrip.js"></script>
</body>
</html> 