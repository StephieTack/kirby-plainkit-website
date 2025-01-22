<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This footer snippet is reused in all templates.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
  </main>

  <footer class="footer">
    <div class="grid">
      <div class="column" style="--columns: 7">
        <h2>Abonnieren</h2>
        <p>
        Melde dich mit deiner E-Mail-Adresse an, um Neuigkeiten und Updates zu erhalten.
        </p>
        <input placeholder="E-Mail-Adresse"/>
        <button>Registrieren</button>
        <p>
        Wir respektieren deine Privatsphäre.
        </p>
      </div>
      <div class="column" style="--columns: 3">
        <h2>Website-Verzeichnis</h2>
        <ul>
          <?php foreach ($site->children()->listed() as $example): ?>
          <li><a href="<?= $example->url() ?>"><?= $example->title()->esc() ?></a></li>
          <?php endforeach ?>
        </ul>
      </div>
      <div class="column" style="--columns: 2">
        <h2>Social Media</h2>
        <ul>
          <li><a href="https://getkirby.com">Instagram</a></li>
          <li><a href="https://getkirby.com/docs">LinkedIn</a></li>
          <li><a href="https://forum.getkirby.com">Twitter</a></li>
        </ul>
      </div>
    </div>

    </footer>
  <?php snippet('reseda', ['class' => 'footer-reseda']) ?>



  <!-- <?= js([
    'assets/js/prism.js',
    'assets/js/lightbox.js',
    'assets/js/index.js',
    '@auto'
  ]) ?> -->

</body>
</html>
