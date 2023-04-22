<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Escolar</title>
    <link rel="stylesheet" href="css/registro.css">
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
    <div class="contenedor"> 
        <div class="form_group-1">
            <input type="input" class="textbox-1" placeholder="Nombres">
            <label for="name" class="textbox-label-1">Nombres</label>
        </div>
        <div class="form_group-1">
            <input type="input" class="textbox-1" placeholder="Apellidos">
            <label for="name" class="textbox-label-1">Apellidos</label>
        </div>               
        <div class="form_group-1">
            <input type="input" class="textbox-1" placeholder="Correo">
            <label for="name" class="textbox-label-1">Correo</label>
        </div>
        <div class="form_group-1">
            <input type="input" class="textbox-1" placeholder="Confirmar Correo">
            <label for="name" class="textbox-label-1">Confirmar Correo</label>
        </div>
        <div class="form_group-1">
            <input type="password" class="textbox-1" placeholder="Contraseña">
            <label for="name" class="textbox-label-1">Contraseña</label>
        </div>
        <div class="form_group-1">
            <input type="password" class="textbox-1" placeholder="Confirmar Contraseña">
            <label for="name" class="textbox-label-1">Confirmar Contraseña</label>
        </div>
        <div id="send">
            <button class="buttom"> Enviar</button>
        </div>
    </div>
</body>
</html>