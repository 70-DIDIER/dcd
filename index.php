<!DOCTYPE html>
<html>
<head>
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="formu.css">
        
</head>
<body>
    <div class="sec">
    <h1>inscription aux challenge (TLW)</h1>
    <p>pour le debut du challenge nous allons le faire individuellement <br> et pour les prochaines nous allons constitués <br> des équipes pour resoudres des problèmes complexe</p>
    <p>il y aura qu'à même du soutien pour permettre à tout le monde de grandir en competence</p>
    <p>pour la première fois on aura duex sujets aux choix libre</p>
    <ol>
        <li>HTML/CSS : developpement d'un ladding page</li>
        <li>html/css/Js : developpement d'un portfolio avec des animations </li>
    </ol>
    </div>
    <div class="container">
        <h2>Informations personnelles</h2>
    <form action="traitement.php" method="get">
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom">
        </div>
        <div class="form-group">
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom">
        </div>
        <div class="form-group">
            <label>Sexe:</label>
            <input type="radio" name="sexe" value="Femme"> Femme
            <input type="radio" name="sexe" value="Homme"> Homme
        </div>
        <h2>Inscription aux challenge</h2>
        <div class="form-group">
            <label>Inscription aux challenge TLW:</label>
            <input type="radio" name="challenge" value="Oui"> Je suis prêt pour commencer le challenge <br>
            <input type="radio" name="challenge" value="Non"> Je ne suis pas prêt pour commencer le challenge
        </div>
        

        <button type="submit">Envoyer</button>
    </form>
    </div>
</body>
</html>
