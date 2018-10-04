<?php

session_start();

if (!isset($_SESSION)){
  echo "Merci de vous connecter!";
  ?>
  <button type="submit" value="Connexion"><a href="./index.php">Connexion</a></button>
  <?php
 } else {
   $_SESSION['firstname'] = $_POST['firstname'] ;
   $_SESSION['lastname'] = $_POST['lastname'] ;
   echo "Bonjour, " . $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] . "!<br><br>";
   ?>

   
   <form method="post" action="index.php">

     <input type="checkbox" name="section1" value="s1"><section class="1">
     <label>section1</label><br />

     <input type="checkbox" name="section2" value="s2"><section class="2">
     <label>section2</label><br />

     <input type="checkbox" name="section3" value="s3"><section class="3">
     <label>section3</label><br />

     <input type="submit" value="Save">
   </form>

   <button type="submit" value="Déconnexion"><a href="./déconnexion.php">Déconnexion</a></button>
   <?php
 }

?>
