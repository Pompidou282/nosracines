<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "contact@carrefourjeunesseafrique.org"; // Adresse email de destination
    $subject = "Message de contact depuis le site web";
    $body = "Nom : $name\nEmail : $email\n\nMessage :\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Désolé, une erreur est survenue. Votre message n'a pas pu être envoyé.";
    }
}
?>
  
<form action="send_email.php" method="POST">
    <label for="name">Nom :</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message :</label>
    <textarea id="message" name="message" rows="4" required></textarea>

    <button type="submit" class="btn-participer">Envoyer</button>
</form>
