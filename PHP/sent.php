
<link rel="stylesheet" href="/reset.css">
<link rel="stylesheet" href="/Shop_Page/style_shop.css">
<link rel="stylesheet" href="styleform.css">
<script src="../base/base.js"></script>

<?php
$nom = $_POST['name'];
$mail = $_POST['email'];
include 'header.php';
echo "<p class='centered_form'> Bonjour $nom, nous avons bien enregistré $mail à notre newsletter !</br></p>";
echo "<p class='centered_form'> Voulez vous envoyer un message a notre équipe ?</p> </br>";


echo '<form action="sent.php" class="message_textarea"> <textarea name="message" id="message" rows="5" cols="100" class="placeholder_form"></textarea>
<input type="button" value="Envoyer" class="form_button"></form> ';
echo "<hr>";
include "footer.php";
