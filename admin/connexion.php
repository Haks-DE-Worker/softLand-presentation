<?php
// Définir les informations de connexion à la base de données
$host = 'localhost'; // Adresse du serveur de base de données
$dbname = 'softland'; // Nom de la base de données
$username = 'root'; // Nom d'utilisateur pour la base
$password = ''; // Mot de passe pour la base

try {
    // Création de l'objet PDO pour établir la connexion
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Activer les exceptions pour les erreurs
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Récupérer les résultats sous forme de tableau associatif
        PDO::ATTR_EMULATE_PREPARES => false, // Désactiver l'émulation des requêtes préparées
    ];

    $pdo = new PDO($dsn, $username, $password, $options);

    // Retourner l'objet PDO
    return $pdo;

} catch (PDOException $e) {
    // Gérer les erreurs de connexion
    die('Une erreur est survenue : ' . $e->getMessage());
}
