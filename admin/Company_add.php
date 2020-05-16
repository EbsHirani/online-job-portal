<?php 

include ('connection/db.php');

$Company=$_POST['Company'];
$Description=$_POST['Description'];
$admin=$_POST['admin'];


$query=mysqli_query($conn,"insert into company (company,des, admin) values ('$Company','$Description', '$admin')");
if($query)
{
	echo "data added successfully";
	header('location:create_company.php');
}
else
{
	echo "Some error occured please try again";
}

 ?>