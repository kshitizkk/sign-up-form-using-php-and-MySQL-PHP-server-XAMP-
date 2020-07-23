<?php

if(isset($_REQUEST['Fname'])&&isset($_REQUEST['email']))
{
$Fname=$_POST["Fname"];

$email = $_POST["email"];
$password=$_POST["pass"];



$obj=mysqli_connect("localhost","root","","signup");
if(mysqli_connect_errno($obj)>0)
{
echo mysqli_connect_error($obj);
}
else
{
$qry="insert into `info` values('$Fname','$email','$password')";
					$k= mysqli_query($obj,$qry);
					if($k>0)
					{
					echo "<h2>value inserted</h2>";
					}
					else
					{
						echo mysqli_error($obj);
					}
		}
}
else
{
echo "nothing";
}



?>
