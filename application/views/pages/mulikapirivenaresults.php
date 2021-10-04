<h2><?= $title; ?></h2><br>
<?php
  if (!isset($_SESSION["alindex"])){
    redirect('/');
  }
?>