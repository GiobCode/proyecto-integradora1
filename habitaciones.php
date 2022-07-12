<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel samaros</title>
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
        color: #FFF;
        display: block;
        font-size: 10pt;
        font-family: 'GothamBook';
        padding: 13px 30px;
        text-transform: uppercase;
        letter-spacing: 5px;
        transition: background .5s;
        border-right: 1px solid #000000;
    }
    
    #carouselExampleControls1,#carouselExampleControls2,#carouselExampleControls3
    {
        padding:21%;
       /* background:white;*/
        width: 100%;
        height: 400px;
    }

    .informacion
    {
        background:white;
    }
 

    </style>
    </head>

    <body>
    <?php
      include('barra.php');
    ?>
    
    <section>
    <hr>
    <h2 style ="color: black;">Las mejores habitaciones para tu comodidad</h2>
    </hr>
    <!-- Slide de imagenes -->
  

     <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" id ="pa" style ="box-shadow: 7px 13px 37px #25032E;"> <!-- Contenedor interno -->
            <div class="carousel-item active"> <!-- imagen 1 -->
                <img src="https://www.universe-magic.com/images/2016/06/1016_2_or_1465648674.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item"> <!-- imagen 2 -->
                <img src="https://www.universe-magic.com/images/2016/06/1016_10_or_1465648683.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item"> <!-- imagen 3 -->
                <img src="h3.jpg" class="d-block w-100">
            </div>
           
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
        </div>

        <div class ="informacion" style="box-shadow: 7px 13px 37px #25032E;">


         <hr>
         <h3 style="text-align: center; color :#4C1044; font-family: Didot; font-size: 40px;">DOBLE</h3>
         <p style ="font-family:;padding: 10px; color:#362C04;">Una habitación coloreada por el verde de la selva maya y nuestros jardines. La vista se complementa con su diseño mexicano contemporáneo.
         </p>
         
         <hr>
         <h2 style="text-align:center; color :#4C1044;  font-family: Didot;">LA HABITACION INCLUYE </h2>
         
         <p style ="padding: 15px;">
           1.- Una cama king size o dos camas dobles (sujeto a disponibilidad)<br>
           2.- Sofá cama con mesa de centro<br>
           3.-Comedor para dos personas<br>
           4.-Jacuzzi<br>
           5.-Baño completo All View con WC separado<br>
           6.-Ducha de lluvia y ducha de teléfono<br>
           7.-Teléfono en WC<br>
           8.-Amenidades orgánicas premium<br>
           9.-Tocador<br>
           10.- Secadora de cabello profesional<br>
           11.-Espejo de aumento iluminado (espejo vanidad)<br>
         </p>
         <hr>

        <h3 style="font-size: 15px; text-align: center;">PRECIO DE HABITACION POR NOCHE : 1500</h3>

        <hr>
        <div style ="height: 50px; text-align: center; background:white;width: 100%;
        height: 70px;">
        <button style  ="
        background: #1f53c5;
        border: none;
        padding: 11px;
        color: white;
        margin: 8px 0;
       font-size: 16px;
        "href="reservaciones.html">Reservar</button>

        </div>

       </div>

    </div>


    <div style="height: 1000px;"></div>

     <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" id ="pa" style ="box-shadow: 7px 13px 37px #25032E;"> <!-- Contenedor interno -->
            <div class="carousel-item active"> <!-- imagen 1 -->
                <img src="https://www.universe-magic.com/images/2016/06/1016_2_or_1465648674.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item"> <!-- imagen 2 -->
                <img src="https://www.universe-magic.com/images/2016/06/1016_10_or_1465648683.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item"> <!-- imagen 3 -->
                <img src="h3.jpg" class="d-block w-100">
            </div>
           
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
        </div>

        <div class ="informacion" style ="box-shadow: 7px 13px 37px #25032E;">


         <hr>
         <h3 style="text-align: center; color :#4C1044; ; font-family: Didot; font-size: 40px;">TRIPLE</h3>
        
         <p style ="font-family:; padding: 10px;">Una habitación coloreada por el verde de la selva maya y nuestros jardines. La vista se complementa con su diseño mexicano contemporáneo.
         </p>
         
         <hr>
         <h2 style="text-align: center; font-family: Didot;">LA HABITACION INCLUYE </h2>
         
         <p style ="padding: 15px;">
           1.- Una cama king size o dos camas dobles (sujeto a disponibilidad)<br>
           2.- Sofá cama con mesa de centro<br>
           3.-Comedor para dos personas<br>
           4.-Jacuzzi<br>
           5.-Baño completo All View con WC separado<br>
           6.-Ducha de lluvia y ducha de teléfono<br>
           7.-Teléfono en WC<br>
           8.-Amenidades orgánicas premium<br>
           9.-Tocador<br>
           10.- Secadora de cabello profesional<br>
           11.-Espejo de aumento iluminado (espejo vanidad)<br>
         </p>
         <hr>

        <h3 style="font-size: 15px; text-align: center;">PRECIO DE HABITACION POR NOCHE : 1500</h3>

        <hr>

        <div style ="height: 50px; text-align: center; background:white;width: 100%;
        height: 70px;">
        <button style  ="
        
        background: #1f53c5;
        border: none;
        padding: 11px;
        color: white;
        margin: 8px 0;
       font-size: 16px;
       "
        >Reservar</button>

        </div>

       </div>

    </div>
    
    <div style="height: 1000px;"></div>

     <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" id ="pa" style ="box-shadow: 7px 13px 37px #25032E;"> <!-- Contenedor interno -->
            <div class="carousel-item active"> <!-- imagen 1 -->
                <img src="https://www.universe-magic.com/images/2016/06/1016_2_or_1465648674.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item"> <!-- imagen 2 -->
                <img src="https://www.universe-magic.com/images/2016/06/1016_10_or_1465648683.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item"> <!-- imagen 3 -->
                <img src="h3.jpg" class="d-block w-100">
            </div>
           
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
        </div>

        <div class ="informacion" style ="box-shadow: 7px 13px 37px #25032E;" >


         <hr>
         <h3 style="text-align: center; color :#4C1044; font-family: Didot; font-size: 40px;">SUIT</h3>
        
         <p style ="font-family:; padding: 10px;">Una habitación coloreada por el verde de la selva maya y nuestros jardines. La vista se complementa con su diseño mexicano contemporáneo.
         </p>
         
         <hr>
         <h2 style="text-align: center; font-family: Didot;">LA HABITACION INCLUYE </h2>
          <p style ="padding: 15px;">
           1.- Una cama king size o dos camas dobles (sujeto a disponibilidad)<br>
           2.- Sofá cama con mesa de centro<br>
           3.-Comedor para dos personas<br>
           4.-Jacuzzi<br>
           5.-Baño completo All View con WC separado<br>
           6.-Ducha de lluvia y ducha de teléfono<br>
           7.-Teléfono en WC<br>
           8.-Amenidades orgánicas premium<br>
           9.-Tocador<br>
           10.- Secadora de cabello profesional<br>
           11.-Espejo de aumento iluminado (espejo vanidad)<br>
         </p>
         <hr>
         

        <h3 style="font-size: 15px; text-align: center;">PRECIO DE HABITACION POR NOCHE : 1500</h3>

        <hr>

        <div style ="height: 50px; text-align: center; background:white;width: 100%;
        height: 70px;">

        <button style  ="
        
        background: #1f53c5;
        border: none;
        padding: 11px;
        color: white;
        margin: 8px 0;
       font-size: 16px;
        ">Reservar</button>

        </div>

       </div>

    </div>
    
    <div style="height: 1000px;"></div>
               
      
    </section>
  
    <div style="height: 700px;"></div>
    <footer class="container-fluid bg-light text-center p-3">
        <p>Todos los derechos reservados 2022</p>
        <img src="facebook.png" alt ="">
        <img src ="sobre.png" alt ="">
        <img src ="whatsapp.png" alt ="">
        
        <i class='fab fa-whatsapp' style='font-size:24px'></i>

    </footer>


</body>
</html>