<?php
/**
 * Configuration zerogluten.fr
 */

// Mode debug (mettre false en production)
define("DEBUG_MODE", false);

// Informations du site
define("SITE_NAME", "zerogluten.fr");
define("SITE_URL", "https://zerogluten.fr");
define("SITE_TAGLINE", "Cuisiner sans gluten, aussi bon qu avant.");

// Configuration base de donnees
define("DB_HOST", "localhost");
define("DB_NAME", "zerogluten_zerogluten");
define("DB_USER", "zerogluten_zerogluten");
define("DB_PASS", "DaoWfEH1nbrzNtYA");

// Fonction de connexion PDO
function getDb() {
    static $pdo = null;
    if ($pdo === null) {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
            $pdo = new PDO($dsn, DB_USER, DB_PASS, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
            ]);
        } catch (PDOException $e) {
            if (DEBUG_MODE) {
                die("Erreur de connexion : " . $e->getMessage());
            }
            die("Une erreur est survenue. Veuillez reessayer plus tard.");
        }
    }
    return $pdo;
}

// Fonction d echappement securise
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, "UTF-8");
}

// Annee courante
define("CURRENT_YEAR", date("Y"));
