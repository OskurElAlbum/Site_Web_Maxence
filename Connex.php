<html>
<head>
<meta charset="UTF-8">
<meta charset="utf-8" />
<link rel="Stylesheet" href="style.css">
<title>Insertion tuples</title>
</head>
<body>
<h1>MERCI</h1>
<?php
$Nom = $_POST["nom"];
$Prenom = $_POST["prenom"];
$mail = $_POST["email"];
$message =$_POST["message"];


$MaSqli=new mysqli("localhost", "root","", "portfolio");
mysqli_connect_error();
$requeteEnvoi = "INSERT INTO portfolio.identifiant VALUES(NULL,'$Nom','$Prenom','$mail','$message')";
$resultatEnvoi=$MaSqli->query($requeteEnvoi);
//echo($requeteEnvoi);
header("Refresh:3; url=index.php");
?>
</body>
</html>

