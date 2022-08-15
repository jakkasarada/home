<?phpif(isset($_POST['reg_user']))
{mysql_connect("localhost","root","Password")
mysql_select_db("instruments");
$user=$_POST['username'];
$email=$_POST['email'];
$psw1=$_POST['password_1'];
$user=$_POST['password_2'];
$qry="INSERT INTO reg(user,email,psw) VALUES('$user','$email','$psw1)";
mysql_query($qry);
mysql_close();
}
	