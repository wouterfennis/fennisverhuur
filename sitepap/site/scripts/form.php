<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$telephone_number = $_POST['telephone_number'];
$bericht = $_POST['message'];
$to = "info@fennisverhuur.nl";
$subject = "Nieuw bericht van Jaguar Verhuur";
	
$message = $first_name.' '.$last_name.' met het e-mailadres '.$email.'
en heeft mogelijk ook een nummer opgegeven: ' .$telephone_number.
'stuurde het volgende bericht:  
____________________________________  
'.$bericht.'  
------------------------------------';  
mail($to, $subject, $message, "From:".$email);

?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8"/>
        <title>Jaguar trouwauto verhuur - Bericht verzonden</title>
		<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="../stylesheets/home.css" />
		<link rel="stylesheet" href="../stylesheets/base.css" />
    </head>
    <body>
        <div id="container">
            <header class="banner" role="banner">
            </header>
            
            <header class="menu">
                <nav role="navigation">
                <ul>
                    <a href="../index.html"><li>Home</li></a>
                    <a href="../fotos.html"><li>Foto's</li></a>
                    <a href="../tarieven.html"><li>Tarieven</li></a>
                    <a href="../contact.html"><li>Contact</li></a>
                </ul>
                </nav>
            </header>
            <div class="contenthome">
				<div id="tekstarea">
					<p>Uw bericht is verzonden! Klik <a href="../index.html">HIER</a> om terug te gaan naar de homepagina</p>
				</div>
            </div>
            <footer>
                <p><small>&copy; Copyright 2015. All Rights Reserved.</small></p>
            </footer>
        </div>
    </body>
</html>