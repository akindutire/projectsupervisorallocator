<?php
session_start();
include 'co.php';
if(isset($_POST['sbmat'])){
	$mt=$_POST['matric'];
	$sql=mysql_query("SELECT * FROM bksreg WHERE matric='$mt'");
		if(mysql_num_rows($sql)==1){
			$_SESSION['mt']=$mt;
			header("location:menu.php");
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>My project</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<style>
@import "forms.css";
</style>
</head>
<body>

<!-- start header -->
<div id="header">
</div>
<!-- end header -->
<!-- start page -->

	<div id="page">
		<div class="bgtop">
			<div class="bgbtm">
				<!-- start content -->
				<div id="content">
					<div class="post">
						<h1 class="title">Student >> Login</h1>
						<p class="byline"><small style="color:red;">LOGIN TO CHECK YOUR PROJECT SUPERVISOR</small></p>
						<div class="entry">
                        
							<p>
                            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                            <div class="all"><label>Matric No.</label><input type="text" style="margin-top:-20px;" name="matric" required placeholder="SO5/COM/2012/584"></div>
                            <div class="all"><input type="submit" name="sbmat" value="Enter"></div>
                            </form>
                            
                            </p>
						
                        	</div>
						<!--<p class="meta"> </p>-->
					</div>
					
				</div>
				<!-- end content -->
				<!-- start sidebar -->
				<div id="sidebar">
					<ul>
						<li>
							<h2>Main Menu</h2>
							<ul>
                            	<li><a href="index.php">Home</a></li>
								<li><a href="sreg.php">Student Registration</a></li>
                                <li><a href="admin.php">Admin Portal</a></li>
                                <li><a href="lec.php">Lecturers' Portal</a></li>
                               
								
							</ul>
						</li>
						
				  </ul>
				</div>
				<!-- end sidebar -->
				<div style="clear:both">&nbsp;</div>
			</div>
		</div>
	</div>
<div id="footer">
	<p>&copy;2014 Project</p>
</div>
</html>
