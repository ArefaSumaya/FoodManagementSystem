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
 <form action="result_customer.php" method="POST">
<center><h2 class="heading"><br> Search By Customer Information</h2></center>
<div class="login">
  <p> ID:<br>
<?php
	$servername="localhost";
$username="root";
$password="";
$db_name="db_food";
$conn=mysqli_connect($servername,$username,$password,$db_name);
?>
<select name="term" class="form-control">
<option value="pick">Customer ID</option>
<?php
$sql = mysqli_query($conn, "SELECT C_ID From tb_customer");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['C_ID'] ."'>" .$row['C_ID'] ."</option>" ;
}
?>
  <input type="submit" value="Submit">
</form>

	<footer class="footer">
		&copy Arefa Binte Sumaya</br>
	ID : 17103069</br>
	Sec: E
</footer>
</div>
</body>
</html>