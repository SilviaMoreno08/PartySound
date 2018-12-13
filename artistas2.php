<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
	
	<title>PartySound</title>


</head>
<body>

  <nav>
    <div class="nav-wrapper  lime ">
      <a href="#!" class="brand-logo responsive-img"><img src="images/partysound.png" class="responsive-img"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Inicio</a></li>
        <li><a href="artistas.php">Artistas</a></li>
        <li><a href="quienes-somos.html">¿Quienes somos?</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="login.html">Iniciar sesión</a></li>
      </ul>
      <!----------MOBILE---------->
      <ul class="side-nav" id="mobile-demo">
        <li class="active"><a href="inicio.html">Inicio</a></li>
        <li><a href="artistas.php">Artistas</a></li>
        <li><a href="quienes-somos.html">¿Quienes somos?</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="login.html">Iniciar sesión</a></li>
      </ul>
    </div>
  </nav>
  <!--///////////CONTENIDO //////////////////-->
 
 
  


  	<center><h2>Nuestros artistas...</h2>
    </center>


<div class="carousel">
<div class="row">

<?php
  
      include 'Conexion.php';
            

      $consulta = "SELECT id_grupo, nom_grupo, foto FROM grupo";
      
        
        if ($resultado = $conn->query($consulta)) {
          
        /* obtener el array de objetos */
          $num_artistas=0;
          while ($fila = $resultado->fetch_row()) {
             $id = $fila[0];
             $nombre= utf8_encode($fila[1]);
             $foto= utf8_encode($fila[2]);
             $num_artistas++;

             echo'<div class="carousel-item">';
             
      		 echo  '<div class="card hoverable  lime lighten-1 medium">';
    		 echo   '<div class="card-image waves-effect waves-block waves-light temp">"';
    		 echo  '<img class="activator" width="100" height="100" src="grupos/'.$foto.'" >';
    		 echo	'</div>';
    		 echo  '<div class="card-content center-align">';
      		echo   '<span class="card-title activator white-text text-darken-4">'.$nombre.'<i class="material-icons right">more_vert</i></span>';
      
    		echo  '</div>';
    		echo  '<div class="card-reveal">';
      		echo  '<span class="card-title lime-text text-darken-3 " >'.$nombre.'<i class="material-icons right">close</i></span>';
            echo '<button id="'.$id.'"class="waves-effect waves-light btn-large lime darken-4 boton1" onclick="seleccion(this.id);"><i class="material-icons left">account_circle</i>Ver perfil</button>';
			echo  '</div>';
			echo  '</div>';
			
      echo  '</div>';
     
			
		//	if ($num_artistas%4==0) {
      //     echo  '</div>';
			//	  echo  '<div class="carousel-item">';
		//	}
 
                        
       	}
       }
       
         $resultado->close();


    /* cerrar la conexión */
    $conn->close();

  
?> 
<script>
function seleccion(clicked_id){

	
	window.location="perfil.php?artist=" + clicked_id;



}

 $(document).ready(function(){
      $('.carousel').carousel();
    });

        // Next slide
        $('.carousel').carousel('next');
        
        // Previous slide
        $('.carousel').carousel('prev');
       
      

</script>     
  </div>
  </div>








  <!--/////////////FOOTER/////////////-->


        
  <script>
         $(".button-collapse").sideNav();
  </script>



</body>
</html>