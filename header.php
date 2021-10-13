<header >
    <div class="container header">
        <div class="nav-section">
            <h1>MediaPortal</h1>
        </div>
        <nav>
            <a href="<?php echo $base_url; ?>/index.php">Home</a> |
            <a href="<?php echo $base_url; ?>/contact.php">Contact</a>
        </nav>
        <body onload="startTime()">
        <div class="nav-section">
           <h2 class="time-header" id="txt"></h2> 
        </div>    
        <script>
        function startTime() {
        const today = new Date();
        let h = today.getHours();
        let m = today.getMinutes();
        m = checkTime(m);
        document.getElementById('txt').innerHTML =  h + ":" + m;
        setTimeout(startTime, 1000);
        }

        function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
        }
    </script>
    </div>
</header>
