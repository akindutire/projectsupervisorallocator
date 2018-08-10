<?php
session_start();
include 'co.php';
if(isset($_POST['sbreg'])){
	
	#photo upload mode started
					$available_extensions=array('jpg','jpeg','png','gif');
					$max_size=712000000;
			$filename=$_FILES['ph']['name'];
			$filesize=$_FILES['ph']['size'];
			$tmpname=$_FILES['ph']['tmp_name'];
			$ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
					if((in_array($ext,$available_extensions)) || ($filesize<=$max_size)){
						$path='sreg/';
						$sna=mktime().$filename;
							
					}else{
						$a['0']='<body onload="ut()"></body>';
							}
			$mt=$_POST['matric'];
			if(!empty($mt) && !empty($sna)){
				
				move_uploaded_file($tmpname,$path.$sna);
	
	
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$mail=$_POST['mail'];
	$level=$_POST['level'];
	
	
	$sql=mysql_query("INSERT INTO sreg(pix,name,phone,mail,level,matric) 
	VALUES('$sna','$name','$phone','$mail','$level','$mt')") or die("Error");
	
	$adfsql=mysql_query("INSERT INTO bksreg(pix,name,phone,mail,level,matric) 
	VALUES('$sna','$name','$phone','$mail','$level','$mt')") or die("Error");
		if($sql){
			echo "<body onload='pro()'></body>";
		
		}
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
<script>
	
	function ut(){
		alert("Unsupported Image Format / Image Too Large");
		window.location="sreg.php";
		}
	
	function pro(){
		alert("Processed");
		window.location="sreg.php";
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
						<h1 class="title">Student >> Registration</h1>
						<p class="byline"><small style="color:red;"></small></p>
						<div class="entry">
                        
							<p>
                            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                           
                            <div class="all"><label>Photo</label><input type="file" style="margin-top:-20px;" name="ph" required></div>
                            <div class="all"><label>Matric No.</label><input type="text" style="margin-top:-20px;" name="matric" required placeholder="SO5/COM/2012/584"></div>
                            <div class="all"><label>Fullname</label><input type="text" style="margin-top:-20px;" name="name" required placeholder="Akindele Happiness"></div>
                            <div class="all"><label>Phone</label><input type="text" style="margin-top:-20px;" name="phone" required placeholder="08107926083"></div>
                            <div class="all"><label>e-Mail</label><input type="text" style="margin-top:-20px;" name="mail" required placeholder="akindutire33@gmail.com"></div>
                            <div class="all"><label>Level</label>
                            <select name="level" style="margin-top:-20px;">
                            	<option value="ND2">ND2</option>
                                <option value="HND2">HND2</option>
                            </select>
                            </div>
                            
                            <div class="all"><input type="submit" name="sbreg" value="Submit"></div>
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
