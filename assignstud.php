<?php
session_start();
include 'co.php';
$sup_id=$_GET['vb'];
$all=mysql_query("SELECT * FROM joint WHERE sup='$sup_id'");
if(mysql_num_rows($all)==0){

$e=mysql_query("SELECT * FROM bksreg");
$countsd=mysql_num_rows($e);
$y=mysql_query("SELECT * FROM supervisors");
$countsp=mysql_num_rows($y);

$offr=intval($countsd/$countsp);
	
	
	$yrt=mysql_query("SELECT * FROM supervisors WHERE id='$sup_id'");
	$iop=mysql_fetch_assoc($yrt);
	$rank=$iop['rank'];
	
	if($rank=='HOD'){
		$off=$offr-2;
	}else{
		$off=$offr;
	}
	//echo $off;
	
	$first=mysql_query("SELECT * FROM sreg");
	$i=mysql_fetch_assoc($first);
	$start=($i['id'])-1;
	$sql=mysql_query("SELECT * FROM sreg LIMIT $start,$off");
		if(mysql_num_rows($sql)>0){
			
		while($rty=mysql_fetch_assoc($sql)){
			$name=$rty['name'];
			$pix=$rty['pix'];
			$phone=$rty['phone'];
			$mail=$rty['mail'];
			$level=$rty['level'];
			$matric=$rty['matric'];
			$sid=$rty['id'];
			$ansql=mysql_query("INSERT INTO joint(pix,name,phone,mail,level,matric,sup,pt,pd) VALUES('$pix','$name','$phone','$mail','$level','$matric','$sup_id',' ',' ')");
			mysql_query("DELETE FROM sreg WHERE id='$sid'");
				
			
	}
		
					echo "<body onload='sx()'></body>";
			
	
		}else{
					echo "<body onload='sxs()'></body>";
			}
}else{
				echo "<body onload='sxsp()'></body>";
	}
?>
<script>
	
	function sxsp(){
		alert("Project Has Been Assigned To This Supervisor");
		window.location='inneradmin.php';
		}
	
	function sx(){
		alert("Successfully Assign Project Students");
		window.location='inneradmin.php';
		}
	
	function sxs(){
		alert("No Student To Assign, Check Out On Adding Manually");
		window.location='inneradmin.php';
		}
</script>