<?php

echo '<link rel="stylesheet" href="main.css" />';

$ff = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $id=$_POST["IDn"];
    
    $sql=new mysqli("localhost","root","mysql");
    mysqli_select_db($sql,"wildandfree");

    $idcheck=$sql->query("select * from species where id='$id'");

    if(!isset($_POST["priority"]))
        $ff="Please select one";
    elseif($idcheck->num_rows>0)
        $ff="ID already being used";
    else
    {
        $cname=$_POST["cname"];
        $sname=$_POST["sname"];
        $descr=$_POST["descr"];
        $nathab=$_POST["nathab"];
        $usg=$_POST["usage"];
        $loc=$_POST["loc"];
        $genus=$_POST["genus"];
        $type=$_POST["priority"];
        $insert="insert into species values('$id','$cname','$sname','$nathab','$descr','$usg','$loc','$genus','$type','')";
        if ($sql->query($insert) === TRUE) 
        {     echo "<p align='center'><br><br><br>Record submitted successfully! <br>"; } 
        else 
        {     echo "Error: " . $insert . "<br>" . $sql->error; }
    }
}

?>

<style>

.form,.form td,.form tr{
    border: 0px;
	background-color: white;
}

.form{
    margin-left:1px;
	margin-top: 1px;
	margin-bottom: 150px;
}

</style>

<head>
		<title>ADMIN</title>
	</head>
    <body class="subpage">
		<header id="header">
				<div class="logo"><a href="index.html"><span>Wild and Free</span></a></div>
				<a href="#menu">Menu</a>
		</header>
		<nav id="menu">
			<ul class="links">
				<li><a href="add.php">ADD ENTRY</a></li>
				<li><a href="remove.php">REMOVE ENTRY</a></li>
				<li><a href="modify.php">MODIFY ENTRY</a></li>
			</ul>
        </nav>
        
        <form method="post">
            <table class="form">
                <tr>
                    <td colspan=2>
                        <div class="4u 12u$(small)">
                        <input type="radio" id="priority-low" name="priority" value="flora">
                        <label for="priority-low">Flora</label>
                        </div>
                        <div class="4u 12u$(small)">
                        <input type="radio" id="priority-normal" name="priority" value="fauna">
                        <label for="priority-normal">Fauna</label>
                        </div><font color="red" size=2><?php echo $ff; ?>
                    </td>
                </tr>

                <tr>
                    <td>ID<font color="red">*</font>: </td>
                    <td><div class="6u 12u$(xsmall)">
						<input type="text" name="IDn" id="name" placeholder="ID" required />
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Common name: </td>
                    <td><div class="6u 12u$(xsmall)">
						<input type="text" name="cname" id="name" value="" placeholder="Common Name" />
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Scientific Name: </td>
                    <td><div class="6u 12u$(xsmall)">
						<input type="text" name="sname" id="name" value="" placeholder="Scientific Name" />
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Description: </td>
                    <td><div class="12u$">
                    <textarea name="descr" id="message" placeholder="Description" rows="6"></textarea>
                    </div>
                    </td>
                </tr>

                <tr>
                    <td>Natural Habitat: </td>
                    <td><div class="12u$">
                    <textarea name="nathab" id="message" placeholder="Natural Habitat" rows="6"></textarea>
                    </div>
                    </td>
                </tr>

                <tr>
                    <td>Usage: </td>
                    <td><div class="12u$">
                    <textarea name="usage" id="message" placeholder="Usage" rows="4"></textarea>
                    </div>
                    </td>
                </tr>

                <tr>
                    <td>Location: </td>
                    <td><div class="12u$">
                    <textarea name="loc" id="message" placeholder="Location" rows="4"></textarea>
                    </div>
                    </td>
                </tr>

                <tr>
                    <td>Genus: </td>
                    <td><div class="6u 12u$(xsmall)">
						<input type="text" name="genus" id="name" value="" placeholder="Genus" />
                        </div>
                    </td>
                </tr>
                
                <tr>
                    <td align="right"><input type="submit" class="Button special" /></td>
                    <td><input type="reset" value="Reset" class="alt" /></td>
                </tr>
            </table>
        </form>

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