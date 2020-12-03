<?php $title = 'Inscription';
require_once '../includes/header.php';
require_once '../includes/functions.php';


if (isset($_POST['submit'])) {

    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    $passwordverif = htmlspecialchars($_POST['passwordverif']);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    if (maxLenght($password, $login) == 1) {
        $erreur = "Le nombre de caractères est trop élevé";
    } elseif (passwordConfirm($password, $passwordverif) == 0) {
        $erreur = "Les mots de passe ne correspondent pas";
    } elseif (userExists($login) == 1) {
        $erreur = "Cet identifiant existe déjà";
    } else {
        createUser($login, $hashed_password);
        header("location: connexion.php");
    }
}
?>

<main class="valign-wrapper">
    <form class=" amber lighten-4 section container center" action="inscription.php" method="post">
        <div class="row center">
            <div class="input-field col s12 m6">
                <input id="login" name="login" type="text" required>
                <label for="login">Login</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m6">
                <input id="password" name="password" type="password" required>
                <label for="password">Password</label>
            </div>
            <div class="input-field col s12 m6">
                <input id="passwordverif" name="passwordverif" type="password" required>
                <label for="passwordverif">Confirmer le mot de passe</label>
            </div>
        </div>

        <div class="row">
            <button class="btn waves-effect waves-light amber" type="submit" name="submit">S'inscrire</button>
        </div>
        <?php if (isset($erreur)) : ?>
            <div class="container">
                <p class="red-text"><?php echo $erreur; ?></p>
            </div>
        <?php endif; ?>
    </form>
</main>

<?php require_once '../includes/footer.php'; ?>