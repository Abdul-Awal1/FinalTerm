<?php
$servername="localhost";
$username="root";
$password="";
$dbname="webtech_A";
$name="sadia";
$email="sadia@gmail.com";

//$apple=new Fruit();
//$apple->x;
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	//$q="CREATE TABLE Student(ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,Name VARCHAR(30) NOT NULL, Email VARCHAR(30) NOT NULL)";
	//$q="INSERT INTO Student(Name,Email) VALUES('Eva','eva@gmail.com')";
	//$q="INSERT INTO Student(Name,Email) VALUES('".$name."','".$email."')";
	//$q="DELETE FROM Teacher where ID=20025";
	//$q="INSERT INTO Teacher(ID,Name,Email) VALUES(20024,'".$name."','".$email."')";
	//$q="INSERT INTO Teacher(Name,Email) VALUES('Riad','Riad@gmail.com')";
	$q="INSERT INTO Teacher(Name,Email) VALUES('Anny','Anny@gmail.com')";
	//$q="INSERT INTO Teacher(Name,Email) VALUES('Awal','Awal@gmail.com')";
	//$q="INSERT INTO Teacher(Name,Email) VALUES('Jubayer','jabuyer@gmail.com')";
	

	
	$result=$conn->query($q);
	if($result)
		echo "data inserted successfully";
	else
		echo "data not inserted"."<br>";
	//update data
}

	$sql = "UPDATE Teacher SET Name='Mim' WHERE id=20027";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}


$conn->close();
	//echo "successful connection";
?>