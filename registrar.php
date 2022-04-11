<?php

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['color']) >= 1 && strlen($_POST['email']) >= 1 ) {
        $name = $_POST['name'];
        $color = $_POST['color'];
        $email = $_POST['email'];

        $consulta = "INSERT INTO dato (nombre , color , email) VALUE ('$name','$color','$email')";

        $resultado = mysqli_query($conex,$consulta);

        if ($resultado) {
            ?>
                <div class="alert alert-success text-center my-1" role="alert">Se guardó su registro.</div>
            <?php
        }
    }else{ 
        ?>
            <div class="alert alert-danger text-center my-1" role="alert">Complete todos los campos por favor.</div>
        <?php
    }
}

?>