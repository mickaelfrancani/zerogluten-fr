<?php
$page_title = "Nous contacter";
$page_description = "Une question, une suggestion ou une proposition de collaboration ? Ecrivez-nous, nous lisons chaque message avec attention.";
$current_page = "contact";

$success = false;
$errors = [];
$form_name = '';
$form_email = '';
$form_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Honeypot anti-spam : champ caché — si rempli = bot
    if (!empty($_POST['website'])) {
        $success = true; // Rejet silencieux
    } else {

        // Rate limiting par IP : max 3 soumissions par heure
        $ip = $_SERVER['REMOTE_ADDR'];
        $rate_file = '/tmp/contact_rate_' . md5($ip) . '.json';
        $now = time();
        $window = 3600;
        $max = 3;
        if (file_exists($rate_file)) {
            $data = json_decode(file_get_contents($rate_file), true);
            $data['hits'] = array_values(array_filter($data['hits'], fn($t) => $t > $now - $window));
            if (count($data['hits']) >= $max) {
                $errors[] = "Trop de messages. Réessayez plus tard.";
            }
        } else {
            $data = ['hits' => []];
        }

        if (empty($errors)) {
            $form_name    = trim($_POST['name'] ?? '');
            $form_email   = trim($_POST['email'] ?? '');
            $form_message = trim($_POST['message'] ?? '');

            if (empty($form_name) || strlen($form_name) < 2) {
                $errors[] = "Votre nom doit comporter au moins 2 caracteres.";
            }
            if (empty($form_email) || !filter_var($form_email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Veuillez saisir une adresse email valide.";
            }
            if (empty($form_message) || strlen($form_message) < 10) {
                $errors[] = "Votre message doit comporter au moins 10 caracteres.";
            }

            // Blocage des URLs dans le message
            if (!empty($form_message) && preg_match('/https?:\/\/|telegra\.ph|cut\.gl/i', $form_message)) {
                $errors[] = "Les URLs ne sont pas autorisees dans le message.";
            }

            if (empty($errors)) {
                // Enregistrer le hit de rate limiting
                $data['hits'][] = $now;
                file_put_contents($rate_file, json_encode($data));

                $to      = 'contact@zerogluten.fr';
                $subject = '=?UTF-8?B?' . base64_encode('[zerogluten.fr] Message de ' . $form_name) . '?=';
                $body    = "Nom : " . $form_name . "\n"
                         . "Email : " . $form_email . "\n\n"
                         . "Message :\n" . $form_message . "\n";
                $headers = "From: noreply@zerogluten.fr\r\n"
                         . "Reply-To: " . $form_email . "\r\n"
                         . "Content-Type: text/plain; charset=UTF-8\r\n"
                         . "X-Mailer: PHP/" . phpversion();

                if (mail($to, $subject, $body, $headers)) {
                    $success = true;
                    $form_name = $form_email = $form_message = '';
                } else {
                    $errors[] = "Une erreur est survenue lors de l envoi. Veuillez reessayer plus tard.";
                }
            }
        }

    } // fin honeypot else
}

require_once __DIR__ . "/includes/header.php";
?>

