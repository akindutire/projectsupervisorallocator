<?php
session_start();
include 'co.php';
if(!empty($_SESSION['mt'])){
	$s=$_SESSION['mt'];
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
	window.location="lt.php";
		}
	function prxp(){
		alert("Mail Already Exist ,Request Cannot Be Processed");
		window.location="inneradmin.php";
		}
	function prx(){
	
		alert("Processed");
		window.location="lt.php";	
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
						<h1 class="title"><?php echo $_SESSION['mt'];?> >> </h1>
						<p class="byline"><small style="color:red;">CHECK PROJECT TOPIC/SUPERVISOR</small></p>
						<div class="entry">
                        <?php
                        $rty=mysql_query("SELECT * FROM joint WHERE matric='$s'");
								$sdy=mysql_fetch_assoc($rty);
									$p=$sdy['pix'];
									$n=$sdy['name'];
									$r=$sdy['level'];
									$o=$sdy['matric'];
									$pt=$sdy['pt'];
									$pd=$sdy['pd'];
									$sp=$sdy['sup'];
									
									$dr=mysql_query("SELECT * FROM supervisors WHERE id='$sp'");
									$t=mysql_fetch_assoc($dr);
									$tnm=$t['name'];
									$tof=$t['office'];
									$tml=$t['mail'];
									$tpn=$t['phone'];
									
						?>
							<p>
                           <U style="text-align:center; margin-left:120px; color:red; font-size:18px;"><b>My Project File</b></U><br>
                            </p>
                            <br><br>
                           
                            
                            <table border="0" cellspacing="5" cellpadding="6" style="color:darkgreen; text-align:left; width:500px; border:1px solid green; font-size:13px;">
                            <tr><th></th><th></th></tr>
                            <?php
									
									echo "<tr><td><b>Supervisor</b></td><td>$tnm</td></tr>";
									echo "<tr><td><b>Phone</b></td><td>$tpn</td></tr>";
									echo "<tr><td><b>e-Mail</b></td><td>$tml</td></tr>";
									echo "<tr><td><b>Office/Location</b></td><td>$tof</td></tr>";
									
									
									
								
							?>
                            </table>
                            <table border="0" cellspacing="5" cellpadding="6" style="color:darkgreen; text-align:left; width:500px; border:1px solid green; font-size:13px;">
                            <tr><th></th><th></th></tr>
                            <?php
									
									
									
									
									echo "<tr><td><b>Name</b></td><td>$n</td></tr>";
									echo "<tr><td><b>Matric No.</b></td><td>$o</td></tr>";
									echo "<tr><td><b>Level</b></td><td>$r</td></tr>";
									
								
							?>
                            </table>
							<table border="0" cellspacing="5" cellpadding="6" style="color:darkgreen; text-align:left; width:500px; border:1px solid green; font-size:13px;">
                            <tr><th></th><th></th></tr>
                            <?php
									
									
									
									
									
									echo "<tr><td><b>Project Topic</b></td><td><b>$pt</b></td></tr>";
									echo "<tr><td><b>Details</b></td><td>$pd</td></tr>";
								
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
								
                                  <li><a href="lgt3.php">Logout</a></li>
                                <li><a onclick="window.print()" style=" cursor:pointer; color:red;">PRINT</a></li>
                               
								
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
<?php
}else{
	header('location:lgt3.php');
	}
?>
