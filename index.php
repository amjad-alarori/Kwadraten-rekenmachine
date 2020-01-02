<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

// $num > 32; ook

for ($num = 1; $num++;){
  $kwadraat = $num * $num;
  if($kwadraat < 1000)
  echo("$num kwadraat is $kwadraat <br>");
  else {
  break;
  }
}

?>



</body>
</html>


