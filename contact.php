<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Vérifier que tous les champs sont remplis
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Adresse email où envoyer le message
        $to = "clemence.coste@ynov.com"; // Remplace par ton adresse email

        // Sujet de l'email
        $subject = "Nouveau message de " . $name;

        // Corps de l'email
        $emailContent = "Nom: " . $name . "\n";
        $emailContent .= "Email: " . $email . "\n";
        $emailContent .= "Message:\n" . $message . "\n";

        // En-têtes de l'email
        $headers = "From: " . $email;

        // Envoyer l'email
        if (mail($to, $subject, $emailContent, $headers)) {
            echo "Merci, votre message a été envoyé avec succès.";
        } else {
            echo "Erreur : le message n'a pas pu être envoyé.";
        }
    } else {
        echo "Erreur : tous les champs sont requis.";
    }
} else {
    echo "Erreur : méthode de requête invalide.";
}
?>
