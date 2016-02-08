<?php

require 'bootstrap.php';

session_start();

if (isset($_SESSION['user'])) {
    $user = $entityManager->merge($_SESSION['user']);
} else {
    die('Pas d\'utilisateur');
}
