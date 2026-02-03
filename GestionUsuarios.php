<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Usuarios</title>
</head>
<body>

    <?php include("menu.php"); ?>
    <?php require "config/conexion.php"; ?>
    <?php
      if ($conectar) {
        echo "Conexión correcta<br>";
      }
    ?>




    <h2>VER USUARIOS</h2>

    <table border="1" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            $todos_usuarios = "SELECT * FROM usuarios ORDER BY id ASC";
            $resultado = mysqli_query($conectar, $todos_usuarios);

            if ($resultado) {
                while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["usuario"]; ?></td>
                        <td><?php echo $row["rol"]; ?></td>
                        <td>
                            <a href="eliminar_usuarios.php?id=<?php echo $row["id"]; ?>">Eliminar</a>
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='4'>Error al cargar usuarios: " . mysqli_error($conectar) . "</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>
