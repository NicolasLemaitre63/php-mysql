<?php $title = "ERREUR"; ?>
<?php ob_start(); ?>

<h1>Le super blog de l'AVBN !</h1>

<div class="news">
    <h3>Message d'erreur</h3>
    <p><?=$errorMessage?></p>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>