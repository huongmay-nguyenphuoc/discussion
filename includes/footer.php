  <footer class="page-footer amber lighten-2">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5>Informations de session :</h5>
          <?php if (isset($_SESSION['login'])) : ?>
            <p>Session active : <?php echo $_SESSION['login']; ?><br> Depuis le : <?php echo $_SESSION['date']; ?></p>
          <?php else : ?>
            <p>Vous n'êtes pas connecté.e</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2020 - Samourat
        <a class="right right-align" href="https://www.srfa.info/">SRFA<br>Société du Rat Francophone et de ses Amateurs</a>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="js/init.js"></script>
  <script src="../js/init.js"></script>
</body>

</html>