<!doctype html>
<html class="no-js" lang="">

<?php require_once '../head.php' ?>

<body>

  <?php require_once '../header.php' ?>

  <main>
    <div class="container selection">

        <div class="welcome-message">
            <h2>Boeken</h2>
            <p>Een boek in traditionele zin is een samengevoegde hoeveelheid papier met tekst, afbeeldingen of allebei. Daarnaast wordt met de term de betreffende informatie, of een soortgelijke verzameling informatie, aangeduid ('een boek schrijven', 'een boek downloaden'). Hier is een lijst met boeken</p>
        </div>
        
        <div class="grid">
            <div class="grid-item" style="background-image: url('<?php echo $base_url; ?>/img/boeken/zuurstofschuld.jpeg')">
                <div class="item-text"><a href="<?php echo $base_url; ?>/boeken/boekenlijst/zuurstofschuld.php">Zuurstofschuld</a></div>
            </div>
            <div class="grid-item" style="background-image: url('<?php echo $base_url; ?>/img/boeken/klifi.jpeg')">
                <div class="item-text"><a href="<?php echo $base_url; ?>/boeken/boekenlijst/klifi.php">KliFi</a></div>
            </div>
            <div class="grid-item" style="background-image: url('<?php echo $base_url; ?>/img/boeken/amir.jpeg')">
                <div class="item-text"><a href="<?php echo $base_url; ?>/boeken/boekenlijst/amir.php">Amir</a></div>
            </div>
            <div class="grid-item" style="background-image: url('<?php echo $base_url; ?>/img/boeken/alles-is-weg.jpeg')">
                <div class="item-text"><a href="<?php echo $base_url; ?>/boeken/boekenlijst/allesisweg.php">Alles is weg</a></div>
            </div>
            
        </div>

    </div>

  </main>

  <?php require_once '../footer.php' ?>

</body>

</html>
