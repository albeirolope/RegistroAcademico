<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistroEscolar </title>
    <link rel="icon" href="Imagenes/logoA.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>        
        <nav id="nav-bar">
            <img id="img" src="Imagenes/logoA.png" alt="#">
            <ul id="nav-list">
              <li id="list"><a id="a" href="#">Inicio</a></li>
              <li id="list"><a id="a" href="#">Acerca de</a></li>
              <li id="list"><a id="a" href="#">Ayuda</a></li>
              <li id="list"><a id="a" href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>
    
        
  <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        Bienvenido RegistroEscolar
                    </div>
                    <form id="loginform" action="valida.php" method="POST">
                        <input type="text" name="usuario" placeholder="Usuario" required>
                        <input type="password" placeholder="Contraseña" name="password" required>
                        <button type="submit" title="Ingresar" name="Ingresar" >Login</button>
                    </form>
                    <div class="pie-form">
                        <a href="#">¿Perdiste tu contraseña?</a>
                        <a href="registro.php">¿No tienes Cuenta? Registrate</a>
                    </div>
                </div>
                <div class="inferior">
                    <a href="#">Volver</a>
                </div>
            </div>
    </div>
    
</body>
</html>