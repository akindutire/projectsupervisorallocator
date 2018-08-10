<?php
session_start();
include 'co.php';
if(!empty($_SESSION['a'])){
	$s=$_GET['xc'];
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
						<h1 class="title">Supervisor >> </h1>
						<p class="byline"><small style="color:red;">ASSIGN TOPIC</small></p>
						<div class="entry">
                        <?php
                        $rty=mysql_query("SELECT * FROM joint WHERE id='$s'");
								$sdy=mysql_fetch_assoc($rty);
									$p=$sdy['pix'];
									$n=$sdy['name'];
									$r=$sdy['level'];
									$o=$sdy['matric'];
									$pt=$sdy['pt'];
									$pd=$sdy['pd'];
						
						?>
							<p>
                            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                            <div class="all"><label>Topic</label><input type="text" style="margin-top:-20px;" name="topic" value="<?php echo $pt; ?>" required></div>
                            <div class="all"><label>Details.</label><textarea style="margin-top:-20px;" name="details"><?php echo $pd; ?></textarea></div>
                           	
                            <div class="all"><input type="submit" name="sbmat" value="Update"></div>
                            </form>
                            
                            </p>
                            <br><br>
                            <div style="height:40px;"></div>
                            <U style="text-align:center; margin-left:120px;"><b>Student Profile</b></U>
                            <table border="0" cellspacing="5" cellpadding="6" style="color:darkgreen;">
                            <tr><th></th><th></th></tr>
                            <?php
									
									
									echo "<tr><td><b>Name</b></td><td>$n</td></tr>";
									echo "<tr><td><b>Matric No.</b></td><td>$o</td></tr>";
									echo "<tr><td><b>Level</b></td><td>$r</td></tr>";
									echo "<tr><td><b>Project Topic</b></td><td><b>$pt</b></td></tr>";
									echo "<tr><td><b>Details</b></td><td>$pd</td></tr>";
								
							?>
                            </table>
						<?php
						
						if(isset($_POST['sbmat'])){
							
							$tp=strtoupper($_POST['topic']);
							
							$de=ucwords(htmlentities($_POST['details']));
							
							$sqler=mysql_query("UPDATE joint SET pt='$tp',pd='$de' WHERE id='$s'");
							
							if($sqler){
								echo "<body onload='prx()'></body>";
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
								 <li><a href="lt.php">Back</a></li>
                                 
                                <li><a href="lgt2.php">Logout</a></li>
                               
								
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
	header('location:lgt2.php');
	}
?>
