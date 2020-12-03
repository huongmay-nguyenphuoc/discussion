<?php
$title = 'Connexion';
require_once '../includes/header.php';
require_once '../includes/functions.php';

if (isset($_POST['submit'])) {

    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    if (userExists($login) == 0) {
        $erreur = 'Cet utilisateur n\'existe pas';
    } elseif (passwordExists($_POST['login'], $_POST['password']) == 0) {
        $erreur = 'Vérifiez votre mot de passe';
    } else {
        createSession($login);
        header("location: profil.php");
    }
}
?>

<main class="valign-wrapper">
    <form class=" amber lighten-4 section container center" action="connexion.php" method="post">
        <div class="row">
            <div class="input-field col s12">
                <input id="login" name="login" type="text" required>
                <label for="login">Login</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input id="password" name="password" type="password" required>
                <label for="password">Password</label>
            </div>
        </div>

        <div class="row">
            <button class="btn waves-effect waves-light amber" type="submit" name="submit">Se connecter</button>
        </div>
        <?php if (isset($erreur)) : ?>
            <div class="container">
                <p class="red-text"><?php echo $erreur; ?></p>
            </div>
        <?php endif; ?>
    </form>
</main>

<?php require_once '../includes/footer.php'; ?>