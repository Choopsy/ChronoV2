<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = $_POST["full-name"];
    $email = $_POST["mail"];
    $commentaire = $_POST["message"];

    // Adresse e-mail de destination (votre adresse e-mail ici)
    $destination = "cheunperret56@gmail.com";

    // Sujet de l'e-mail
    $sujet = "Nouveau message de $pseudo";

    // Corps de l'e-mail
    $message = "Pseudo: $pseudo\n\n";
    $message .= "Adresse e-mail: $email\n\n";
    $message .= "Commentaire:\n$commentaire\n";

    // Envoi de l'e-mail
    mail($destination, $sujet, $message);

    // Redirection vers une page de confirmation (facultatif)
    header("Location: index.html");
}
?>