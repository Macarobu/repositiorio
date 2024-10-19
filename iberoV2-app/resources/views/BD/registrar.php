<?php

include("Conexion.php");

if(isset($_POST["registrar"])){
    if(
        strlen($_POST["name"])>= 1 && 
        strlen($_POST["email"])>= 1 && 
        strlen($_POST["direction"])>= 1 && 
        strlen($_POST["phone"])>= 1 
    ){
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $direction = trim($_POST["direction"]);
        $phone = trim($_POST["phone"]);
        $consulta = "INSERT INTO datos(nombre, email, direccion, telefono)
            VALUES('$name','$email','$direction','$phone')";
            $result = mysqli_query($conex,$consulta);
            if($result){
                ?>
                <h3 class="success">Tu registro se ha complicado</h3>
                <?php
            }else{
                ?>
                <h3 class="error">Ocurrio un problema</h3>
                <?php
            }
            }else{
                ?>
                <h3 class="error">Llena todos los campos</h3>
                <?php
    }
}

?>