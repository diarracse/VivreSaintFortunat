<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vous avez une question ou une suggestion ? Contactez VIVRE SAINT-FORTUNAT via notre formulaire ou trouvez nos coordonnées pour nous joindre directement." />

    <title>Nous contacter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="shortcut icon" href="images/orange.ico" type="image/x-icon">

</head>

<body>
    <?php include('include/menu.php'); ?>
   
    
    <main class="main-form">
        <div class="form-container">
  
        <h2>Nous contacter</h2>

        <p class="moyen-text mb-5">Indiquez-nous ce que vous pensez de notre site Web, de notre Association ou de nos activités.Si vous nous communiquez vos coordonnées, nous serons en mesure de vous contacter pour apporter une réponse personnalisée</p>


            <form>
                
                <div class="d-md-flex w-100 gap-4">
                    <div class="form-group w-100">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" class="form-control" required placeholder="Votre nom">
                    </div>
                    <div class="form-group w-100">
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" class="form-control" required placeholder="Votre prénom">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" required placeholder="Votre email">
                </div>
                <div class="form-group">
                    <label for="objet">Objet</label>
                    <input type="objet" id="objet" class="form-control" required placeholder="Votre objet">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea type="textarea" id="message" class="form-control" required placeholder="Votre message"></textarea>
                </div>
                <button type="submit" id="envoyerContact" class="CTA">Envoyer</button>
                <p class="petit-text">Les informations recueillies via ce formulaire sont enregistrées pour répondre à votre demande. Elles ne seront ni partagées, ni revendues.</p>
            </form>
        </div>
    </main>

    <?php include('include/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="JS/contact.js"></script>
</body>

</html>