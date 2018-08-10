<?php
session_start();
include 'co.php';
$vb=$_GET['vb'];
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
		var nid=<?php echo $vb; ?>;
		alert("Processed");
		window.location="chk.php?vb"+nid;
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
						<p class="byline"><small style="color:red;">ADD PROJECT SUPERVISOR/ ASSIGN STUDENTS</small></p>
						<div class="entry">
                        
							<p>
                            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                            <div class="all"><label>Supervisor</label><select name="supervisor" style="margin-top:-20px;">
                            <?php
                            	$rty=mysql_query("SELECT * FROM supervisors WHERE rank!='HOD'");
								while($sdy=mysql_fetch_assoc($rty)){
									$n=$sdy['name'];
									
									$id=$sdy['id'];
									
									echo "<option value='$id'>$n</option>";
								}
                            ?>
                          </select></div>

                            <div class="all"><input type="submit" name="sbmat" value="Submit"></div>
                            </form>
                            
                            </p>
                            <br><br>
                           
						   <?php
						
						if(isset($_POST['sbmat'])){
							$sqlp=mysql_query("SELECT * FROM sreg WHERE id='$vb'");
							
							$uio=mysql_fetch_assoc($sqlp);
							$name=$uio['name'];
							$pix=$uio['pix'];
							$phone=$uio['phone'];
							$mail=$uio['mail'];
							$lev=$uio['level'];
							$mat=$uio['matric'];
							
							
							$supervisor=$_POST['supervisor'];
							
                        	$sql=mysql_query("INSERT INTO joint(pix,name,phone,mail,level,matric,sup,pt,pd) VALUES('$pix','$name','$phone','$mail','$lev','$mat','$supervisor',' ',' ')");
							mysql_query("DELETE FROM sreg WHERE id='$vb'");
							if($sql){
								echo "<body onload='prx()'></body>";
							}else{
								echo "<body onload='rx()'></body>";	
								}
						}
						$sqlpi=mysql_query("SELECT * FROM sreg");
							$rio=mysql_num_rows($sqlpi);
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
                                <li><a href="chk.php">Back</a></li>
								 <li><a href="chk.php"><?php echo "<b style='color:black;'>$rio</b> Unassigned Student(s)"; ?></a></li>
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
