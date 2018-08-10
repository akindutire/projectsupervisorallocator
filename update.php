<?php
session_start();
include 'co.php';
$nd=$_GET['nm'];
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
	
	function rxp(){
		var p=<?php echo $nd; ?>;
		alert("E-mail is already used by another person");
		//window.location="inneradmin.php";
		//window.location="update.php"+nm=p;
		}
	function prx(){
		alert("Updated");
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
						<p class="byline"><small style="color:red;">LOGIN TO ADD PROJECT SUPERVISOR/ ASSIGN STUDENTS</small></p>
						<div class="entry">
                        <?php
                            	$rty=mysql_query("SELECT * FROM supervisors WHERE id='$nd'");
								while($sdy=mysql_fetch_assoc($rty)){
									$n=$sdy['name'];
									$r=$sdy['rank'];
									$o=$sdy['office'];
									$p=$sdy['phone'];
									$id=$sdy['id'];
									$mail=$sdy['mail'];
									
									
								}
							?>
							<p>
                            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                            <div class="all"><label>Supervisor</label><input type="text" style="margin-top:-20px;" name="supervisor" required value="<?php echo $n;?>" ></div>
                            <div class="all"><label>Phone No.</label><input type="tel" style="margin-top:-20px;" name="phone"  value="<?php echo $p;?>"></div>
                           	<div class="all"><label>e-Mail.</label><input type="email" style="margin-top:-20px;" name="mail" readonly value="<?php echo $mail;?>"></div>
                            <div class="all"><label>Rank</label><input type="text" style="margin-top:-20px;" name="rank"  value="<?php echo $r;?>"></div>
                            <div class="all"><label>Location/Office</label><input type="text" style="margin-top:-20px;" required name="ofc"  value="<?php echo $o;?>"></div>
                          

                            <div class="all"><input type="submit" name="sbmat" value="Update"></div>
                            </form>
                            
                            </p>
                            <br><br>
                            <div style="height:40px;"></div>
                           
						<?php
						
						if(isset($_POST['sbmat'])){
							
							$maile=$_POST['mail'];
							
							
							$office=strtoupper($_POST['ofc']);
							$supervisor=ucwords($_POST['supervisor']);
							$rank=strtoupper($_POST['rank']);
							$phone=$_POST['phone'];
							
                        	$sql=mysql_query("UPDATE supervisors SET name='$supervisor',rank='$rank',office='$office',mail='$maile',phone='$phone' WHERE id='$nd'");
							if($sql){
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
								<li><a href="inneradmin.php">Back</a></li>
                                <li><a href="reset.php">Reset Assignation</a></li>
                                 <li><a <?php echo "href=delete.php?d=$nd";?>>Delete Current Supervisor</a></li>
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
