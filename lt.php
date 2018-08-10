<?php
session_start();
include 'co.php';
if(!empty($_SESSION['a'])){
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
						<h1 class="title">Supervisor >> </h1>
						<p class="byline"><small style="color:red;">ASSIGN TOPICS</small></p>
						<div class="entry">
                        
							<p>
                            
                            
                            </p>
                            <br><br>
                            <?php
							$sup=$_SESSION['a'];
                           $rope=mysql_query("SELECT * FROM supervisors WHERE id='$sup'");
						   $bn=mysql_fetch_assoc($rope);
						   $name=$bn['name'];
						   ?>
                            <U style="text-align:center; margin-left:120px;"><b>MY PROJECT STUDENTS</b></U>
                           <table border="1" cellspacing="0" cellpadding="6" style="color:darkgreen;">
                            <tr><th>Matric</th><th>Level</th><th>Project Topic</th><th>Operation</th></tr>
                            <?php
							
                            	$rtyq=mysql_query("SELECT * FROM joint WHERE sup='$sup'");
								while($sdy=mysql_fetch_assoc($rtyq)){
									$pix=$sdy['pix'];
									$name=$sdy['name'];
									$phone=$sdy['phone'];
									$mail=$sdy['mail'];
									$level=$sdy['level'];
									$matric=$sdy['matric'];
									$pt=$sdy['pt'];
									$id=$sdy['id'];
									if(strlen($pt)<25){
									
									echo "<tr><td><a href='sreg/$pix'><img src='sreg/$pix' width='30' height='30'></a>&nbsp;$matric</td><td>$level</td><td>$pt</td><td><a href='as.php?xc=$id'>Update</a></td></tr>";
									}else{
									$rt=substr($pt,0,26);
									echo "<tr><td><a href='sreg/$pix'><img src='sreg/$pix' width='30' height='30'></a>&nbsp;$matric</td><td>$level</td><td>$rt...</td><td><a href='as.php?xc=$id'>Update</a></td></tr>";
										
										}
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
