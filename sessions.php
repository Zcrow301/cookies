 <?php session_start();?>
 <!DOCTYPE html>
<html>
<head>
    <title>iniciar sesión</title>
</head>

<body>

    <a href="logout.php">CERRAR SESIÓN</a>
    <br> <br>

         <?php echo $_SESSION['usuario']; ?>

    <br><br>

    <form acction="" method="POST">
        usuario: <input type="text" name="user"><br>
        clave: <input type="text" name="pass"><br>
        <input type="submit" name="enviar" value="Iniciar Sesión"> 
    </form>

<?php

    if(isset($_POST['enviar'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if($user == "fabricio" && $pass == "1234"){
            echo "Iniciaste sesión";
            echo $_SESSION['session']= true;
            $_SESSION['usuario'] = $user;
            
        }else{
            echo "Usuario o contraseña incorrecta";
        }
        
    }    

?>

</body>
</html>