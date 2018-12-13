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
    <form class="col s12" method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>">
      <div class="row">
        <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
          <input id="first_name" name="first_name" type="text" class="validate">
          <label for="first_name">Nombres</label>
        </div>
        <div class="input-field col s6">
         <i class="material-icons prefix">A</i>
          <input id="last_name" name="last_name" type="text" class="validate">
          <label for="last_name">Apellidos</label>
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
        <i class="material-icons prefix">music_note</i>
        <?php
          session_start();
          $artist= $_SESSION["artist"];
           include 'Conexion.php';
            $consulta = "SELECT nom_grupo, correo FROM grupo WHERE id_grupo = $artist";
      
        
            if ($resultado = $conn->query($consulta)) {
          
            /* obtener el array de objetos */
                while ($fila = $resultado->fetch_row()) {
            
                  $nombreA= utf8_encode($fila[0]);
                  $correoA= utf8_encode($fila[1]);
                  
                }
            }
       
         $resultado->close();


        /* cerrar la conexión */
        $conn->close();
       
          
          echo '<input id="artista" name="artista" type="text" class="validate" value="'.$nombreA.'">';
          ?>
          <label for="artista">Artista</label>
        </div>
        <i class="material-icons left">subject</i>
        <div class="input-field col s5 center ">
           
          <select name="asunto">
            <option value="" disabled selected>Selecciona</option>
            <option value="Cotizacion">Cotizar Artista</option>
            <option value="Preguntas">Preguntas</option>
            <option value="Quejas">Quejas</option>
            <option value="Reclamos">Reclamos</option>
            <option value="Sugerencias">Sugerencias</option>
          </select>
        
         <label><h6>Asunto</h6></label> 
            
        </div>
      </div>
      
        
      <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="input-field col s12">
            <i class="material-icons prefix">mode_edit</i>
              <textarea id="textarea1" name="descripcion" class="materialize-textarea"></textarea>
              <label for="textarea1"  >Describa su solicitud</label>
            </div>
          </div>
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
  

      $nombre = $_POST['first_name'];
      $apellido = $_POST['last_name'];
      $correo = $_POST['correo'];
      $telefono = $_POST['telefono'];
      $asunto = $_POST['asunto'];
      $descripcion = utf8_decode($_POST['descripcion']);

      $mensaje = "<p><b>Nombre: </b>". $nombre. 
                  "<br><b>Apellido: </b>". $apellido. 
                  "<br><b>Correo: </b>". $correo. 
                  "<br><b>Telefono: </b>". $telefono.
                  "<br><b>Artista: </b>". $nombreA.
                  "<br><b>Asunto: </b>". $asunto.
                  "<br><b>Descripcion: </b><br>". $descripcion. 
                  "</p>";

      $mensaje2 = "<p>Usted ha enviado la siguiente solicitud:</p><br>".$mensaje."<br><p>Pronto nos pondremos en contacto con usted</p>";






include 'vendor/autoload.php';
// the message
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'listasistemasunisimon@gmail.com';                 // SMTP username
$mail->Password = 'Software2';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('partysound@gmail.com', 'PartySound Web');
$mail->addAddress('leider.tanos@gmail.com', 'Leider Tanos'); 
$mail->addAddress($correoA, $nombreA); 


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $asunto;
$mail->Body    = $mensaje;
$mail->AltBody = $asunto;

$mail->smtpConnect(
    array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true
        )
    )
);

  if(!$mail->send()) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
      echo '<script>alert("Mensaje enviado con éxito");</script>';
  }

$mail2 = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail2->isSMTP();                                      // Set mailer to use SMTP
$mail2->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail2->SMTPAuth = true;                               // Enable SMTP authentication
$mail2->Username = 'listasistemasunisimon@gmail.com';                 // SMTP username
$mail2->Password = 'Software2';                           // SMTP password
$mail2->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail2->Port = 587;                                    // TCP port to connect to

$mail2->setFrom('partysound@gmail.com', 'PartySound Web');
$mail2->addAddress($correo, $nombre.' '.$apellido); 


$mail2->isHTML(true);                                  // Set email format to HTML

$mail2->Subject = $asunto;
$mail2->Body    = $mensaje2;
$mail2->AltBody = $asunto;

$mail2->smtpConnect(
    array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true
        )
    )
);

  if(!$mail2->send()) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail2->ErrorInfo;
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