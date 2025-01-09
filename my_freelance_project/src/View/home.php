<!-- src/View/home.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page d'Accueil</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php require __DIR__ . '/partials/navbar.php'; ?>

<div class="container">
    <h1>Bienvenue sur notre Plateforme Freelance</h1>
    <p>Sur ce site, vous pouvez facilement publier ou découvrir des projets, 
       envoyer des offres et collaborer avec des professionnels.</p>
       
    <h2>Comment ça marche&nbsp;?</h2>
    <ol>
        <li><strong>Inscrivez-vous</strong> en tant que recruteur ou freelance.</li>
        <li><strong>Connectez-vous</strong> pour accéder à votre espace personnel.</li>
        <li><strong>Recruteurs</strong> : Créez un nouveau projet et recevez des offres.</li>
        <li><strong>Freelances</strong> : Explorez les projets “ouverts” et envoyez vos propositions.</li>
        <li><strong>Collaborez</strong> et finalisez votre projet en toute simplicité.</li>
    </ol>

    <h2>Commencer</h2>
    <p>
        <a href="index.php?controller=user&action=login">Se connecter</a> |
        <a href="index.php?controller=user&action=register">Créer un compte</a>
    </p>

    <section style="margin-top: 20px;">
        <h3>Fonctionnalités principales</h3>
        <ul>
            <li>Gestion des projets (budget, deadline, statut…)</li>
            <li>Messagerie intégrée entre freelances et recruteurs</li>
            <li>Notifications en temps réel</li>
            <li>Système d’offres et d’embauche</li>
        </ul>
    </section>

    <div class="footer">
        <p>&copy; 2023 - Votre Plateforme Freelance</p>
    </div>
</div>

</body>
</html>
