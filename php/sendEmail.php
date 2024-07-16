<!-- Abro PHP -->
<?php
print_r($_POST);
//Definir las variables y establecer valores vacíos
$nameErr = $apellidoErr = $emailErr = $subjectErr = $messageErr = "";//todos los Err valen nada
$name = $apellido = $email = $subject = $message = "";//estas variables no valen nada

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $i = 0;
    while($i < count($_POST) - 1){
        // var_dump($_POST[$i]);
        $i++;
    }
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
        
        ini_set("SMTP", "smtp.gmail.com");
        ini_set("smtp_port", "587");
        ini_set("sendmail_from", $email);

        
        $to = "k-e-v-i-n_13_@hotmail.com";//aquí el correo donde queréis mandarlo
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
    var_dump(trim($data));
    print("<br>");
    $data = trim($data);
    var_dump(stripslashes($data));
    print("<br>");
    $data = stripslashes($data);
    var_dump(htmlspecialchars($data));
    print("<br>");
    $data = htmlspecialchars($data);
    return $data;
}
function valid_post($data){
    echo $data;
}
?>
<!-- cierro PHP -->