<?php
session_start();
include 'co.php';
$sup=$_GET['nm'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>My project</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script src="js/jquery.tooltip.js" type="text/javascript"></script>
<script src="js/jquery.tooltip.js"></script>
<style>
@import "forms.css";
</style>

<script>

	function rx(){
		alert("RETRY! SERVER ERROR");
		window.location="inneradmin.php";
		}
	
	function prx(){
		alert("Processed");
		window.location="inneradmin.php";
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
						<h1 class="title">Administrator >></h1>
						<p class="byline"><small style="color:red;"></small></p>
						<div class="entry">
                        
							<p>
                           
						   <?php
                           $rope=mysql_query("SELECT * FROM supervisors WHERE id='$sup'");
						   $bn=mysql_fetch_assoc($rope);
						   $name=$bn['name'];
						   ?>
                            </p>
                            <br><br>
                          
                            <U style="text-align:center; margin-left:120px;"><b><?php echo "$name/PROJECT STUDENTS"; ?> </b></U>
                            <table border="1" cellspacing="0" cellpadding="6" style="color:darkgreen;">
                            <tr><th>Name</th><th>e-Mail</th><th>Level</th><th>Matric</th></tr>
                            <?php
                            	$rtyq=mysql_query("SELECT * FROM joint WHERE sup='$sup'");
								while($sdy=mysql_fetch_assoc($rtyq)){
									$pix=$sdy['pix'];
									$name=$sdy['name'];
									$phone=$sdy['phone'];
									$mail=$sdy['mail'];
									$level=$sdy['level'];
									$matric=$sdy['matric'];
									$id=$sdy['id'];
									
									echo "<tr><td><a href='sreg/$pix'><img src='sreg/$pix' width='30' height='30'></a>&nbsp;$name</td><td>$mail</td><td>$level</td><td>$matric</td></tr>";
								}
							?>
                            </table>
						
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
								<li><a href="inneradmin.php">Back</a></li>
                                 <li><a href="chk.php">Check Unassigned Student(s)</a></li>
                                <li><a href="reset.php">Reset Assignation</a></li>
                                <li><a href="admin.php">Admin Portal</a></li>
                                <li><a href="lgt.php">Logout</a></li>
                               
								
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
