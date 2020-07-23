<?php 
 session_start();
if(!isset($_SESSION['fname']))
{
$obj=mysqli_connect("localhost","root","","signup");

if(isset($_POST['signin'])){
$err = array();
$em = trim($_POST['email']);
$pwd = trim($_POST['pwd']);
if($em == '')
{
$err[0] = "Enter Your email";
}
if($pwd == '')
{
$err[1] = "Enter a valid password";
}
$c =count($err);

if($c<1){
$q="select * from info where Email='$em' and Password='$pwd' ";
$res= mysqli_query($obj,$q) ;


$df = mysqli_fetch_array($res);

echo "welcome";
} else {
echo "<font color='red'>Username doesn't exist</font>";
}


}
?>
<html>
<body>
<form method='post'>
Email: <input type='text' name='email'><span style='color:red;'></span> <br>
password: <input type='password' name='pwd'><span style='color:red;'></span><br>
<input type='submit' value='Login' name='signin'>
</form>
</body>
</html>
<?php } 
else {
echo "error" ;
}
?>