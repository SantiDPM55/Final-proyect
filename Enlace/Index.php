<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "Enlace";

    $coneccion = mysqli_connect ($servidor, $usuario, $clave, $bd )

?>


<form method="post">

<input type="text" name="nombre" placeholder="Nombre">
<input type="text" name="apellido" placeholder="Apellido">
<input type="text" name="correo" placeholder="Correo">
<input type="text" name="DNI" placeholder="DNI">
<input type="text" name="edad" placeholder="Edad">

<input type= "submit" name="enviar">

</form>

<?php

  if(isset($_POST['enviar'])){
      
      $nombre = $_POST['nombre'];
      $correo = $_POST['apellido'];
      $telefono = $_POST['correo']; 
      $edad = $_POST['edad'];
      
      $insertar = "INSERT INTO datos Values ('$nombre','$apellido','$telefono','')";
      
      $coneccion = mysqli_query($coneccion,$insertar);
  }
?>
