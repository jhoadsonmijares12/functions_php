<?php
  require "function.php";
  cabecera("Maquica 2021","Empresa que se encarga de la logistica y el trasnporte de carga pesada, asi como de la logistica de la misma.","Jhoadson mijares","style2.css");
  cabeza("https://www.sanyeurope.com/wp-content/uploads/2019/02/SANY_SRSC4535G_Reachstacker-e1550140682363.jpg");
  cuerpo();
  echo "Resultado= ".suma(@$_POST['n1'], @$_POST['n2'],$_POST['cap'],$_POST['codigo']);
  pie();
?>