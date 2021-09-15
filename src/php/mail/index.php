<?php
session_start();
$emailData = $_SESSION['emailData'];
$lang = strtolower($_SESSION['lang']);
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    // $mail->SMTPDebug  = SMTP::DEBUG_SERVER;                      
    $mail->Host       = 'mailout.one.com'; //mailout.one.com
    $mail->SMTPAuth   = true;
    $mail->Username   = 'jeffrey@cheffjeff.nl';
    $mail->Password   = 'Jeff@Orien18#webmail';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    //Recipients
    $mail->setFrom('jeffrey@cheffjeff.nl');
    $mail->addAddress($emailData['adminEmail']);

    $eMailPrep = buildEmail();

    // Content
    $mail->isHTML(true);
    $mail->Subject = $eMailPrep['eSub'];
    $mail->Body    = $eMailPrep['eBody'];
    $mail->AltBody = strip_tags($eMailPrep['eBody']);

    $mail->send();
    if($lang != 'uk'){
        header("Location: /$lang/thanks");
    }else{
        header("Location: /thanks");
    }
} catch (Exception $e) {
    header("Location: /pages/contact.php?message=Een of meer velden hebben een error. Probeer het later nog eens.");
}

function buildEmail()
{
    $emailData = $_SESSION['emailData'];
    $items = [
        "Voornaam" => $emailData['voorNaam'],
        "Achternaam" => $emailData['achterNaam'],
        "email" => $emailData['email'],
        "Tel" => $emailData['tel'],
        "Bericht" => $emailData['Bericht']
    ];

    $logo = 'https://cheffjeff.nl/wordpress/wp-content/uploads/2021/01/1200x630.png';

    $preEmail = array();
    $eSub      = 'Contact bericht van '.$items['Voornaam'].'.';
    $eBody     = file_get_contents('../../../pages/templates/contactEmail.html');

    if (isset($items)){
        $eBody = str_replace(
            array('{logo}', '{voorNaam}', '{achterNaam}', '{email}', '{Tel}', '{bericht}'), 
            array($logo, $items['Voornaam'], $items['Achternaam'], $items['email'], $items['Tel'], $items['Bericht']),
            $eBody
        );
    }

    $preEmail['eSub'] = $eSub;
    $preEmail['eBody'] = $eBody;

    return $preEmail;
}