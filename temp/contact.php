<!-- Abro PHP -->
<?php
//Definir las variables y establecer valores vacíos
$nameErr = $apellidoErr = $emailErr = $subjectErr = $messageErr = "";//todos los Err valen nada
$name = $apellido = $email = $subject = $message = "";//estas variables no valen nada

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //validación del nombre
    if(empty($_POST["name"])) {
        $nameErr = "El nombre es obligatorio";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Sólo se permitn letras y espacios en blanco";
        }
    }
    //validación del apellido
    if(empty($_POST["apellido"])) {
        $apellidoErr = "El apellido es obligatorio";
    } else {
        $apellido = test_input($_POST["apellido"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $apellido)) {
            $apellidoErr = "Sólo se permitn letras y espacios en blanco";
        }
    }

    //validación del correo electrónico
    if(empty($_POST["email"])) {
        $emailErr = "El correo electrónico es obligatorio";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Formato de correo inválido";
        }
    }

    //Validación del asunto
    if(empty($_POST["subject"])) {
        $subjectErr = "El asunto es obligatorio";
    } else {
        $subject = test_input($_POST["subject"]);
    }

    //validación del mensaje
    if(empty($_POST["message"])) {
        $messageErr = "El mensaje es obligatorio";
    } else {
        $message = test_input($_POST["message"]);
    }

    //Si no hay errores, vamos a procesar el formulario enviándolo por correo
    if($nameErr == "" && $apellidoErr == "" && $emailErr == "" && $subjectErr == "" && $messageErr == "") {
        $to = "elcorreodondevaallegar@hotmail.com";//aquí el correo donde queréis mandarlo
        $headers =  "From: " .$email."\r\n". 
                    "Reply-to: ".$email."\r\n".
                    "X-Mailer: PHP/".phpversion();
        $full_message = "Nombre: $name\nApellido: $apellido\n Correo: $email\n\nMensaje:\n$message";
        if (mail($to, $subject,$full_message,$headers)) {
            echo "<h3>Gracias por contactarnos, $name. Te responderemos lo antes posible</h3>";
            $name = $apellido = $email = $subject = $message = "";
        } else {
            echo "<h3>Lo siento, ocurrió un error al enviar tu mensaje. Inténtalo de nuevo</h3>";
        }
        //limpiar los valores después de enviar
        $name = $apellido = $email = $subject = $message = "";
        
    }
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!-- cierro PHP -->
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mi web</title>
    
    <link href="css/bootstrap.css" rel="stylesheet">
   
    <link href="estilo.css" rel="stylesheet">
   <style>
    .error {
        color:red;
    }
</style>
 
  </head>
  <body>
    <h2>Formulario de contacto</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nombre: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error"><?php echo $nameErr;?></span>
        <br><br>
        Apellido: <input type="text" name="apellido" value="<?php echo $apellido;?>">
        <span class="error"><?php echo $apellidoErr;?></span>
        <br><br>
        Correo electrónico:<input type="email" name="email" value="<?php echo $email;?>">
        <span class="error"><?php echo $emailErr;?></span>
        <br><br>
        Asunto:<input type="text" name="subject" value="<?php echo $subject;?>">
        <span class="error"><?php echo $subjectErr;?></span>
        <br><br>
        Mensaje: <textarea name="message" rows="5" cols="40"><?php echo $message;?></textarea>
        <span class="error"><?php echo $messageErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Enviar">
    </form>
 <script src="js/bootstrap.bundle.min.js"></script>

    </body>
</html>