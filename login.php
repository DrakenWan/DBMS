<?php

echo '<link rel="stylesheet" href="main.css" />';

$uerror="";
$passerror="";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $un=$_POST["name"];
    $pass=$_POST["password"];
    $c=0;

    $sql=new mysqli("localhost","root","mysql");
    mysqli_select_db($sql,"wildandfree");

    if(empty($un))
        $uerror="Username required";
    else{
        $umatch=$sql->query("select * from user where uname='$un'");
        if($umatch->num_rows==0)
            $uerror="Username not registered";
        else
        {
            if(empty($pass))
                $passerror="Password required";
            else{
                $passmatch=$sql->query("select * from user where uname='$un' and pass='$pass'");
                if($passmatch->num_rows==0)
                    $passerror="Incorrect password";
                else{
                    if($un=='admin')
                        header("Location: http://localhost/DBMS/admin-login.php");
                    else
                        header("Location: http://localhost/DBMS/index.html");
                }
            }
        }
    }
}

?>

<html>
	<head>
		<title>Wild and Free - Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body class="subpage">
            <header id="header">
                    <div class="logo"><a href="index.html"><span>Wild and Free</span></a></div>
            </header>

            <div class="6u$ 12u$(medium)">
                <form method="post" action="#">
                    <table class="logintable">
                        <tr>
                            <td width="25%">Username:</td>
                            <td width="50%"><input type="text" name="name" value="" placeholder="Username"/></td>
                        </tr>
                        <tr>
                            <td colspan=2 align="right"><font color="red" size=2><?php echo $uerror ?></td>
                        </tr>
                        <tr>
                            <td width="25%">Password:</td>
                            <td width="50%"><input type="password" name="password" value="" placeholder="Password"/></td>
                        </tr>
                        <tr>
                            <td colspan=2 align="right"><font color="red" size=2><?php echo $passerror ?></td>
                        </tr>
                        <tr>
                            <td align="right"><input type="submit" value="Login" class="Button special" /></td>
                            <td><input type="reset" value="Reset" class="alt" /></td>
                        </tr>
                        <tr>
                            <td colspan=2 align="center"><a href="http://localhost/DBMS/register.php">Register</a></td>
                        </tr>
                        </table>
                </form>
            </div>
            <footer id="footer">
                <div class="copyright">
                    DBMS project by<br> Ishita Jaju<br> Pooja Uplanchiwar <br> Kartikay Kaul
                </div>
            </footer>

            <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>