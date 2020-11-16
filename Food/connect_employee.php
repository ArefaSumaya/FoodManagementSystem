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
  <form action="connect_employee.php" method="POST">
        <h2 class="heading">Employee Information</h2>
        <div class="login">
          <p> ID:<br>
          <input type="number" name="ID" value=""></p>
          <p>Name:<br>
            <input type="text" name="Name" value=""></p>
          <p>Assigned_Table:<br>
          <input type="number" name="Assigned_Table" value=""></p>
          <p>Designation:<br>
          <input type="text" name="Designation" value=""></p>
          <input type="submit" value="Submit">
        </div>
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
	echo "Successfully Connected.<br>";
}
$id = $_POST["ID"];
$name = $_POST["Name"];
$AT = $_POST["Assigned_Table"];
$des = $_POST["Designation"];
$sql="INSERT INTO tb_employee (E_ID,E_Name,Assigned_Table,Designation) VALUES ('".$id."','".$name."','".$AT."','".$des."')";
if(mysqli_query($conn,$sql))
{
	echo "Data Inserted Successfully<br>";
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




