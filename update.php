<?php

$pw=$_POST["password"];
$email = $_POST["email"];

$obj=mysqli_connect("localhost","root","","signup");
$qry="UPDATE info SET password='$pw' WHERE email='$email';";
					$k= mysqli_query($obj,$qry);
					if($k>0)
					{
					echo "<h2>password changed</h2>";
					}
				



?>
<form method='post'>
Email: <input type='text' name='email'><span style='color:red;'></span> <br>
password: <input type='password' name='password'><span style='color:red;'></span><br>
<input type='submit' value='Login' name='signin'>
</form>