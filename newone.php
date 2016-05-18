<?php
  echo "hello";
  $con = mysql_connect("10.10.26.58:3306","uoQqLyRr7lktUgwM","pSocJ34VnBzQOFgHW");
  if(!$con){
	  echo "connect Faile";	
  }else{
	  mysql_select_db("iwA4hU7YxaQfjb6n", $con);
	}
	mysql_query("UPDATE  mydb SET TRUE=1 WHERE ID=1");
	mysql_close($con);
?>
