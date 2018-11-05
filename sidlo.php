<?php
include './parts/head.php';
include './parts/nav.php';
 ?>
      <header>
        <h2>Zde mě můžete najít</h2>
      </header>
      <main>
        <div id="m"></div>
        <script type="text/javascript" src="https://api.mapy.cz/loader.js"></script>
        <script type="text/javascript">Loader.load(null, {pano: true});</script>
        <script type="text/javascript" src="./js/mapyapi.js"></script>
<?php
include './parts/foot.php';
 ?>
