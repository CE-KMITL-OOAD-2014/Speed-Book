<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<?php
	mysql_connect("localhost","root","root") or die(mysql_error());
	mysql_select_db("mydatabase");
?>
<body>
	<form action="phpLlistmenuDatebase2.php" method="post" name="form1">
		List Menu<br>
		  <select name="lmName1">
			<option value=""><-- Please Select Item --></option>
			<?php
			$strSQL = "SELECT * FROM customer ORDER BY CustomerID ASC";
			$objQuery = mysql_query($strSQL);
			while($objResuut = mysql_fetch_array($objQuery))
			{
			?>
			<option value="<?php echo $objResuut["CustomerID"];?>"><?php echo $objResuut["CustomerID"]." - ".$objResuut["Name"];?></option>
			<?php
			}
			?>
		  </select>
		<input name="btnSubmit" type="submit" value="Submit">
	</form>
</body>
</html>
<?php
	mysql_close();
?>