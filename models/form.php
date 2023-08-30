<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
            
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    if(isset($_POST['send'])){
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
            $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
            $patron_correo = "/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/";
            
            if(preg_match($patron_texto, $_POST['name']) && preg_match($patron_correo, $_POST['email'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
        
                $mail = new PHPMailer(true);
        
                try {
                    $mail->SMTPDebug = 0;                      
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com';                   
                    $mail->SMTPAuth   = true;                                  
                    $mail->Username   = 'Tu tu correo';                   
                    $mail->Password   = 'tu contraña';                              
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                    $mail->Port       = 465;
        
                    $mail->setFrom($email, $name);
                    $mail->addAddress('@gmail.com', 'Tu Nomnbre');    
        
                    $mail->isHTML(true);                              
                    $mail->Subject = 'Usuario del blog';
                    $mail->Body    = $message;
        
                    $mail->send();
                    header('Location: index.php');
                    exit();
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            } else {
                echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Nombre y/o correo no valido',
            })
            </script>";
            }

            
        } else {
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No debe haber campos vacios',
            })
            </script>";
        }
    }
?>