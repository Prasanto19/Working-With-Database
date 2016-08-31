
<?php
	/*
	Lab Assignment: 2
	Name:Prashanta Kumar Dey
	Batch 2(PHP)
	*/
	$get_data=mysql_query("SELECT * FROM subscribers");
	echo"<b>Serial No</b>----<b>First Name</b>----<b>Last Name</b>----<b>Contact Number</b>----<b>University Name</b>----<b>Department</b>----<b>Home District</b><br/>";
	while($row=mysql_fetch_array($get_data))
	{
		echo$row['Serial_No']."----".$row['First_Name']."----".$row['Last_Name']."----".$row['Contact_Number']."----".$row['University_Name']."----".$row['Department']."----".$row['Home_District']."<br/>";
	}
?>