<?php //include 'classes/memo.class.php'; ?>
<?php include 'includes/autoload.inc.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Memory-PHP3</title>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <h1>Memory</h1>
  <div class="center">

    <?php
    //starten van sessie
    //oplaan van index anders steeds andere index
    session_start();
    if (isset($_SESSION["memory"])&&!isset($_GET["reset"])) {
      $memory = $_SESSION["memory"];
    }else {
      //anders maak nieuw abject
      $memory = new Memo();
    }
    //pakken van de click en opsturen
    if (isset($_GET["index"])) {
      $memory->click($_GET["index"]);
    }
    //printen van alles
    echo $memory;

    $_SESSION["memory"] = $memory;


    //als true is dan echo
    if ($memory->getWin()) {
      echo "<h1>GEWONNEN!</h1>";
    }

    ?>
  </div>
  <br><br>
  <button class="reset" onclick="location.href='http://localhost/php3.2/memory/?reset'">Reset</button>
</body>
</html>
