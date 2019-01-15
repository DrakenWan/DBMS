<?php

//echo '<link rel="stylesheet" href="assets/main.css" />';

//include('assets/css/main.php');

$heading = $ff = $h1 = $h2 = $h3 = $h4 = $h5 = $h6 = $h7 = "";
$out["cname"] = $out["descr"] = $out["sname"] = $out["genus"] = $out["nathab"] = $out["location"] = $out["usg"] = "";
$result="";
$related = array();

if($_SERVER["REQUEST_METHOD"] == "POST") {

	$sql=new mysqli("localhost","root","mysql");
	mysqli_select_db($sql,"wildandfree");
	
	$search=$_POST["search-item"];

	$found=$sql->query("select * from species where cname='$search' or sname='$search'");
	if($found->num_rows>0)
	{
		$h1 = "Common name";
		$h2="Scientific name";
		$h3="Description";
		$h4="Natural Habitat";
		$h5="Usage";
		$h6="Location";
		$h7="Genus";
		$q=$sql->query("select * from species where cname='$search' or sname='$search'");
		$out=$q->fetch_assoc();
		$img=$out["img"];
		$result=$out["type"];
	}

	else
	{
		$s=$_POST["search-item"];
		$result="Sorry, your search could not find any results";
		$out["cname"] = $out["descr"] = $out["sname"] = $out["genus"] = $out["nathab"] = $out["location"] = $out["usg"] = "";
		$se=$sql->query("select * from species where cname like '$s[0]%'");
		if($se->num_rows>0)
		{
			$h2="Did you mean:";
			while($row=$se->fetch_assoc())
			{
				$related[0]=$row["cname"];
			}
		}
	}
}

?>

<html>
	<style>
		#search-text{
			width: 150px;
			display: inline;
		}

		#search-but{
			width: 30px;
			display: inline;
			margin-right: 36%;
			border: none;
			background-color: none;
		}

	</style>
	<head>
		<title>Wild and Free - Search</title>
		<link rel="stylesheet" href="assets/css/main.php" />
	</head>
    <body class="subpage">
		<header id="header">
				<div class="logo"><a href="index.html"><span>Wild and Free</span></a></div>
				<form method="post"><input type="text" id="search-text" name="search-item" placeholder="search">
				<input type="submit" id="search-but" value="search">
				<a href="#menu">Menu</a>
		</header>
		<nav id="menu">
			<ul class="links">
				<li><a href="index.html">Home</a></li>
				<li><a href="search.php">Search</a></li>
				<li><a href="http://localhost/DBMS/login.php">LOGOUT</a></li>
			</ul>
		</nav>

		<section id="One" class="wrapper style3">
			<div class="inner">
				<header class="align-center">
					<p><?php echo $result; ?></p>
					<h2><?php echo $out["cname"]; ?></h2>
				</header>
			</div>
		</section>

		<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">

							<img src="<?php echo $img; ?>">

							<p><?php echo $out["descr"]; ?></p>
						
							<h4><?php echo $h2; ?></h4>
							<p><?php echo $out["sname"];
									for($i=0;$i<sizeof($related);$i++)
									echo $related[$i]."<br>"; ?></p>

							<h4><?php echo $h7; ?></h4>
							<p><?php echo $out["genus"]; ?></p>

							<header class="align-center">
								<h2><?php echo $h4; ?> </h2>
							</header>
							<p><?php echo $out["nathab"]; ?> </p>

							<header class="align-center">
								<h2><?php echo $h5; ?> </h2>
							</header>
							<p><?php echo $out["usg"]; ?> </p>

							<header class="align-center">
								<h2><?php echo $h6; ?> </h2>
							</header>
							<p><?php echo $out["location"]; ?> </p>
						</div>
					</div>
				</div>
			</section>

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
