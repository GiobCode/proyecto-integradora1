<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones Hotel Samaros</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <style>

    body
    {
    background:#E3DAC9;
    color:black;
    }

    #boton1
    {
        background-image: url("https://www.flaticon.es/svg/vstatic/svg/3917/3917034.svg?token=exp=1656644382~hmac=882913a546a3350cb5f55605ccefc207");
    }

    .nav-item
    {
        color: black;
        display: block;
        font-size: 10pt;
        font-family: 'GothamBook';
        padding: 1px 30px;
        text-transform: uppercase;
        letter-spacing: 4px;
        transition: background .5s;
        border-right: 1px solid #000000;
    }
    

    </style>
    </head>

    <body>
     <?php
     include('barra.php');
     ?>
   
    <form  
  style =
  "
  width: 500px;
  padding: 30px;
  margin: auto;
  margin-top: 100px;
  border-radius: 4px;
  font-family: 'calibri';
  color: black;
  background:white;
  box-shadow: 7px 13px 37px #000;
  "
  action="/action_page.php">

 <h2 style ="text-align: center;">Formulario de registro</h2>
  <div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" id="nombre">
  </div>
  <div class="form-group">
    <label for="apellidos">Apellidos:</label>
    <input type="text" class="form-control" id="apellidos">
  </div>
  <div class="form-group">
    <label for="email">Correo:</label>
    <input type="email" class="form-control" id="email">
  </div>
   <div class="form-group">
    <label for="pass">Nueva contraseña:</label>
     <input type="password" class="form-control" id="pass">
  </div>
 
  <button style =
  "
  width: 100%;
  background: #35b3a7;
  border: none;
  padding: 12px;
  color: white;
  margin: 16px 0;
  font-size: 16px;
  " 
  type="submit" class="btn btn-default">Registrarse</button>
</form>

</body>

</html>