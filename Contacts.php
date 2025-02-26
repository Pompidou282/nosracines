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

   <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrefour Jeunesse Afrique - Renouer Nos Racines</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f6a008;;
            overflow-x: hidden;
        }
        body h4 {
    font-family: 'Poppins', sans-serif;
    font-weight: bold;
    color: #142b40;
    text-transform: uppercase;
    letter-spacing: 1px;
    opacity: 0;
    transform: translateY(10px);
    animation: fadeInUp 0.8s ease-out forwards;
}

        /* HEADER */
        header {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #142b40;
            padding: 10px 0;
        }

        header h1 {
            color: white;
            font-size: 15px;
            margin: 0;
        }

        .logo img {
            max-width: 50px;
            height: auto;
            margin-left: 10px;
             position: absolute;
                top: 10px;
                right: 10px;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 10px 0;
            background-color: #f4f4f4;
        }

       /* SECTION CONTACTS */
.contacts {
    background-color: #f4f4f4;
    padding: 40px 20px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 20px 0;
}

.contacts h1 {
    color: #142b40;
    font-size: 2rem;
    margin-bottom: 20px;
}

.contacts .contact-info {
    font-size: 18px;
    margin-bottom: 20px;
}

.contacts .contact-info p {
    margin: 10px 0;
}

/* Formulaire de contact */
form {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
}

form label {
    font-size: 18px;
    color: #142b40;
}

form input, form textarea {
    padding: 10px;
    width: 80%;
    max-width: 400px;
    border-radius: 8px;
    border: 1px solid #ccc;
}

form button {
    background-color: #a5c217;
    color: white;
    font-size: 18px;
    padding: 12px 20px;
    border-radius: 8px;
    transition: background 0.3s ease, transform 0.2s ease;
}

/* Effet sur le bouton */
form button:hover {
    background-color: #8ba30f;
    transform: scale(1.05);
}


        nav a {
            text-decoration: none;
            color: #142b40;
            font-size: 18px;
            padding: 10px 15px;
            background-color: white;
            border-radius: 5px;
            transition: background 0.3s;
        }

        nav a:hover {
            background-color: #a5c217;
        }

        .section-container {
            display: flex;
             flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 20px;
            padding: 40px;
        }

        .section-container img {
            max-width: 300px;
             height: auto;
            border-radius: 10px;
        }

        section {
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
     .bon-a-savoir-container {
    width: 100%;
    max-width: 600px;
    height: 100px;
    overflow: hidden;
    position: relative;
    background: #a5c217;
    color: white;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
}
.bon-a-savoir-slide {
    position: absolute;
    width: 100%;
    opacity: 0;
    font-size: 1.8rem; /* Agrandit le texte */
    font-weight: bold;        
       background: #142b40;
    color: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    transition: opacity 1s ease-in-out;
}

.bon-a-savoir-slide.active {
    opacity: 1;
}

        .cards-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .card {
            background-color: white;
            padding: 20px;
            width: 250px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .card.show {
            opacity: 1;
            transform: translateY(0);
        }

        footer {
            background-color: #142b40;
            color: white;
            padding: 15px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        /* Style du bouton Participer */
.btn-participer {
    display: inline-block;
    padding: 12px 20px;
    background-color: #a5c217;
    color: white;
    font-size: 18px;
    font-weight: bold;
    text-decoration: none;
    border-radius: 8px;
    transition: background 0.3s ease, transform 0.2s ease;
}

/* Effet au survol */
.btn-participer:hover {
    background-color: #8ba30f;
    transform: scale(1.05);
}

    </style>
</head>
    
<body>
    <header>
        <h1>Carrefour Jeunesse Afrique - Renouer Nos Racines</h1>
    </header>
    <nav>
        <a href="index.html">Accueil</a>
        <a href="voyage.html">Voyage</a>
        <a href="apropos.html">À Propos</a>
    </nav>
    <div class="logo">
            <img src="contour.png" alt="Logo de CJA">
        </div>
    </header>
  
     <!-- SECTION CONTACTS -->
<section class="contacts">
    <h1>Contactez-nous</h1>
    <p>Pour toute question ou demande d'information, n'hésitez pas à nous contacter à l'une des adresses suivantes :</p>

    <div class="contact-info">
        <p><strong>Adresse :</strong> Carrefour Jeunesse Afrique, Comé, Bénin</p>
        <p><strong>Téléphone :</strong> .............</p>
        <p><strong>Email :</strong> ...........................</p>
    </div>

    <!-- Formulaire de contact (optionnel) -->
    
<form action="send_email.php" method="POST">
    <label for="name">Nom :</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message :</label>
    <textarea id="message" name="message" rows="4" required></textarea>

    <button type="submit" class="btn-participer">Envoyer</button>
</form>

</section>
 

    <!-- FOOTER -->
    <footer>
        &copy; 2024 Carrefour Jeunesse Afrique
    </footer>
    </html>
