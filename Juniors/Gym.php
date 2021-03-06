
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Junniors Gym</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Gym.css">


  </head>
  <body>

    <?php

    $lista_servicios = array( );
    $horarioNormal = "";
    $horarioFin ="";
    $precio;
    $nombre_service = strtoupper("gym");
    $contador=0;

             include ("calis.php");
             $query="SELECT * FROM servicio";
             $resultado=$conexion->query($query);

             while ($row=$resultado->fetch_assoc()) {

               $lista_servicios[$contador] = $row['nombre'];
               $evaluar = strtoupper($row['nombre']);
               if ($nombre_service == $evaluar) {
                 $horarioNormal = $row['horarioNormal'];
                 $horarioFin = $row['horarioFin'];
                 $precio = $row['precio'];
               }

               $contador++;
        }

        $contador = 0;


?>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    			<a href="index.html" class="navbar-brand" id="titulo">Inicio</a>
    			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-Menu" aria-controls="navbar-Menu"	aria-expanded="false">
    					<span class="navbar-toggler-icon"></span>
    			</button>

        			<div class="collapse navbar-collapse" id="navbar-Menu">
        						<ul class="navbar-nav mr-auto">

                      <?php

                          for ($i=0; $i < count($lista_servicios); $i++) {


                       ?>


        										<li class="nav-item">
        											 <a href="<?php echo $lista_servicios[$i]; ?>.php" class="nav-link" id="inicio"><?php echo $lista_servicios[$i]; ?></a>
        										 </li>

                      <?php
                            }

                      ?>

                            <li class="nav-item">
                               <a href="conocenos.php" class="nav-link" id="conocenos">Conocenos</a>
                            </li>

        						</ul>

        			</div>
    </nav> <!--fin del menu-->


<!--Inicio del slide-->
    <div class="container-fluid">
      <div class="col-md-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner parrafos-carusel">
        <div class="carousel-item active">
          <img src="img/areaPierna.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block color-fondo" >
            <h5 style="font-size: 50px">¡¡ Vive la Experiencia !!</h5>
              <p>Se Parte de Junniors GYM.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/jaula.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block color-fondo">
            <h5 style="font-size: 50px"> ¡¡ Pruevanos !!</h5>
              <p>La mejores instalaciones.</p>
            </div>
        </div>
        <div class="carousel-item">
          <img src="img/areaPecho.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block color-fondo">
            <h5 style="font-size: 50px"> ¡¡ Conocenos !!</h5>
              <p>Los mejores aparatos.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
      </div>

    </div> <!--Fin del slide-->

      <div class="container-Horario container-fluid fondo-transparente">
        <div class="row">
                <div class="col-sm-2 mt-2">
                    <div class="card	bg-light">
                      <div class="card-header	bg-dark text-white text-uppercase">
                        Horarios

                      </div>

                      <div class="card-body">
                          <h5>Lunes - Viernes</h5>
                          <p> <?php echo $horarioNormal ?> </p>
                          <h5>Sabado</h5>
                          <p><?php echo $horarioFin; ?></p>
                          <h5>Domingo</h5>
                          <p><?php echo $horarioFin ?></p>
                      </div>
                    </div>


                    <div class="card	bg-light mt-5">
                      <div class="card-header	bg-dark text-white text-uppercase">
                        Precios

                      </div>

                      <div class="card-body">
                          <h5>Estudiante</h5>
                          <p><?php
                          $precio1 = $precio -100;
                          echo $precio1 ?></p>
                          <h5>General</h5>
                          <p><?php echo $precio ?></p>
                      </div>
                    </div>

                </div> <!--Fin del formulario Horario-->

                <div class="col-sm-10">
                  <div class="card border-dark mb-3 fondo-transparente" >
                      <div class="card-header" id ="info">Descripción</div>
                        <div class="card-body text-dark" >
                          <p class="card-text">
                            Se denomina gimnasio a un establecimiento en donde la gente se reúne para realizar actividad física.
                            Los gimnasios suelen disponer diversos elementos dispuestos para este fin como por ejemplo pesas, juegos
                            de poleas, cintas para correr, etc. Suelen tener también instructores que especifican que tipo de ejercicio
                            es el más recomendado para la situación de cada persona.
                          </p>
                            <br>
                            <h5 class="card-title" style="font-size:35px">Gym:</h5>
                              <p class="card-text">Contamos con los mejores aparatos del momento, todos hechos en fabrica, contamos con pesas, mancuernas,
                               bancos,diversas maquinas, escaladoras, caminadoras, barras ect.</p>

                               <h5 class="card-title">Entrenadores:</h5>
                                  <p class="card-text">Contamos con entreadores 100% capasidados para tu apollo.
                                  los culaes se encuentran en todo momento a tu disposicion.
                                 Tanbien contamos con entrenadores personalizados para que supervicen, formen y aprueven todo tu entrenamiento</p>
                                 <br>
                                   <h5 class="card-title">7 Beneficios de ir al gimnasio.:</h5>

                                 <p>
                                   1 Hacer ejercicio nos hace sentir bien.
                                 </p>
                                 <p>
                                   2 El ejercicio físico es un antidepresivo natural.
                                 </p>

                                 <p>
                                   3 El ejercicio regular nos proporciona más energía.
                                 </p>

                                 <p>
                                   4 El ejercicio te hará dormir mejor.
                                 </p>
                                 <p>
                                   5 Mejora los problemas de corazón.
                                 </p>

                                 <p>
                                   6 Refuerza tus músculos y huesos.
                                 </p>
                                 <p>
                                     7 El ejercicio disminuye el estrés.
                                 </p>

                          </div>
                  </div>

              </div>
      </div>
</div>
<!--Inicio del footer-->
      <footer>
        <div class="container-footer-all">

             <div class="container-body">

                 <div class="colum1">
                   <h1>Mas informacion de la compañia</h1>

                   <p>Somos un gimnasio de alto prestigio donde te
                      brindamos el mejor servicio, atención, seguridad y
                      responsabilidad con tu cuerpo. Contando con el mejor TEAM.
                    </p>

                 </div>

                 <div class="colum2">
                     <h1>Redes Sociales</h1>
                     <div class="row">
                         <img src="icon/facebook.png">
                         <a href="https://web.facebook.com/pg/Juniors-GYM-Morole%C3%B3n-334210720387183/posts/" style="color: white">
                           Junior's GYM #Moroleón.
                         </a>
                     </div>
                     <div class="row">
                         <img src="icon/instagram.png">
                         <a href="http://www.instagram.com/juniors_gym/"
                         style="color: white">Juniors_gym</a>
                     </div>
                 </div>

                 <div class="colum3">

                     <h1>Informacion Contacto</h1>

                     <div class="row2">
                         <img src="icon/house.png">
                         <label>Calle defensores de moroleon #4A
                           38800 Moroleón</label>
                     </div>

                     <div class="row2">
                         <img src="icon/smartphone.png">
                         <label>4451234512</label>
                     </div>

                     <div class="row2">
                         <img src="icon/contact.png">
                          <label>s16120271@alumnos.itsur.edu.mx</label>
                     </div>

                 </div>

             </div>

         </div>

         <div class="container-footer">
                <div class="footer">
                     <div class="copyright">
                         © 2019 Todos los Derechos Reservados | <a href="">ITSUR</a>
                     </div>

                     <div class="information">
                         <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                     </div>
                 </div>
               </div>

      </footer>

       <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
       <script type="text/javascript" src="js/bootstrap.min.js"> </script>

  </body>
</html>
