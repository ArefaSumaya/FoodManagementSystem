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
                        <li><a href="http://localhost/Food/view_food.php">Food</a></li>
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
		<<h2 class =" heading">Print Customer</h2>
			<div class="table" style="margin-left:400px;">
				<div id="print">
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbName = "db_food"; 
  $connection = mysqli_connect($servername, $username, $password, $dbName);
  if ($connection) {
    echo "<br>";
  } else {
    die("Connection failed.<br>".mysqli_connect_error());
  }
$term=$_GET['ID'];   

$SQL = "SELECT * FROM tb_customer WHERE C_ID LIKE '$term'";
  $result = mysqli_query($connection, $SQL);
  if ($result->num_rows > 0) {
     echo "<table><tr><th>ID</th><th>Name</th><th>Contact Number</th></tr>";
     // output data of each row
     while($row = mysqli_fetch_array($result)) {
         echo "<tr><td>".$row["C_ID"]."</td><td>".$row["C_Name"]."</td><td>". $row["Contact_Number"]."</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
?>
</div>
</div>
<a href="javascript:void(0);" onclick="printDiv('print');">Print</a> 
	<footer class="footer">
		&copy Arefa Binte Sumaya</br>
	ID : 17103069</br>
	Sec: E
</footer>
</div>
<script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
} 
</script>
</body>
</html>




