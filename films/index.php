<!doctype html>
<html class="no-js" lang="">

<?php require_once '../head.php' ?>

<body>

  <?php require_once '../header.php' ?>

  <main>
    <div class="container selection">

        <div class="welcome-message">
            <h2>Films</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit at sit odio aliquam est, molestiae tempora, esse nulla necessitatibus quisquam animi repellendus libero, unde iure ullam debitis possimus sapiente porro.</p>
        </div>
        
        <div class="grid">
            <div class="grid-item" style="background-image: url('<?php echo $base_url; ?>/img/films/movies.png')">
                <div class="item-text"><a href="https://www.movies.nl">Movies.nl</a></div>
            </div>
            <div class="grid-item" style="background-image: url('<?php echo $base_url; ?>/img/films/videoland.jpg')">
                <div class="item-text"><a href="https://www.videoland.com/nl/">Videoland</a></div>
            </div>
            <div class="grid-item" style="background-image: url('<?php echo $base_url; ?>/img/films/netflix.jpg')">
                <div class="item-text"><a href="https://www.netflix.com/browse">Netflix</a></div>
            </div>
            <div class="grid-item" style="background-image: url('<?php echo $base_url; ?>/img/films/imbd.png')">
                <div class="item-text"><a href="https://www.imdb.com">IMBD</a></div>
            </div>
            <div class="grid-item" style="background-image: url('<?php echo $base_url; ?>/img/films/jamesbond.jpg')">
                <div class="item-text"><a href="<?php echo $base_url; ?>/films/jamesbond/index.php">James Bond(Roger Moore)</a></div>
            </div>
            <div class="grid-item" style="background-image: url('<?php echo $base_url; ?>/img/films/timothydalton.jpg')">
                <div class="item-text"><a href="<?php echo $base_url; ?>/films/personages/timothydalton.php">Timothy Dalton</a></div>
            </div>
            <div class="grid-item" style="background-image: url('<?php echo $base_url; ?>/img/films/darthvader.jpg')">
                <div class="item-text"><a href="<?php echo $base_url; ?>/films/personages/darthvader.php">Darth Vader</a></div>
            </div>
            <div class="grid-item" style="background-image: url('<?php echo $base_url; ?>/img/films/lukeskywalker.png')">
                <div class="item-text"><a href="<?php echo $base_url; ?>/films/personages/lukeskywalker.php">Luke Skywalker</a></div>
            </div>
        </div>

    </div>

  </main>

  <?php require_once '../footer.php' ?>

</body>

</html>
