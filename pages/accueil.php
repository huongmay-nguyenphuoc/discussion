<main>
    <div class="section ">
        <div class="container">

            <div class="row">
                <div class="col s12">
                    <div class="card-panel amber lighten-3 center">
                        <span class="blue-text text-darken-3">Bienvenue sur <b>SAMOURAT</b>, le site dédié aux rats samouraïs.</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m6">
                    <div class="card amber lighten-4">
                        <?php if (isset($_SESSION['id'])) : ?>
                            <div class="card-content blue-text text-darken-4">
                                <span class="card-title"><b>CHAT</b></span>
                                <p>Welcome back ! </p>
                            </div>
                            <div class="card-action amber lighten-2">
                                <a class="blue-text text-accent-3" href="pages/discussion.php">Rejoindre le chat</a>
                            </div>
                        <?php else : ?>
                            <div class="card-content blue-text text-darken-4">
                                <span class="card-title"><b>CHAT</b></span>
                                <p>Pour rejoindre la salle de chat, veuillez vous : </p>
                            </div>
                            <div class="card-action amber lighten-2">
                                <a class="blue-text text-accent-3" href="pages/inscription.php">inscrire</a>
                                <a class="blue-text text-accent-3" href="pages/connexion.php">connecter</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/rats_jap_the_final.png">
                            <span class="card-title">Deux samourats buvant du thé</span>
                        </div>
                        <div class="card-content amber lighten-3">
                            <p>credit: maiathoustra</p>
                        </div>
                        <div class="card-action amber lighten-4">
                            <a class="blue-text" href="#">Gallery</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m10">
                    <div class="card-panel amber lighten-3 ">
                        <span class="blue-text text-darken-3 valign-wrapper">Actus : Le site se prépare pour les fêtes de fin d'année !<i class="material-icons">favorite</i></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>