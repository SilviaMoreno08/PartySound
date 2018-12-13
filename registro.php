<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
	
	<title>PartySound</title>


</head>
<body>

  <nav>
    <div class="nav-wrapper black-text lime">
      <a href="#!" class="brand-logo responsive-img"><img src="images/partysound.png" class="responsive-img"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down color">
        <li><a href="inicio.php">Inicio</a></li>
        <li><a href="artistas.php?pagina=p1">Artistas</a></li>
        <li><a href="quienes-somos.html">¿Quienes somos?</a></li>
        <li  class="active"><a href="contacto.html">Contacto</a></li>
        <li><a href="login.html">Iniciar sesión</a></li>
      </ul>
      <!----------MOBILE---------->
      <ul class="side-nav" id="mobile-demo">
        <li class="active"><a href="inicio.html">Inicio</a></li>
        <li><a href="artistas.php?pagina=p1">Artistas</a></li>
        <li class="active"><a href="quienes-somos.html">¿Quienes somos?</a></li>
        <li><a href="contacto.html">Contacto</a></li>
        <li><a href="login.html">Iniciar sesión</a></li>
      </ul>
    </div>
  </nav>
  <!--///////////CONTENIDO //////////////////-->

  	
    
    <div class="contenido">
   <div class="justificar centrado"> 
   <div class="row">
    <form role="form" class= "col s12" enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <div class="row">
        <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
          <input id="first_name" name="nom_grupo" type="text" class="validate">
          <label for="first_name">Nombre del Grupo</label>
        </div>
        <div class="input-field col s6">
         <i class="material-icons prefix">music_note</i>
          <input id="last_name" name="genero" type="text" class="validate">
          <label for="last_name">Género musical</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
        <i class="material-icons prefix">email</i>
          <input id="correo" name="correo" type="email" class="validate">
          <label for="correo">Correo electrónico</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">phone</i>
          <input id="telefono" name="telefono" type="number" class="validate">
          <label for="telefono">Telefono</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
        <i class="material-icons prefix">visibility</i>
          <input id="correo" name="facebook" type="text" class="validate">
          <label for="correo">Facebook</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">video_library</i>
          <input id="telefono" name="youtube" type="text" class="validate" >
          <label for="telefono">Youtube</label>
        </div>
      </div>

       <div class="row">
        <div class="input-field col s6">
        <i class="material-icons prefix">comment</i>
          <input id="correo" name="twitter" type="text" class="validate">
          <label for="correo">Twitter</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">perm_contact_calendar</i>
          <input id="telefono" name="instagram" type="text" class="validate">
          <label for="telefono">Instagram</label>
        </div>
      </div>


      
      
       
      
        
      <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="input-field col s12">
            <i class="material-icons prefix">mode_edit</i>
              <textarea id="textarea1" name="trayectoria" class="materialize-textarea"></textarea>
              <label for="textarea1"  >Describa su trayectoria</label>
            </div>
          </div>
        </div>
      </div>

       <div class="row">
        <div class="input-field col s6">
        <i class="material-icons prefix">face</i>
         <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
          <input id="foto" name="foto" type="file">
        
        </div>
        
      </div>
        <div class="center">
        <button class="waves-effect waves-light btn-large btn2  black-text lime darken-2 center" name ="enviar" type="submit"><i class="material-icons left"></i><b>Enviar</b></button>
        </div>
        
    </form>
  </div>

      
    </div>
        	

    	
    </div>


        
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  	
  	include 'Conexion.php';


        $nom_grupo = utf8_decode($_POST['nom_grupo']);
        $genero = utf8_decode($_POST['genero']);
        $correo = utf8_decode($_POST['correo']);
        $telefono = utf8_decode($_POST['telefono']);
        $facebook = utf8_decode($_POST['facebook']);
        $youtube = utf8_decode($_POST['youtube']);
        $twitter = utf8_decode($_POST['twitter']);
        $instagram = utf8_decode($_POST['instagram']);
        $trayectoria = utf8_decode($_POST['trayectoria']);
       
        $foto = $_FILES["foto"]["name"];

        //echo "Foto cargada: " .$foto;
        /*echo "<br>Files: ". var_dump($_FILES);
        echo "<br>Error:". $_FILES["foto"]["error"];
        echo "<br>Temp:". $_FILES["foto"]["tmp_name"];*/

      $sql = "INSERT INTO grupo (nom_grupo,genero,correo,telefono,facebook,youtube,twitter,instagram,trayectoria,foto)
      VALUES ('$nom_grupo', '$genero', '$correo', '$telefono', '$facebook', '$youtube', '$twitter', '$instagram', '$trayectoria','$foto')";

      //echo"<br>".$sql;

      if ($conn->query($sql) === TRUE) {
          if (move_uploaded_file($_FILES["foto"]["tmp_name"], "grupos/".$foto)){ 
            echo "El archivo ha sido cargado correctamente."; 
          }else{ 
              echo "Ocurrió algún error al subir el fichero. No pudo guardarse."; 
          } 
        echo '<script>alert("Se ha registrado un nuevo grupo");</script>';
         $consulta = "SELECT id_grupo FROM grupo WHERE nom_grupo = '$nom_grupo'";
      
        
        if ($resultado = $conn->query($consulta)) {
          
        /* obtener el array de objetos */
          while ($fila = $resultado->fetch_row()) {
            
             $id= utf8_encode($fila[0]);
             echo $id;
             echo '<script>window.location="perfil.php?artist='.$id.'";</script>';
           
        }
       }
       
         $resultado->close();


    /* cerrar la conexión */
    		$conn->close();

    		



      
      } else {
          $error = "Error: <br>" . $conn->error;
          echo $error;
      }

    } 
?>  







  <!--/////////////FOOTER/////////////-->


        
  <script>
         $(".button-collapse").sideNav();
         $('.parallax').parallax();
         $('select').material_select();
  </script>



</body>
</html>