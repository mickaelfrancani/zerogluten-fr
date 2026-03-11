<?php
$page_title = "Recettes sans gluten";
$page_description = "Decouvrez toutes nos recettes sans gluten : desserts, pains, plats, crepes... Testees et approuvees par notre communaute.";
$current_page = "recettes";
require_once __DIR__ . "/../includes/header.php";

$recettes = [
    [
        "slug" => "tarte-aux-pommes-sans-gluten",
        "titre" => "Tarte aux pommes sans gluten",
        "desc" => "Une tarte aux pommes classique revisitee avec une pate sans gluten croustillante.",
        "temps" => "25 min prep + 40 min cuisson",
        "difficulte" => "Facile",
        "emoji" => "🥧",
        "type" => "dessert"
    ],
    [
        "slug" => "cookies-chocolat-sans-gluten",
        "titre" => "Cookies chocolat sans gluten",
        "desc" => "Des cookies moelleux au coeur fondant, avec de grosses pepites de chocolat.",
        "temps" => "15 min prep + 12 min cuisson",
        "difficulte" => "Facile",
        "emoji" => "🍪",
        "type" => "dessert"
    ],
    [
        "slug" => "pain-sans-gluten-sarrasin",
        "titre" => "Pain au sarrasin sans gluten",
        "desc" => "Un pain sans gluten avec du caractere ! Saveur rustique et noisettee.",
        "temps" => "20 min prep + 50 min cuisson",
        "difficulte" => "Intermediaire",
        "emoji" => "🥖",
        "type" => "pain"
    ],
    [
        "slug" => "crepes-legeres-sans-gluten",
        "titre" => "Crepes legeres sans gluten",
        "desc" => "Des crepes fines et souples qui rivalisent avec les crepes traditionnelles.",
        "temps" => "10 min prep + 20 min cuisson",
        "difficulte" => "Facile",
        "emoji" => "🥞",
        "type" => "dessert"
    ],
    [
        "slug" => "gratin-courgettes-sans-gluten",
        "titre" => "Gratin de courgettes sans gluten",
        "desc" => "Un gratin reconfortant et cremeux avec une bechamel a la farine de riz.",
        "temps" => "20 min prep + 35 min cuisson",
        "difficulte" => "Facile",
        "emoji" => "🥒",
        "type" => "plat"
    ]
];
?>

<div class="page-hero">
    <h1>Nos recettes sans gluten</h1>
    <p>Desserts, pains, plats : toutes nos recettes sont 100% sans gluten, testees et approuvees.</p>
</div>

<div class="section">
    <div class="recipes-grid">
        <?php foreach ($recettes as $recette): ?>
        <div class="recipe-card">
            <a href="/recettes/<?php echo e($recette["slug"]); ?>.php">
                <div class="recipe-img <?php echo e($recette["type"]); ?>"><?php echo $recette["emoji"]; ?></div>
                <div class="recipe-content">
                    <div class="recipe-meta">
                        <span>⏱️ <?php echo e($recette["temps"]); ?></span>
                        <span>📊 <?php echo e($recette["difficulte"]); ?></span>
                    </div>
                    <h3><?php echo e($recette["titre"]); ?></h3>
                    <p class="desc"><?php echo e($recette["desc"]); ?></p>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once __DIR__ . "/../includes/footer.php"; ?>
