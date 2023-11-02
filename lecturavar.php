<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Variables</title>
</head>
<body>
  <?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2> Variables por POST </h2>";
    foreach ($_POST as $variable => $valor) {
      echo "". $variable ."=". $valor ."<br>";
    }
  }else{
    echo "<h2> Variables por POST </h2>";
    foreach ($_GET as $variable => $valor) {
      echo "". $variable ."=". $valor ."<br>";
    }
    
  }
  ?>
</body>
</html>