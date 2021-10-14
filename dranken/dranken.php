<!doctype html>
<html class="no-js" lang="">

<?php require_once '../head.php' ?>

<body>

  <?php require_once '../header.php' ?>

  <main>
    <div class="container">

      <div class="welcome-text">
        <h1>Dranken</h1>
        <p>Hierop vindt je alle je favorieten onderwerpen over Dranken. </p>
      </div>
      
      <div class="grid-container">
        <div class="grid-item">
            <i class="fas fa-tools"></i>
            <h2><a href="<?php echo $base_url; ?>/dranken/frisdranken/frisdrank.php" class="link">Frisdranken</a></h2>
        </div>
        <div class="grid-item">
            <h2><a href="<?php echo $base_url; ?>/dranken/warmedranken/warmedranken.php" class="link">Warme Dranken</a></h2>   
        </div>      
      </div>


    </div>

    
  </main>

  <?php require_once '../footer.php' ?>

</body>

</html>
