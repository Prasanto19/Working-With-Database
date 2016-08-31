<?php
	/*
	Lab Assignment: 2
	Name:Prashanta Kumar Dey
	Batch 2(PHP)
	*/
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$contact_number=$_POST['contact_number'];
	$university_name=$_POST['university_name'];
	$department=$_POST['department'];
	$home_district=$_POST['home_district'];
	if($first_name && $last_name && $contact_number)
	{
		$con=mysql_connect("localhost","root","")or die("Server is not connected! Try again!");
		mysql_select_db("form");
		mysql_query("INSERT INTO subscribers(First_Name,Last_Name,Contact_Number,University_Name,Department,Home_District)VALUES('$first_name','$last_name','$contact_number','$university_name','$department','$home_district')");
		include("users.php");
		mysql_close($con);
	}
	else
	{
		echo"Warning!You must fill up where there is a * mark for registration. Thank you!";
		include("index.php");
	}

?>