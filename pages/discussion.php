<?php $title = 'Discussion';
require_once '../includes/header.php';
require_once '../includes/functions.php';

if (!isset($_SESSION['id'])) {
    header("location: connexion.php");
} else {
    $res = displayChat();
}

if (isset($_POST['submit'])) {
    $message = htmlspecialchars($_POST['message']);
    sendMessage($message);
    header("location: discussion.php");
}
?>


<main id="messMain">
    <?php
    foreach ($res as $row) {
        echo '<section class="section center">';

        if ($row['login'] == $_SESSION['login']) { //affichage à droite des messages envoyés par l'utilisateur connecté
            echo '<div class="row right red lighten-4">';
        } else {
            echo '<div class="row amber left lighten-4">';
        }

        echo '<div class="col s12 center"><p> le '.$row['date'].', <em>'.$row['login'].'</em> a dit : '.$row['message'].'</p></div>
                  </div>
              </section>';
    }
    ?>

    <article class="container">
        <div class="row">
            <form class="col m12  red lighten-3" action="discussion.php" method="post">
                <div class="row center valign-wrapper">
                    <div class="input-field col m10">
                        <textarea id="message" name="message" class="materialize-textarea" data-length="140"></textarea>
                        <label class="white-text" for="message">message</label>
                    </div>
                    <div class="input-field col m2">
                        <button class="btn waves-effect waves-light red" type="submit" name="submit">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
    </article>
</main>


<?php require_once '../includes/footer.php'; ?>