<?php
session_start(); // Démarrer la session

if (!isset($_SESSION['user_id'])) {
    // Si non connecté, rediriger vers la page de connexion
    header('Location: /plateformeSoftland/admin/login.php');
    exit;
}
