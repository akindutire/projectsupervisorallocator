<?php
session_start();
include 'co.php';
if($_SESSION['a']==1){
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
	function prxp(){
		alert("Mail Already Exist ,Request Cannot Be Processed");
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
						<p class="byline"><small style="color:red;">ADD PROJECT SUPERVISOR/ ASSIGN STUDENTS<br>Students Must First Be Assigned to HOD, Otherwise Application May Be INACCURATE</small></p>
						<div class="entry">
                        
							<p>
                            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                            <div class="all"><label>Supervisor</label><input type="text" style="margin-top:-20px;" name="supervisor" required placeholder="Mrs Agbelusi O."></div>
                            <div class="all"><label>Phone No.</label><input type="tel" style="margin-top:-20px;" name="phone" required placeholder="08107926083"></div>
                           	<div class="all"><label>e-Mail.</label><input type="email" style="margin-top:-20px;" name="mail" required placeholder="a@gmail.com"></div>
                            <div class="all"><label>Rank</label><input type="text" style="margin-top:-20px;" name="rank" required placeholder="HOD"></div>
                            <div class="all"><label>Location/Office</label><input type="text" style="margin-top:-20px;" name="ofc" required placeholder="8003"></div>
                          

                            <div class="all"><input type="submit" name="sbmat" value="Submit"></div>
                            </form>
                            
                            </p>
                            <br><br>
                            <div style="height:40px;"></div>
                            <U style="text-align:center; margin-left:120px;"><b>SUPERVISORS DATA / OPERATION</b></U>
                            <table border="1" cellspacing="0" cellpadding="6" style="color:darkgreen;">
                            <tr><th>Name</th><th>Rank</th><th>Office</th><th>Phone</th><th>Students</th><th>Operation</th></tr>
                            <?php
                            	$rty=mysql_query("SELECT * FROM supervisors");
								while($sdy=mysql_fetch_assoc($rty)){
									$n=$sdy['name'];
									$r=$sdy['rank'];
									$o=$sdy['office'];
									$p=$sdy['phone'];
									$id=$sdy['id'];
									$as=mysql_query("SELECT * FROM joint WHERE sup='$id'");
									$ue=mysql_num_rows($as);
									echo "<tr><td>$n</td><td>$r</td><td>$o</td><td>$p</td><td>$ue</td><td>
									<a href='assignstud.php?vb=$id'><img src='images/btn1.jpg' width='50' height='20'></a>
									<a href='xplore.php?nm=$id'><img src='images/btn2.jpg' width='50' height='20'></a>
									<a href='update.php?nm=$id'><img src='images/btn3.jpg' width='50' height='20'></a></td></tr>";
								}
							?>
                            </table>
						<?php
						
						if(isset($_POST['sbmat'])){
							
							$mail=$_POST['mail'];
							$office=strtoupper($_POST['ofc']);
							$supervisor=ucwords($_POST['supervisor']);
							$rank=strtoupper($_POST['rank']);
							$phone=$_POST['phone'];
							
							$sqler=mysql_query("SELECT * FROM supervisors WHERE mail='$mail'");
							$te=mysql_fetch_assoc($sqler);
							if($te==0){
                        	$sql=mysql_query("INSERT INTO supervisors(name,rank,office,mail,phone) VALUES('$supervisor','$rank','$office','$mail','$phone')");
							if($sql){
								echo "<body onload='prx()'></body>";
							}else{
								echo "<body onload='rx()'></body>";	
								}
						
						}else{
							echo "<body onload='prxp()'></body>";
							}
						}
						$rio=mysql_query("SELECT * FROM sreg");
						$nm=mysql_num_rows($rio);
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
								 <li><a href="chk.php"><?php echo "<b style='color:black;'>$nm</b> Unassigned Student(s)"; ?></a></li>
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
<?php
}else{
	header('location:lgt.php');
	}
?>
