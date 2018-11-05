<nav>
    <h1>Jan Beneš - elektrika/voda</h1>
    <ul>
      <?php if($match == "index"){ ?> <li class="active">
      <?php } else { ?> <li> <?php }?>
      <a href="./index.php">O firmě</a></li>
      <?php if($match == "sidlo"){ ?> <li class="active">
      <?php } else { ?> <li> <?php }?>
      <a href="./sidlo.php">Sídlo</a></li>
      <?php if($match == "prace"){ ?> <li class="active">
      <?php } else { ?> <li> <?php }?>
      <a href="./prace.php">Ukázka práce</a></li>
      <?php if($match == "certifikaty"){ ?> <li class="active">
      <?php } else { ?> <li> <?php }?>
      <a href="./certifikaty.php">Certifikáty</a></li>
      <?php if($match == "kontakt"){ ?> <li class="active">
      <?php } else { ?> <li> <?php }?>
      <a href="./kontakt.php">Kontakt</a></li>
    </ul>
</nav>
