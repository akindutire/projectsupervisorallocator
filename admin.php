<?php
session_start();
include 'co.php';

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

<script>

	function rx(){
		alert("Incorrect Pin");
		window.location="admin.php";
		}
</script>
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
						<h1 class="title">Administrator >> Login</h1>
						<p class="byline"><small style="color:red;">LOGIN TO ADD PROJECT SUPERVISOR/ ASSIGN STUDENTS</small></p>
						<div class="entry">
                        
							<p>
                            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                            <div class="all"><label>E-mail</label><input type="text" style="margin-top:-20px;" name="mail" required placeholder="akins@gmail.com"></div>
                            <div class="all"><label>Password</label><input type="password" style="margin-top:-20px;" name="pass" required placeholder="****"></div>
                            <div class="all"><input type="submit" name="sbmat" value="Enter"></div>
                            </form>
                            
                            </p>
						<?php
						
						if(isset($_POST['sbmat'])){
							$m=$_POST['mail'];
							$p=$_POST['pass'];
                        	$sql=mysql_query("SELECT * FROM admin WHERE mail='$m' and pass='$p'");
							if(mysql_num_rows($sql)==1){
								$e=mysql_fetch_assoc($sql);
								$name=$e['name'];
								$pix=$e['pix'];
								$_SESSION['a']='1';
								header("location:inneradmin.php");
							}else{
								echo "<body onload='rx()'></body>";	
								}
						}
						?>
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
