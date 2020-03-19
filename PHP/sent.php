
<link rel="stylesheet" href="/reset.css">
<link rel="stylesheet" href="/Shop_Page/style_shop.css">
<?php
$nom = $_GET['name'];
$mail = $_GET['email'];
include 'header.php';
echo "<p> Bonjour $nom, nous avons bien enregistré $mail à notre newsletter !</p>";
include "footer.php";