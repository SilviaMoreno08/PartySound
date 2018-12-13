<!DOCTYPE html>
<html>
<head>
    <meta lang="es">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/js-image-slider.css">
    <link rel="stylesheet" type="text/css" href="css/js-image-slider-img.css">
    <link rel="stylesheet" type="text/css" href="css/generic.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/mcVideoPlugin.js"></script>
    <script type="text/javascript" src="js/js-image-slider.js"></script>
    <script type="text/javascript" src="js/js-image-slider-img.js"></script>
    
    
    
	<title>PartySound</title>


</head>
<body>
    <!-- Dropdown Structure -->

  <nav>
    <div class="nav-wrapper black-text lime darken-2">
      <a href="#!" class="brand-logo responsive-img"><img src="images/partysound.png" class="responsive-img"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="inicio.php">Inicio</a></li>
        <li><a href="artistas.php?pagina=p1">Artistas</a></li>
        <li><a href="quienes-somos.html">¿Quienes somos?</a></li>
        <li><a href="contacto.php">Contacto</a></li>
          <img src="images/Artista1.jpg" class="circle responsive-img" style="width:65px; height:60px;">
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Perfil<i class="material-icons right">arrow_drop_down</i></a></li>
          <ul id='dropdown1' class='dropdown-content'>
            <li><a href="#!">Configuración</a></li>
            <li><a href="#!">Contratos</a></li>
            <li class="divider"></li>
            <li><a href="#!">Cerrar sesión</a></li>
          </ul>
      </ul>
      <!----------MOBILE---------->
      <ul class="side-nav" id="mobile-demo">
        <li class="active"><a href="inicio.html">Inicio</a></li>
        <li><a href="artistas.php?pagina=p1">Artistas</a></li>
        <li class="active"><a href="quienes-somos.html">¿Quienes somos?</a></li>
        <li><a href="contacto.html">Contacto</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Perfil<i class="material-icons right">arrow_drop_down</i></a></li>
              <ul id='dropdown2' class='dropdown-content'>
                <li><a href="#!">Configuración</a></li>
                <li><a href="#!">Contratos</a></li>
                <li class="divider"></li>
                <li><a href="#!">Cerrar sesión</a></li>
              </ul>
      </ul>
    </div>
  </nav>

  <?php
  
     include 'Conexion.php';

      $artist = $_GET['artist'];
      session_start();
    /*session is started if you don't write this line can't use $_Session  global variable*/
    $_SESSION['artist']=$artist;
            

      $consulta = "SELECT nom_grupo, genero, trayectoria, foto FROM grupo WHERE id_grupo = $artist";
      
        
        if ($resultado = $conn->query($consulta)) {
          
        /* obtener el array de objetos */
          while ($fila = $resultado->fetch_row()) {
            
             $nombre= utf8_encode($fila[0]);
             $genero= utf8_encode($fila[1]);
             $trayectoria= utf8_encode($fila[2]);
             $foto = $fila[3];

             
 
                        
        }
       }
       
         $resultado->close();


    /* cerrar la conexión */
    $conn->close();

  
