<?php
include('connection.php');
$con = connection();

$sql = "SELECT * FROM users";

$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/login.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div id="contenedor">
        <div id="contenedorcentrado">
            <div id="login">
                <form action="insert_user.php" method="POST">
                    <center>
                        <h1>LOGIN</h1>
                    </center>

                    <input type="text" name="email" Placeholder="Correo" required />
                    <input type="password" minlength="4" maxlength="18" name="password" Placeholder="Contraseña" required />
                    <center><button type="submit" title="Ingresar" name="Ingresar">Ingresar</button></center>
                </form>
            </div>

            <div id="derecho">
                <div class="titulo">
                    Bienvenido
                </div>

                <div id="pie-form">
                    <img src="CSS/user.png" width="50" height="50">
                </div>

            </div>

        </div>

    </div>

</body>

</html>