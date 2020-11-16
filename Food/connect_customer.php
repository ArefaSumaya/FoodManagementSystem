<!DOCTYPE html>
<html>
<head>
<title>Customer</title>
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
                    	<li><a href="http://localhost/Food/view_customer.php">Customer</a>
                        </li>
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
 <form action="connect_customer.php" method="POST">
<center><h2 class="heading"><br>Customer Information</h2></center>
<div class="login">
  <p> ID:<br>
  <input type="number" name="ID" value=""></p>
  <p>Name:<br>
    <input type="text" name="Name" value=""></p>
  <p>Contact_Number:<br>
  <input type="number" name="Contact_Number" value=""></p>
  <input type="submit" value="Submit">
</form>
<div class= "toast">
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
$sql="INSERT INTO tb_customer(C_ID,C_Name,Contact_Number)VALUES('$_POST[ID]','$_POST[Name]','$_POST[Contact_Number]')";
if(mysqli_query($conn,$sql))
{
	echo "Data Inserted Successfully";
}
else
{
	echo "Error";
}
?>
</div>

	<footer class="footer">
		&copy Arefa Binte Sumaya</br>
	ID : 17103069</br>
	Sec: E
</footer>
</div>
</body>
</html>