<style>
.contact-wrap {
    max-width: 720px;
    margin: 0 auto;
    padding: 60px 44px;
}
.contact-form {
    background: #fff;
    border-radius: 24px;
    padding: 44px;
    border: 2px solid #ede8e0;
    box-shadow: 0 4px 24px rgba(44,36,22,0.07);
    margin-top: 40px;
}
.contact-form label {
    display: block;
    font-weight: 700;
    font-size: 14px;
    color: #4A7C59;
    margin-bottom: 6px;
    margin-top: 20px;
}
.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 13px 18px;
    border-radius: 12px;
    border: 2px solid #ede8e0;
    font-size: 15px;
    font-family: "Lato", sans-serif;
    color: #2C2416;
    background: #faf8f4;
    transition: border-color 0.2s;
}
.contact-form input:focus,
.contact-form textarea:focus {
    outline: none;
    border-color: #4A7C59;
    background: #fff;
}
.contact-form textarea {
    min-height: 150px;
    resize: vertical;
}
.contact-form .submit-btn {
    margin-top: 28px;
    width: 100%;
    background: #4A7C59;
    color: #fff;
    border: none;
    border-radius: 32px;
    padding: 16px 36px;
    font-size: 16px;
    font-weight: 700;
    font-family: "Lato", sans-serif;
    cursor: pointer;
    box-shadow: 0 4px 16px rgba(74,124,89,0.3);
    transition: transform 0.2s;
}
.contact-form .submit-btn:hover {
    transform: translateY(-2px);
}
.alert-success {
    background: #e8f5e9;
    border: 2px solid #4A7C59;
    border-radius: 14px;
    padding: 18px 24px;
    color: #2e7d32;
    font-weight: 600;
    margin-bottom: 24px;
}
.alert-error {
    background: #fdecea;
    border: 2px solid #e57373;
    border-radius: 14px;
    padding: 18px 24px;
    color: #c62828;
    margin-bottom: 24px;
}
.alert-error ul { margin: 8px 0 0 20px; }
.contact-info {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-top: 48px;
}
.contact-info-card {
    background: #fff;
    border-radius: 20px;
    padding: 28px;
    border: 2px solid #ede8e0;
    text-align: center;
}
.contact-info-card .icon { font-size: 32px; margin-bottom: 12px; }
.contact-info-card h3 {
    font-family: "Playfair Display", serif;
    font-size: 16px;
    color: #2C2416;
    margin-bottom: 8px;
}
.contact-info-card p { font-size: 14px; color: #7a6a54; line-height: 1.6; }
@media (max-width: 600px) {
    .contact-wrap { padding: 40px 20px; }
    .contact-form { padding: 28px 20px; }
    .contact-info { grid-template-columns: 1fr; }
}
</style>

<div class="page-hero">
    <h1>Nous contacter</h1>
    <p>Une question, une recette a partager, une suggestion ? On vous lit.</p>
</div>

<div class="contact-wrap">

    <?php if ($success): ?>
    <div class="alert-success">
        ✅ Votre message a bien ete envoye ! Nous vous repondrons dans les meilleurs delais.
    </div>
    <?php endif; ?>

    <?php if (!empty($errors)): ?>
    <div class="alert-error">
        <strong>Veuillez corriger les erreurs suivantes :</strong>
        <ul>
            <?php foreach ($errors as $err): ?>
                <li><?php echo htmlspecialchars($err, ENT_QUOTES, 'UTF-8'); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endif; ?>

    <div class="contact-form">
        <p style="color:#7a6a54; margin-bottom:8px;">Nous lisons chaque message et repondons avec attention. Temps de reponse habituel : 1 a 3 jours ouvrés.</p>
        <form method="POST" action="/contact">
            <!-- Honeypot anti-spam : ne pas remplir -->
            <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">

            <label for="name">Votre nom *</label>
            <input type="text" id="name" name="name" placeholder="Votre prenom ou pseudo"
                   value="<?php echo htmlspecialchars($form_name, ENT_QUOTES, 'UTF-8'); ?>"
                   required maxlength="100">

            <label for="email">Votre email *</label>
            <input type="email" id="email" name="email" placeholder="votre@email.fr"
                   value="<?php echo htmlspecialchars($form_email, ENT_QUOTES, 'UTF-8'); ?>"
                   required maxlength="200">

            <label for="message">Votre message *</label>
            <textarea id="message" name="message" placeholder="Votre message..."
                      required maxlength="5000"><?php echo htmlspecialchars($form_message, ENT_QUOTES, 'UTF-8'); ?></textarea>

            <button type="submit" class="submit-btn">📨 Envoyer le message</button>
        </form>
    </div>

    <div class="contact-info">
        <div class="contact-info-card">
            <div class="icon">🥗</div>
            <h3>Suggestions de recettes</h3>
            <p>Vous avez une recette sans gluten a partager ? On adore decouvrir vos creations.</p>
        </div>
        <div class="contact-info-card">
            <div class="icon">🤝</div>
            <h3>Collaborations</h3>
            <p>Marques, dieteticiens, associations : parlons-en via ce formulaire.</p>
        </div>
        <div class="contact-info-card">
            <div class="icon">🐛</div>
            <h3>Signaler une erreur</h3>
            <p>Une information incorrecte, un lien casse ? Merci de nous le signaler.</p>
        </div>
        <div class="contact-info-card">
            <div class="icon">💬</div>
            <h3>Questions generales</h3>
            <p>Tout autre sujet : nous lisons et repondons a chaque message.</p>
        </div>
    </div>

</div>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
