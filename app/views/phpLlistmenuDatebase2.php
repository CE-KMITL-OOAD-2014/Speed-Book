<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<?php
	mysql_connect("localhost","root","root") or die(mysql_error());
	mysql_select_db("mydatabase");
?>
<body>
	<?php
		echo $_POST["lmName1"];
		
		echo "<hr>";

		$strSQL = "SELECT * FROM customer WHERE CustomerID = '".$_POST["lmName1"]."' ";
		$objQuery = mysql_query($strSQL);
		$objResult = mysql_fetch_array($objQuery);

		echo $objResult["Name"];
	?>
</body>
</html>
<?php
	mysql_close();
?>