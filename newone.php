<?php
  echo "hello";
  $result = mysql_query("SELECT * FROM mydb WHERE ID=2");
	while($row = mysql_fetch_array($result)){
		echo $row['ID'] . " " . $row['NUM'];
	}
?>
