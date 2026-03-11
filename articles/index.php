<?php
$page_title = "Articles et conseils sans gluten";
$page_description = "Tous nos articles pour comprendre la maladie coeliaque, les farines sans gluten et reussir votre regime sans gluten.";
$current_page = "articles";
require_once __DIR__ . "/../includes/header.php";

$articles = [
    [
        "slug" => "tout-comprendre-maladie-coeliaque-2025",
        "titre" => "Tout comprendre sur la maladie coeliaque en 2025",
        "desc" => "La maladie coeliaque touche environ 1% de la population mondiale. Voici tout ce que vous devez savoir avec les dernieres avancees medicales.",
        "temps" => "8 min de lecture",
        "categorie" => "Sante",
        "emoji" => "🩺"
    ],
    [
        "slug" => "10-meilleures-farines-sans-gluten",
        "titre" => "Les 10 meilleures farines sans gluten et comment les utiliser",
        "desc" => "Par quoi remplacer la farine de ble ? Decouvrez une dizaine de farines sans gluten aux saveurs et proprietes tres variees.",
        "temps" => "6 min de lecture",
        "categorie" => "Cuisine",
        "emoji" => "🌾"
    ],
    [
        "slug" => "debuter-regime-sans-gluten-guide-complet",
        "titre" => "Debuter un regime sans gluten : guide complet",
        "desc" => "Vous venez d etre diagnostique(e) ? Ce guide complet vous accompagne de A a Z pour demarrer avec serenite.",
        "temps" => "7 min de lecture",
        "categorie" => "Guide",
        "emoji" => "📚"
    ]
];
?>

<div class="page-hero">
    <h1>Articles et conseils</h1>
    <p>Comprendre la maladie coeliaque, maitriser les farines sans gluten et reussir votre quotidien.</p>
</div>

<div class="section">
    <div class="recipes-grid">
        <?php foreach ($articles as $article): ?>
        <div class="recipe-card">
            <a href="/articles/<?php echo e($article["slug"]); ?>.php">
                <div class="recipe-img dessert" style="background: linear-gradient(135deg, #4A7C59, #2d5a3d);"><?php echo $article["emoji"]; ?></div>
                <div class="recipe-content">
                    <div class="recipe-meta">
                        <span>📖 <?php echo e($article["temps"]); ?></span>
                        <span>🏷️ <?php echo e($article["categorie"]); ?></span>
                    </div>
                    <h3><?php echo e($article["titre"]); ?></h3>
                    <p class="desc"><?php echo e($article["desc"]); ?></p>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once __DIR__ . "/../includes/footer.php"; ?>
