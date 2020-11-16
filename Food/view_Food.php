<!DOCTYPE html>
<html>
<head>
<title>Home</title>
    <link rel="stylesheet" type="text/css" href="la.css">
        <style type="text/css" media="print">
.dontprint
{ display: none; }
</style>
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
        <center><h2 class="heading"><br> View By Food Information</h2></center>
             <div style="position:absolute;margin-top:50px;margin-left:20px;width:auto;" id="print">
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_food";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM tb_menu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>ID</th><th>Name</th><th>Type</th><th>Price</th><th class='dontprint'>Action</th><th class='dontprint'> Action</th><th class='dontprint'>Action</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>".$row["M_ID"]."</td><td>".$row["M_Name"]."</td><td>".$row["Type"]."</td><td>".$row["Price"]."</td><td class='dontprint'><a href='edit_food.php?ID=".$row['M_ID']."' style='text-decoration: none' />Edit</a></td><td class='dontprint'><a href='delete_food.php?ID=".$row['M_ID']."' style='text-decoration: none;' />Delete</a></td><td class='dontprint'><a href='print_food.php?ID=".$row['M_ID']."' onclick='myWindow=window.open(this.ref 'newwindow','width=300,height=250')';>Print</a></td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<p><center><a href="javascript:void(0);" onclick="printDiv('print');">Print</a> </center></p>
    <footer class="footer">
        &copy Arefa Binte Sumaya</br>
    ID : 17103069</br>
    Sec: E
</footer>
</div>
<script type="text/javascript">
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}   
 </script>​​​​​​
</body>
</html>