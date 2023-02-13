<?php $title = "Liste des contacts"; ?>
<?php $description = "Hello! Voici notre agenda digital et vous êtes sur la page d'accueil"; ?>


<?php require __DIR__ . "/partials/head.php"; ?>
<!-- __DIR__ permet de définir un point d'ancrage, 
 je part du dossier dans lequel se trouve le fichier et je récupère ls informations -->
   
    <?php require __DIR__ . "/partials/nav.php"; ?>

    <!-- Le contenu spécifique à cette page -->
<main class="container">
    <h1 class="text-center my-3 display-5">Liste des contacts</h1>
    
    <div class="d-flex justify-content-end align-item-center">
        <a href="create.php" class="btn btn-primary shadow"> <i class="fa-solid fa-plus"></i>  Nouveau contact</a>
    </div>

</main>


     <?php require __DIR__ . "/partials/footer.php"; ?>

<?php require __DIR__ . "/partials/foot.php"; ?>


<!-- permet de cibler tout les robots de tout les moteurs de recherche
 le / correspond au point d'entrée de mon application, en commençant par l'accueil 

sur la page robots.tkt

User-agent: *
Allow: /
-->