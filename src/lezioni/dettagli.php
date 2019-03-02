<?php $lezione = getLezioneId($_GET['id']) ?>

<h1><?php echo $lezione->titolo; ?></h1>

<?php if ($utente->id == $lezione->idUtente): ?>
  <a href="../aggiungiMateriali/?id=<?php echo $_GET['id'] ?>">
    <button class="w3-button w3-theme-l2">Aggiungi Materiale</button>
  </a>
<?php endif; ?>

<?php $materiali = getMaterialiIdLezione($lezione->id); ?>
<?php foreach ($materiali as $materiale): ?>
  <div class="w3-panel w3-theme-l2">
    <a href="/App-Rendiamo/files/<?php echo $materiale->indirizzo ?>">
      <?php echo $materiale->indirizzo ?>
    </a>
  </div>
<?php endforeach; ?>

<?php print_r($lezione); ?>
