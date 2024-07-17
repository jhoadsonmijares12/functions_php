<?php

// funcion cabecera 
function cabecera ($titulo,$descripcion,$autor,$estilo){
  ?>
  <html>
    <head>
      <title><?php echo $titulo; ?> </title>
      <meta charset="UTF-8">
      <meta name="description" content="<?php echo $descripcion; ?>">
      <meta name="author" content="<?php echo $autor; ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="<?php echo $estilo; ?>">
    </head>
  <?php
}

function pie (){
  //echo "</html>";
  ?>
  </body>
  </html>
  <?php
}
function cabeza ($frente){
  ?>
  <header>
  <img src="<?php echo $frente; ?>" >
  </header>
  <?php
}
function suma($n1,$n2,$c1,$c2){
  
  if($c1==$c2){
    return ($n1+$n2);
  } else {
    return "No coincide el captcha";
  }
}

function cuerpo(){
  ?> 
  <body>
    <form method="post" action="">
    numero 1 <input type="number" name="n1">
    <br>
    numero 2 <input type="number" name="n2">
    <br>
    <input type="text" value="<?php echo $num_ran=rand(10000,99999);?>" readonly>
    <br>
    Coloque el codigo que ve:
    <br> 
    <input type="text" name="cap">
    <input type="hidden" name="codigo" value="<?php echo $num_ran;?> ">
    <br>
    <input type="submit" value="sumar">
    </form>
  <?php
}
?>