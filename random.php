<html>
<meta http-equiv="refresh" content="5" />
<head>
	<?php 
		require_once('mysqli_connect.php');
		if (!$_GET)
		{
			
		}
		else if (isset($_GET["BEAT"]))
		{
			$BEAT = $_GET["BEAT"];
			$query = "UPDATE data set BEAT = $BEAT, LAT = 11.0473459, _LONG = 106.6704078 where ID = 'HK1'";
			$result = mysqli_query($dbc,$query);
			if ($result) 
			{
				echo "add";
			}
			if ($BEAT < 60) 
			{
				$query = "UPDATE data set HEART_STATE = 'TIM DAP QUA CHAM', STATE = 0 where ID='HK1'";
			}
			else if ($BEAT > 100) 
			{
				$query = "UPDATE data set HEART_STATE_STATE = 'TIM DAP NHANH', STATE = 0 where ID='HK1'";
			}
			else if (($BEAT >= 60) && ($BEAT <= 100))
			{
				$query = "UPDATE data set HEART_STATE = 'TIM DAP BINH THUONG', STATE = 1 where ID='HK1'";
			}
			$result = mysqli_query($dbc,$query);
			if ($result)
			{
				echo 'UPDATED\n';
			}
		}
		else if (isset($_GET["STATE"]))
		{
			$STATE = $_GET["STATE"];
			$query = "UPDATE data set STATE = $STATE, LAT = 11.0473459, _LONG = 106.6704078 where ID = 'HK1'";
			$result = mysqli_query($dbc,$query);
			if ($result) 
			{
				echo "STATE ADD";
			}
		}
	?>
</head>
<body>
<form action = "random.php" method = "get">
	<input type = "text" id = "BEAT" name = "BEAT" value = "<?php echo(rand(85,100)); ?>">
	<input type="submit" value="Submit"> 
</form>

<form action = "random.php" method = "get">
	<input type = "text" id = "BEAT" name = "BEAT" value = "<?php echo(rand(65,84)); ?>">
	<input type="submit" value="Submit"/> 
</form>

<form action = "random.php" method = "get">
	<input type = "text" id = "STATE" name = "STATE" value = "0">
	<input type="submit" value="Submit"/> 
</form>

<form action = "random.php" method = "get">
	<input type = "text" id = "STATE" name = "STATE" value = "1">
	<input type="submit" value="Submit"/> 
</form>
</body>
</html>
<?php
	
?>