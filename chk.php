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
						<h1 class="title">Administrator >> </h1>
						<p class="byline"><small style="color:red;"> ASSIGN STUDENTS >>SUPERVISOR</small></p>
						<div class="entry">
                        
							<p>
                            
                            
                            </p>
                            
                            <U style="text-align:center; margin-left:120px;"><b>UNASSIGNED STUDENTS/ OPERATION</b></U>
                            <table border="1" cellspacing="0" cellpadding="6" style="color:darkgreen;">
                            <tr><th>Name</th><th>Level</th><th>Matric</th><th>Operation</th></tr>
                            <?php
                            	$rty=mysql_query("SELECT * FROM sreg");
								while($sdy=mysql_fetch_assoc($rty)){
									$name=$sdy['name'];
									$lev=$sdy['level'];
									$mat=$sdy['matric'];
									$id=$sdy['id'];
									
									echo "<tr><td>$name</td><td>$lev</td><td>$mat</td><td>
									<a href='assignstud1.php?vb=$id'><img src='images/btn1.jpg' width='50' height='20'></a></td></tr>";
								}
								$rio=mysql_num_rows($rty);
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
                                 <li><a><?php echo "<b style='color:black;'>$rio</b> Unassigned Student(s)"; ?></a></li>
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
