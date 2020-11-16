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
		<div id="print">


				<div style="margin-left:250px;margin-top:60px;margin-right:190px;">
			<?php

$conn = mysqli_Connect('localhost','root','','db_food');
$sql="SELECT tb_menu.M_ID,tb_menu.M_Name,tb_menu.Type,tb_menu.Price,tb_customer.C_ID,tb_customer.Contact_Number,tb_employee.E_Name,tb_employee.Assigned_Table,tb_employee.Designation FROM tb_menu
  LEFT OUTER JOIN tb_employee ON tb_menu.M_ID=tb_employee.E_ID
  LEFT OUTER JOIN  tb_customer ON tb_employee.E_ID = tb_customer.C_ID";
$result = mysqli_query($conn,$sql);



if ($result->num_rows > 0)
{

while ($accused=mysqli_fetch_assoc($result))

{
	echo"<div style='position:relative; margin-top:110px;margin-bottom:0px;''>
			<center><h3>Cafeteria Billing System</h3></center>
			<center><h4>5th Floor, 213/B,EastSide Paradise, Uttara, Dhaka</h4></center>
			<center><h4>Contact Number: 01236525</h4></center>
		</div>";
		echo"<table style='margin-left:0px' border='1'>
  <tr style='color:blue'>
	<th>Menu ID</th>
	<th>Food Name</th>
	<th>Type</th>
	<th>Price</th>
  </tr>";

	echo "<p style='text-align:left;'>Table Number :".$accused['Assigned_Table']."</p>";
	echo "<p style='text-align:left;'>Customer ID :".$accused['C_ID']."</p>";
	echo"<p style='text-align:right;font-size:26px;font-weight:900;font-style: oblique;'>Customer Contact Number :".$accused['Contact_Number']."</p>";
	echo "<tr>";
	echo"<td>".$accused['M_ID']."</td>";
	echo"<td>".$accused['M_Name']."</td>";
	echo"<td>".$accused['Type']."</td>";
	echo"<td>".$accused['Price']."</td>";
	echo "</tr>";
	echo "</table>";
	echo "<p style='text-align:left;'>Served By :".$accused['E_Name']."</p>";
	echo "<p style='text-align:left;'>Designation :".$accused['Designation']."</p>";
	


}

}
else
{
	echo "Conn failed";
}
?> 
</div>
</div>
<p ><center><a style="background-color:white;" href="javascript:void(0);" onclick="printPage();">Print</a> </center></p>
 
 <footer class="footer">
        &copy Arefa Binte Sumaya</br>
    ID : 17103069</br>
    Sec: E
</footer>
</div>
</body>
<script type="text/javascript">
 function printPage(){
			var prtContent = document.getElementById("print");
			var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0,border=1');
			WinPrint.document.write(prtContent.innerHTML);
			WinPrint.document.close();
			WinPrint.focus();
			WinPrint.print();
			WinPrint.close();
    };
    </script>
</html>