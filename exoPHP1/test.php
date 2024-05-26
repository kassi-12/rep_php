<?php
session_start();

if (!isset($_SESSION['secret'])) {
    $_SESSION['secret'] = rand(1, 100);
    $_SESSION['essais'] = 0;
}

if (isset($_GET['proposition'])) {
    $proposition = intval($_GET['proposition']);
    $_SESSION['essais']++;

    if ($proposition === $_SESSION['secret']) {
        // Félicitations, le nombre a été deviné
        echo "Bravo ! Vous avez trouvé le nombre secret en " . $_SESSION['essais'] . " essais.";
        echo '<br><a href="tp1_exo10.php">Recommencer</a>';
        session_unset(); // Réinitialiser la session
    } elseif ($proposition < $_SESSION['secret']) {
        // Le nombre est trop petit
        echo "Trop petit. Essayez encore.";
    } else {
        // Le nombre est trop grand
        echo "Trop grand. Essayez encore.";
    }
}