<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel samaros</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

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
    .ofertas
    {
        float: left;
        margin: 15px;
       -webkit-transition: margin 0.5s ease-out;
       -moz-transition: margin 0.5s ease-out;
       -o-transition: margin 0.5s ease-out;
    }
    .ofertas:hover{margin-top: 2px;}

    </style>
    </head>

    <body>
     
    <?php
       include('barra.php');
    ?>

    <hr>
    <section>
       
    <!-- Slide de imagenes -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"><!-- Contenedor principals de las imagenes -->
        <div class="carousel-inner" id> <!-- Contenedor interno -->
            <div class="carousel-item active"> <!-- imagen 1 -->
                <img src="i1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item"> <!-- imagen 2 -->
                <img src="i2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item"> <!-- imagen 3 -->
                <img src="i3.jpg" class="d-block w-100">
            </div>
           
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            
        </div>
    </div>
    <section style="background:white; text-align: center">
        <br><br><hr>
        <h2 style ="color:#1bb8a9; font-size: 50px;">Bienvenidos al Hotel <br> Samaros</h2><br><br>
        <p style ="color:#108f73; font-size: 19px;">Encontrar ese color perfecto con nuestro selector de color y descubrir bellas armonías de color, tintes, matices y tonos; códigos de color de entrada Hex, los valores RGB y HSL, y generar HTML, CSS y estilos SCSS.Encontrar ese color perfecto con nuestro selector de color y descubrir bellas armonías de color, tintes, matices y tonos; códigos de color de entrada Hex, los valores RGB y HSL, y generar HTML, CSS y estilos SCSS.</p> <hr><br>
        
        <p style ="color:black;"></p>
        
    </section>
        <!-- Fin del slide -->


        <!-- Elemento para mostrar los cuadros de imagenes -->

        <div class="container p-5">
            <div class="row">

                <!-- Crear tres columnas -->
                <div class="col-lg-3"> <!-- Columan 1 -->
                    <div class="card" style="width: 18rem;">
                        <img src="h1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">SUIT</h5>
                          <p class="card-text">son espaciosas, de hasta 58 metros cuadrados (757 pies cuadrados). Cada suite puede acomodar hasta tres adultos, o incluso familias de dos adultos con dos niños, y puede tener vistas a la selva, el río, el mar o la playa. Dependiendo de la categoría</p>
                          <a href="habitaciones.html" class="btn btn-primary">Visitar habitacion</a>
                        </div>
                      </div>
                </div>
                
                <div class="col-lg-3"> <!-- Columan 2 -->
                    <div class="card" style="width: 18rem;">
                        <img src="h2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">SUIT JUNIOR</h5>
                          <p class="card-text">Con 126 metros cuadrados (1,356 pies cuadrados) de espacio, las junior suites del Hotel Xcaret México son ideales para los huéspedes que buscan espacios más grandes, con áreas que lo hacen sentir como en casa, incluida una amplia terraza para relajarse mientras admira las vistas privilegiadas de la selva, el río o el mar. Las junior suites pueden incluir:</p>
                          <a href="habitaciones.html" class="btn btn-primary">Visitar habitacion</a>
                        </div>
                      </div>
                </div>
                
                <div class="col-lg-3"> <!-- Columan 3 -->
                    <div class="card" style="width: 18rem;">
                        <img src="h3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">MASTER SUITES </h5>
                          <p class="card-text">son las habitaciones más equipadas y espaciosas del hotel, que abarcan hasta 230 metros cuadrados (2,475 pies cuadrados). Todos los alojamientos ofrecen impresionantes vistas frontales del océano y pueden acomodar hasta cinco personas. Estas exclusivas habitaciones </p>
                          <a href="habitacion.html" class="btn btn-primary">Visitar habitacion</a>
                        </div>
                      </div>
                </div>

                <div class="col-lg-3"> <!-- Columan 4 -->
                    <div class="card" style="width: 18rem;">
                        <img src="h4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Simple</h5>
                          <p class="card-text">Una habitacion comoda</p>
                          <a href="habitacion.html" class="btn btn-primary">Visitar habitacion</a>
                        </div>
                      </div>
                </div>

            </div>
        </div>

    </section>

    <section style="text-align: center; background: #35b3a7; color:white; font-family: 'Helvetica'; padding: 30px;">
        <div class ="row">
        <div class ="col-4">
        <h2>El HOTEL</h2><br>
        <p align="justify" style ="font-size: 130%;">
        Las caletas, los ríos, las cuevas y la selva se hacen presentes a lo largo del resort, donde todo fluye bajo el principio de la sostenibilidad. La experiencia dentro del hotel se conforma por:<br><br>
        ° Playas de arena blanca<br>
        ° Ríos, caletas y playones<br>
        ° Albercas infinity<br>
        ° Senderos y circuito de entrenamiento funcional en la selva<br>
        ° Capilla católica con vista panorámica<br>
        ° Club de niños y club familiar<br>
        ° Centro de Convenciones y espacios para eventos y reuniones<br>
        ° Canchas de tenis y pádel<br>
        ° Gimnasios<br>
        ° Boutiques<br>
        ° Spa de clase mundial<br>
        ° Experiencias gastronómicas por celebrity chefs</p><br><br>
        </div>
        <div class ="col-8">
        <img  style ="width:98%; height:65;" src="https://hotelsotavento.info/wp-content/uploads/2021/01/sotavento2-1.jpg">
        </div>
        </div>

    </section>
    
    <div style="height: 100px"></div>
    
    <section style="background:white;">

        <h2 style ="text-align: center;">Conoce todas nuestras ofertas</h2>
        <p style ="color: #35b3a7; font-size: 40px; text-align: center;">____________________________________</p>

         <div class="container p-5">
            <div class="row">

                <div class="col-lg-3"> 
                    <div class="card" style="width: 20rem;">
                        <img class = "ofertas" src="https://th.bing.com/th/id/R.d0eff96267759212057c5b3f22da024b?rik=bDmE19yO%2bLrqbA&riu=http%3a%2f%2fs3.amazonaws.com%2fcdn.precioyviajes.com%2fdocuments%2fLandingPageDealsHome%2f17%2f02%2f21%2fuu9f72s7xtqtj90wap37_or.jpg&ehk=jdVK7Kvje7Lf%2flkCvHnuKzBkzhmSleMAg14urMbxscM%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="...">
                    </div>
                </div>
                
                 <div class="col-lg-3">
                    <div class="card" style="width: 20rem;">
                        <img class= "ofertas" src="https://th.bing.com/th/id/R.105d306c4cabd8a0cc0bdbeea78443d8?rik=kB3ZIgBkuHFqPA&riu=http%3a%2f%2fs3.amazonaws.com%2fcdn.precioyviajes.com%2fdocuments%2fLandingPageDealsHome%2f18%2f04%2f17%2fyoqqgq7x1kfhd4ju7pim_or.jpg&ehk=BTSMiL9T23lAj%2bep1OBWVm196FLxS%2bOj%2bDmqYPPML2o%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="...">
                    </div>
                </div>
                
                 <div class="col-lg-3">
                    <div class="card" style="width: 20rem;">
                        <img class= "ofertas"src="https://th.bing.com/th/id/R.105d306c4cabd8a0cc0bdbeea78443d8?rik=kB3ZIgBkuHFqPA&riu=http%3a%2f%2fs3.amazonaws.com%2fcdn.precioyviajes.com%2fdocuments%2fLandingPageDealsHome%2f18%2f04%2f17%2fyoqqgq7x1kfhd4ju7pim_or.jpg&ehk=BTSMiL9T23lAj%2bep1OBWVm196FLxS%2bOj%2bDmqYPPML2o%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="...">
                    </div>
                </div>

                <div class="col-lg-3"> 
                    <div class="card" style="width: 20rem;">
                        <img class= "ofertas" src="https://th.bing.com/th/id/R.d0eff96267759212057c5b3f22da024b?rik=bDmE19yO%2bLrqbA&riu=http%3a%2f%2fs3.amazonaws.com%2fcdn.precioyviajes.com%2fdocuments%2fLandingPageDealsHome%2f17%2f02%2f21%2fuu9f72s7xtqtj90wap37_or.jpg&ehk=jdVK7Kvje7Lf%2flkCvHnuKzBkzhmSleMAg14urMbxscM%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="...">
                    </div>
    

            </div>
        </div>
       
    </section>

    <div style="height: 100px"></div>
    <hr style="color:blue; ">
    <section>
        <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=Mexico%20,%20Rayon%20chiapas+(Mi%20nombre%20de%20egocios)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/car-satnav-gps/"></iframe>
    </section>


    <footer class="container-fluid bg-light text-center p-3">
        <p>Todos los derechos reservados 2022</p>
        <img src="facebook.png" alt ="">
        <img src ="sobre.png" alt ="">
        <img src ="whatsapp.png" alt ="">
        
        <i class='fab fa-whatsapp' style='font-size:24px'></i>

    </footer>


</body>
</html>