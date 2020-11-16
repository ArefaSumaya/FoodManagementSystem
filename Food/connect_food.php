<!DOCTYPE html>
<html>
<head>
<title>Home</title>
	<link rel="stylesheet" type="text/css" href="la.css">
	 <h2 style="	text-align:center;
	background-color:white;
	color:white;
	background-color:#00001a;
	height:30px;
	line-height: 30px;">Food Management System</h2>
</head>
<body>
	<div class="container">
		<div class="header">
			<ul>
				<li><a href="http://localhost/Food/home.php">Home</a></li>
				<li> <a href="#">Insert</a>
					<ul >
						<li><a href="http://localhost/Food/Customer.php">Customer</a></li>
						<li><a href="http://localhost/Food/Food.php">Food</a></li>
						<li><a href="http://localhost/Food/Employee.php">Employee</a></li>
					</ul>
			</li>
				<li><a href="#">View</a>
                    <ul >
                    	<li><a href="http://localhost/Food/view_customer.php">Customer</a></li>
                        <li><a href="http://localhost/Food/view_food.php">Food</a>
                        </li>
                     
                        <li><a href="http://localhost/Food/view_employee.php">Employee</a></li>
                    </ul>
                </li>
				<li><a href="#">Search</a>
 					<ul >
                    	<li><a href="http://localhost/Food/search_customer.php">Customer</a></li>
                        <li><a href="http://localhost/Food/search_food.php">Food</a></li>
                        <li><a href="http://localhost/Food/search_employee.php">Employee</a></li>
                    </ul>
				</li>
				<li><a href="http://localhost/Food/report.php">Report</a></li>
			</ul>
		</div>
 <form action="connect_food.php" method="POST">
<h2 class="heading">Food Information</h2>
<div class="login">
  <p> ID:<br>
  <input type="number" name="ID" value=" "></p>
  <p>Name:<br>
    <input type="text"name="Name" value=" "></p>
  <p>Type:<br>
  <input type="text" name="Type" value=" "></p>
  <p> Price:<br>
  <input type="number" name="Price" value=" "></p>
  <input type="submit" value="Submit">
</form> 
<?php
$servername="localhost";
$username="root";
$db_name="db_food";
$password="";
$conn=mysqli_connect($servername,$username,$password,$db_name);
if(!$conn)
{
	die("Error");
}
else
{
	echo "Successfull";
}

$sql="INSERT INTO tb_menu(M_ID,M_Name,Type,Price)VALUES('$_POST[ID]','$_POST[Name]','$_POST[Type]','$_POST[Price]')";
if(mysqli_query($conn,$sql))
{
	echo "Data Inserted Successfully";
}
else
{
	echo "Error";
}
?>
	<footer class="footer">
		&copy Arefa Binte Sumaya</br>
	ID : 17103069</br>
	Sec: E
</footer>
</div>
</body>
</html>




