<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!-- Latest compiled and minified CSS -->

	
	<title>PartySound</title>


</head>
<body>

  <nav>
    <div class="nav-wrapper  lime ">

      <a href="#!" class="brand-logo responsive-img"><img src="images/partysound.png" class="responsive-img"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Inicio</a></li>
        <li><a href="artistas.php?pagina=p1">Artistas</a></li>
        <li><a href="quienes-somos.html">¿Quienes somos?</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="login.html">Iniciar sesión</a></li>
        
      </ul>
      <!----------MOBILE---------->
      <ul class="side-nav" id="mobile-demo">
        <li class="active"><a href="inicio.html">Inicio</a></li>
        <li><a href="artistas.php?pagina=p1">Artistas</a></li>
        <li><a href="quienes-somos.html">¿Quienes somos?</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="login.html">Iniciar sesión</a></li>
      </ul>
    </div>

  </nav>
  <!--///////////CONTENIDO //////////////////-->
 <br>
 <!--
  <div class="row">
        <div class="col-md-4">
      
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" placeholder="Buscar" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
  </div>
  <br>
-->

  	<center><h2>Nuestros artistas...</h2>
    </center>

    <?php
  
      include 'Conexion.php';
            

      $consulta = "SELECT id_grupo, nom_grupo, foto FROM grupo";

       if ($resultado = $conn->query($consulta)) {
        $num_filas = $resultado->num_rows;
        $bloques = $num_filas/4;
        
        echo '<ul class="pagination">';
        echo '<li class="disabled"><a id="back" onclick="paginar(this.id)"><i class="material-icons">chevron_left</i></a></li>';
        echo '<li class="active"><button class="waves-effect waves-light btn-small lime darken-4 boton1"  id="p1" onclick="paginar(this.id)">1</button></li>';
        for ($i = 1; $i<=$bloques;$i++){
          echo '<li class="waves-effect"><button class="waves-effect waves-light btn-small lime darken-4 boton1" onclick="paginar(this.id)" id="p'.($i+1).'">'.($i+1).' </button></li>';

        }

    echo '<li class="waves-effect"><a id="forward" onclick="paginar(this.id)"><i class="material-icons">chevron_right</i></a></li>';
    echo '</ul>';
    echo '<div class="row" id="p1">';

  
          
        /* obtener el array de objetos */
          $num_artistas=0;
          //$id[$num_filas];
          //$nombre[$num_filas];
          //$foto[$num_filas];
          while ($fila = $resultado->fetch_row()) {
             $id[$num_artistas] = $fila[0];
             $nombre[$num_artistas]= utf8_encode($fila[1]);
             $foto[$num_artistas]= utf8_encode($fila[2]);
               $num_artistas++;
            }

            $pagina =  $_GET['pagina'];

              if (is_null($pagina))$pag=1;
              $pag = intval(substr($pagina, -1));
            for ($i=($pag-1)*4;$i<($pag)*4;$i++){
              if ($i >= $num_filas)break;

             
             echo '<div class=" col l3">';
      		  echo  '<div class="card hoverable  lime lighten-1 medium">';
    		    echo   '<div class="card-image waves-effect waves-block waves-light temp">"';
    		    echo  '<img class="activator" width="100" height="100" src="grupos/'.$foto[$i].'" >';
    		    echo	'</div>';
    		    echo  '<div class="card-content center-align">';
      		  echo   '<span class="card-title activator white-text text-darken-4">'.$nombre[$i].'<i class="material-icons right">more_vert</i></span>';
      
    		  echo  '</div>';
    		  echo  '<div class="card-reveal">';
      		echo  '<span class="card-title lime-text text-darken-3 " >'.$nombre[$i].'<i class="material-icons right">close</i></span>';
            echo '<button id="'.$id[$i].'"class="waves-effect waves-light btn-large lime darken-4 boton1" onclick="seleccion(this.id);"><i class="material-icons left">account_circle</i>Ver perfil</button>';
			echo  '</div>';
			echo  '</div>';
			echo  '</div>';
     
			}
        
			  /* if ($num_artistas%4==0) {
          $var = ($num_artistas/4)+1;
				  echo  '</div>';
          echo '<div class="row" id="p'.$var.'">';
          }*/
        
 
                        
       	}
       
       
         $resultado->close();


    /* cerrar la conexión */
    $conn->close();

  
?> 
<script>
    function seleccion(clicked_id){

    	
    	window.location="perfil.php?artist=" + clicked_id;



    }
      function paginar(clicked_id){

      if(clicked_id=="back"){
        var pagina = window.location.search;
        var num = parseInt(pagina.slice(-1));
        if (num>1){
          window.location="artistas.php?pagina=" + (num-1);
        }
        
      }
      else if(clicked_id=="forward"){
        var pagina = window.location.search;
        var num = parseInt(pagina.slice(-1));
        
          window.location="artistas.php?pagina=" + (num+1);
        
      }
      else
        window.location="artistas.php?pagina=" + clicked_id;



    }
</script> 

 
  </div>
  </div>








  <!--/////////////FOOTER/////////////-->


        
  <script>
         $(".button-collapse").sideNav();
  </script>



</body>
</html>