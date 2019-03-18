<?php
preg_match('/(\w+)\.\w+$/', $_SERVER['REQUEST_URI'], $match);
$match = $match[1];
?>
<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Jan Beneš ml.">
    <meta name="description" content="Web živnostníka Jana Beneše.">
    <meta name="keywords" content="elektikář, elektrikar, elektrika">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if($match == "index" or $match == null){ ?> <title>Jan Beneš – o firmě</title><?php } ?>
    <?php if($match == "sidlo"){ ?> <title>Jan Beneš – sídlo </title><?php } ?>
    <?php if($match == "prace"){ ?> <title>Jan Beneš – ukázka práce</title><?php } ?>
    <?php if($match == "certifikaty"){ ?> <title>Jan Beneš – moje certifikáty</title><?php } ?>
    <?php if($match == "kontakt"){ ?> <title>Jan Beneš – kontakt</title><?php } ?>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" type="image/svg" href="img/favicon.svg"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
    <body>
      <div class="grid">
