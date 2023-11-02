<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Bienvenido <?php echo $_GET["nombres"]?></title>
</head>
<body>
  <h2><?php echo "Bienvenido Señor ".$_GET["nombres"]?></h2>
  <?php echo "Su correo es ".$_GET["email"]?><br>
</body>
</html>