<?php
$num = $_GET['num'];
$key = $_GET['key'];
$con = mysql_connect("10.10.26.58:3306","uoQqLyRr7lktUgwM","pSocJ34VnBzQOFgHW");
if(!$con) echo "connect Faile";
mysql_select_db("iwA4hU7YxaQfjb6n", $con);
if(!empty($key)){
	$result = mysql_query("SELECT * FROM mydb WHERE ID=1");
	$row = mysql_fetch_array($result);
	if($row['KEY']==$key) {
		mysql_query("UPDATE `mydb` SET `TRUE`=1 WHERE `ID`=1");
	}else{
		echo "wrong key";
	} 
}else{
	mysql_query("UPDATE `mydb` SET `TRUE`=0 WHERE `ID`=1");
}
mysql_close($con);

echo "hello";
?>
