<?php
  $num = $_GET['num'];
  $key = rand(100000,999999);
  $url = "painemriddle.daoapp.io/conf?num=".$num."&&key=".$key;
  echo $url;
?>
