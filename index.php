<?php
$page_title = "Cuisiner sans gluten, aussi bon qu avant";
$page_description = "Recettes gourmandes testees, conseils experts et communaute bienveillante pour cuisiner et vivre sans gluten. Plus de 500 recettes et des guides complets.";
$current_page = "home";
require_once __DIR__ . "/includes/header.php";
?>

<!-- Hero -->
<div class="hero">
    <div class="hero-content">
        <div class="hero-welcome">🌾 Votre espace sans gluten</div>
        <h1>Cuisiner sans gluten,<br><em>aussi bon qu avant.</em></h1>
        <p>Recettes gourmandes testees, conseils experts et une communaute bienveillante pour chaque etape de votre parcours.</p>
        <div class="hero-cta">
            <a href="/recettes/" class="btn-primary">Explorer les recettes</a>
            <a href="/guide-debutant.php" class="btn-secondary">Je debute →</a>
        </div>
    </div>
    <div class="hero-img">🥗</div>
</div>

<!-- Trust Bar -->
<div class="trust">
    <div class="trust-item"><div class="num">1 sur 100</div><div class="lbl">personnes coeliaques en France</div></div>
    <div class="trust-item"><div class="num">500+</div><div class="lbl">recettes testees</div></div>
    <div class="trust-item"><div class="num">98%</div><div class="lbl">avis positifs</div></div>
    <div class="trust-item"><div class="num">8 000+</div><div class="lbl">abonnes newsletter</div></div>
</div>

<!-- Parcours -->
<div class="section">
    <div class="section-badge">✨ Par ou commencer ?</div>
    <div class="section-title">Un parcours fait pour vous</div>
    <div class="section-sub">Quel que soit votre point de depart, on a ce qu il vous faut.</div>
    <div class="parcours-grid">
        <a href="/guide-debutant.php" class="parcours-card" style="text-decoration:none;">
            <div class="parcours-icon">🆕</div>
            <span class="parcours-count">Guide complet</span>
            <h3>Je viens d etre diagnostique(e)</h3>
            <p>Vous venez d apprendre que vous etes coeliaque ou intolerant(e) au gluten ? Pas de panique. Notre guide vous accompagne pas a pas.</p>
            <span class="parcours-link">Lire le guide debutant →</span>
        </a>
        <a href="/recettes/" class="parcours-card" style="text-decoration:none;">
            <div class="parcours-icon">🍽️</div>
            <span class="parcours-count">5 recettes</span>
            <h3>Je cherche des recettes savoureuses</h3>
            <p>Tartes, pains, crepes, gratins, cookies... Toutes nos recettes sont 100% sans gluten, testees en cuisine.</p>
            <span class="parcours-link">Explorer les recettes →</span>
        </a>
        <a href="/articles/" class="parcours-card" style="text-decoration:none;">
            <div class="parcours-icon">💡</div>
            <span class="parcours-count">3 articles</span>
            <h3>Je veux tout comprendre</h3>
            <p>Maladie coeliaque, intolerance, farines : nos articles de fond vous donnent les cles pour comprendre.</p>
            <span class="parcours-link">Lire les conseils →</span>
        </a>
    </div>
</div>

<!-- Articles -->
<div class="section">
    <div class="ed-header">
        <div>
            <div class="section-badge">📰 A lire</div>
            <div class="section-title">A la une</div>
        </div>
        <a href="/articles/" class="see-all">Voir tous les articles →</a>
    </div>
    <div class="ed-grid">
        <a href="/articles/tout-comprendre-maladie-coeliaque-2025.php" class="art art-1">
            <div class="art-img"><span class="emoji">🍞</span></div>
            <div class="art-content">
                <div class="art-cat">Sante - 8 min de lecture</div>
                <h3>Tout comprendre sur la maladie coeliaque en 2025</h3>
                <p>Diagnostic, symptomes atypiques, regime strict : on vous livre la verite complete sur cette maladie auto-immune.</p>
            </div>
        </a>
        <a href="/articles/10-meilleures-farines-sans-gluten.php" class="art art-2">
            <div class="art-img"><span class="emoji">🥦</span></div>
            <div class="art-content">
                <div class="art-cat">Cuisine - Pratique</div>
                <h3>Les 10 meilleures farines sans gluten</h3>
            </div>
        </a>
        <a href="/articles/debuter-regime-sans-gluten-guide-complet.php" class="art art-3">
            <div class="art-img"><span class="emoji">🧁</span></div>
            <div class="art-content">
                <div class="art-cat">Guide - Complet</div>
                <h3>Debuter un regime sans gluten</h3>
            </div>
        </a>
        <a href="/recettes/cookies-chocolat-sans-gluten.php" class="art art-4">
            <div class="art-img"><span class="emoji">🍪</span></div>
            <div class="art-content">
                <div class="art-cat">Recette - Dessert</div>
                <h3>Cookies chocolat sans gluten</h3>
            </div>
        </a>
        <a href="/recettes/pain-sans-gluten-sarrasin.php" class="art art-5">
            <div class="art-img"><span class="emoji">🥖</span></div>
            <div class="art-content">
                <div class="art-cat">Recette - Boulangerie</div>
                <h3>Pain au sarrasin sans gluten</h3>
            </div>
        </a>
    </div>
</div>

<!-- Temoignages -->
<div class="section">
    <div class="section-badge">💬 Communaute</div>
    <div class="section-title">Ils nous font confiance</div>
    <div class="section-sub">Des milliers de personnes nous lisent chaque mois</div>
    <div class="temo-grid">
        <div class="temo">
            <div class="temo-stars">⭐⭐⭐⭐⭐</div>
            <p>"Quand on m a annonce le diagnostic, j ai cru que ma vie sociale etait finie. Grace a zerogluten.fr, j ai retrouve le plaisir de cuisiner et meme d inviter des amis a diner."</p>
            <div class="temo-author">
                <div class="temo-avatar ta-1">👩</div>
                <div><div class="temo-name">Sophie, 34 ans</div><div class="temo-detail">Diagnostiquee coeliaque il y a 2 ans</div></div>
            </div>
        </div>
        <div class="temo">
            <div class="temo-stars">⭐⭐⭐⭐⭐</div>
            <p>"Ce qui m a convaincu, c est la rigueur scientifique des articles. On vous explique vraiment ce qui se passe dans votre corps. Et les recettes de pain sont bluffantes."</p>
            <div class="temo-author">
                <div class="temo-avatar ta-2">👨</div>
                <div><div class="temo-name">Marc, 52 ans</div><div class="temo-detail">Intolerant au gluten, cuisinier amateur</div></div>
            </div>
        </div>
        <div class="temo">
            <div class="temo-stars">⭐⭐⭐⭐⭐</div>
            <p>"Mon fils de 7 ans est coeliaque. Les cookies et les crepes de zerogluten.fr sont devenus ses preferes, et personne ne voit la difference !"</p>
            <div class="temo-author">
                <div class="temo-avatar ta-3">👩‍👦</div>
                <div><div class="temo-name">Amandine, 28 ans</div><div class="temo-detail">Maman d un enfant coeliaque</div></div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
