<?php
  $num = $_GET['num'];
  $key = rand(100000,999999);
  $url = "painemriddle.daoapp.io/conf.php?num=".$num."&&key=".$key;
  $con = mysql_connect("10.10.26.58:3306","uoQqLyRr7lktUgwM","pSocJ34VnBzQOFgHW");
  if(!$con) echo "connect Faile";
  mysql_select_db("iwA4hU7YxaQfjb6n", $con);
  mysql_query("UPDATE `mydb` SET `KEY`='{$key}' WHERE `NUM`='{$num}'");
  mysql_close($con);
  echo $url;
?>
