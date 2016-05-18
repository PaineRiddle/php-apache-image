<?php
  echo "hello";
  $con = mysql_connect("10.10.26.58:3306","uoQqLyRr7lktUgwM","pSocJ34VnBzQOFgHW");
  mysql_select_db("iwA4hU7YxaQfjb6n", $con);
  $result = mysql_query("SELECT * FROM mydb WHERE ID=2");
	while($row = mysql_fetch_array($result)){
		echo $row['ID'] . " " . $row['NUM'];
	}
?>
