<?php

if ($conex) {
    $consulta = "SELECT * FROM dato";
    $resultado = mysqli_query($conex, $consulta);
    if ($resultado) {

?>
        <div class="row justify-content-center">
            <div class="col-8">

                <table class="table col-6">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Color</th>
                            <th scope="col">Email</th>
                            <th scope="col">Opciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <?php
                            while ($row = $resultado->fetch_array()) {
                                $id = $row['id'];
                                $nombre = $row['nombre'];
                                $color = $row['color'];
                                $email = $row['email'];
                            ?>

                                <th scope="row"><?php echo $id ?></th>
                                <td><?php echo $nombre ?></td>
                                <td><?php echo $color ?></td>
                                <td><?php echo $email ?></td>
                                <td>
                                    <a href="#">editar</a>
                                    <a href="#">eliminar</a>

                                </td>

                        </tr>
                    <?php
                            }
                    ?>
                    </tbody>
                </table>

            </div>
        </div>
<?php

    }
}
?>