?> 
  <!--///////////CONTENIDO //////////////////-->

  	<div class="contenido">
        <div class="row">
            <div class="col l6">
                <div class="foto-perfil">
                <?php
                    echo '<img src="grupos/'.$foto.'" class="responsive-img card">';
                ?>
                </div>
            </div>
            <div class="col l4">
                <div style="color:black" class="justificar">
                <?php
                    echo '<b>Nombre: </b>'.$nombre.'<br><br>';
                    echo '<b>Género: </b>'.$genero.'<br><br>';
                    echo '<b>Trayectoria: </b><br><br>'.$trayectoria.'<br>';
                    
                ?>
                </div>
            </div>
            
            <div class="col l2">
                <a href="contacto.php" class="waves-effect waves-light btn-large btn2  black-text lime center"><i class="material-icons left"></i><b>Contratar</b></a>
            </div>
        </div>
        
        <div class="row">
            <div class="col l6">
                Redes Sociales
                <div class="row">
                <a href="#"><img src="images/facebook-4-48.png"></a>
                <a href="#"><img src="images/twitter-4-48.png"></a>
                <a href="#"><img src="images/instagram-4-48.png" ></a>
                
                </div>
            </div>
            <div class="col l4">
                Calificación
                 <div class="star-rating">
                    <a href="#"><h3>&#9733;</h3></a>
                    <a href="#"><h3>&#9733;</h3></a>
                    <a href="#"><h3>&#9733;</h3></a>
                    <a href="#"><h3>&#9733;</h3></a>
                    <a href="#"><h3>&#9733;</h3></a>
                </div>
            </div>
        </div>
        <!--/////////////////////////VIDEO/////////////-->
        <div class="row">
            <div class="col l6">
                <div class="row">
                    <div class="left"><h5>Videos</h5></div>
                </div>
                <!--<div class="row">
                <div class="div1">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="" class="current">6</a>
                    <a href="#">7</a>
                    <a href="#">8</a>
                </div>
                
            </div>-->
                <div id="sliderFrame responsive-video">
                    <div id="slider">
                        <a href="http://www.menucool.com/video-slider">
                            <img src="images/slider/image-slider-1.jpg" alt="" />
                        </a>
                        <a class="video" href="http://vimeo.com/18560206">
                            <b data-src="images/slider/image-slider-2.jpg">Vimeo</b>
                        </a>
                        <a class="video" href="http://www.youtube.com/watch?v=P0G_2tiivxE">
                            <b data-src="images/slider/image-slider-3.jpg">Image Slider</b>
                        </a>
                        <a class="lazyImage" href="images/slider/image-slider-4.jpg">Slide 4</a>
                        <a class="video" href="http://vimeo.com/18867695" data-autovideo="1">
                            <b data-src="images/slider/image-slider-5.jpg">Slide 5</b>
                        </a>
                </div>
            </div>
            </div>


        
    <!--////////////////////Imagenes/////////////////-->
    <div class="col l6">
        <div id="sliderFrame-img">
            <div id="slider-img">
                <a href="">
                    <img src="images/slider/image-slider-1.jpg" alt="" />
                </a>
                <a class="lazyImage" href="images/slider/image-slider-2.jpg"></a>
                <a href="">
                    <b data-src="images/slider/image-slider-3.jpg" data-alt="#htmlcaption3"></b>
                </a>
                <a class="lazyImage" href="images/slider/image-slider-4.jpg" ></a>
                <a class="lazyImage" href="images/slider/image-slider-5.jpg" ></a>
                <a class="lazyImage" href="images/slider/image-slider-1.jpg" ></a>
                <a class="lazyImage" href="images/slider/image-slider-2.jpg" ></a>
                <a class="lazyImage" href="images/slider/image-slider-3.jpg" ></a>
            </div>
            <div style="display: none;">
                <div id="htmlcaption3">
                    <em></em>  <a href="#"></a>.
                </div>
                <div id="htmlcaption5">
                    
                </div>
            </div>

            <!--thumbnails-->
            <div id="thumbs-img">
                <div class="thumb-img"><img src="images/slider/thumb1.jpg" /></div>
                <div class="thumb-img"><img src="images/slider/thumb2.jpg" /></div>
                <div class="thumb-img"><img src="images/slider/thumb3.jpg" /></div>
                <div class="thumb-img"><img src="images/slider/thumb4.jpg" /></div>
                <div class="thumb-img"><img src="images/slider/thumb5.jpg" /></div>
                <div class="thumb-img"><img src="images/slider/thumb1.jpg" /></div>
                <div class="thumb-img"><img src="images/slider/thumb2.jpg" /></div>
                <div class="thumb-img"><img src="images/slider/thumb3.jpg" /></div>
            </div>
        </div>
        </div>
    </div>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

 <div class="row">
            <div class="col l6">
                <div class="row">
                    <div class="left"><h5>Comentarios</h5></div>
                </div>
                <div class="row">
               
               <div class="fb-comments" data-href="http://localhost/partysound/perfil.php?artist=1" data-width="500" data-numposts="10"></div>
                  
                
                </div>
            </div>
        </div>
    

  <!--/////////////FOOTER/////////////-->


        
  <script>
         $(".button-collapse").sideNav();
      
        $('.dropdown-button').dropdown('open');
       $('.dropdown-button').dropdown('close');
      
      
        
     
        
  </script>



</body>
</html>