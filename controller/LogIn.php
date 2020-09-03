<?php
session_start();
require_once('DbConnection.php');
//echo "fuck";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$memberId=$conn->real_escape_string($_POST["uname"]);
  //echo $memberId;
	$password=$conn->real_escape_string( $_POST["psw"]);
	$qr="SELECT * FROM admin where mail='$memberId'";
	$result=$conn->query($qr);
	if($result->num_rows==0)
	{

		header('Location: ErrorPageDB.php');
		exit();
	}

	//echo $resultQr;
	if($result->num_rows>0)
	{
		$row = $result->fetch_assoc();

		if($row['password']==$password){

			header('Location: measurement.php');

			exit();
		}
		else
		{

			header('Location: ErrorPagePSW.php');
		}
	}

}

?>
