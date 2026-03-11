<?php
require_once __DIR__ . "/config.php";

// Variables par defaut
$page_title = $page_title ?? "Recettes et conseils sans gluten";
$page_description = $page_description ?? "Recettes gourmandes testees, conseils experts et communaute bienveillante pour cuisiner et vivre sans gluten.";
$current_page = $current_page ?? "";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($page_title); ?> | <?php echo e(SITE_NAME); ?></title>
    <meta name="description" content="<?php echo e($page_description); ?>">
    <link rel="canonical" href="<?php echo e(SITE_URL . $_SERVER["REQUEST_URI"]); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🌿</text></svg>">
</head>
<body>
<header>
    <a href="/" class="logo">zero<span>gluten</span>.fr 🌿</a>
    <nav>
        <a href="/recettes/" class="<?php echo $current_page === "recettes" ? "active" : ""; ?>">🥗 Recettes</a>
        <a href="/articles/" class="<?php echo $current_page === "articles" ? "active" : ""; ?>">📖 Articles</a>
        <a href="/guide-debutant.php" class="<?php echo $current_page === "guide" ? "active" : ""; ?>">🆕 Je debute</a>
        <a href="/a-propos.php" class="<?php echo $current_page === "apropos" ? "active" : ""; ?>">💚 A propos</a>
    </nav>
    <button class="search-btn">🔍 Rechercher</button>
</header>
