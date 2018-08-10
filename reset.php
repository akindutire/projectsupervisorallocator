<?php
session_start();
include 'co.php';
mysql_query("TRUNCATE joint");
mysql_query("TRUNCATE sreg");
$tyu=mysql_query("SELECT * FROM bksreg");
$e=mysql_num_rows($tyu);
	
while($o=mysql_fetch_assoc($tyu)){
	$pix=$o['pix'];
	$name=$o['name'];
	$mail=$o['mail'];
	$lev=$o['level'];
	$matric=$o['matric'];
	$phone=$o['phone'];
	$ss=mysql_query("INSERT INTO sreg(pix,name,phone,mail,level,matric) VALUES('$pix','$name','$phone','$mail','$lev','$matric')");
	
	}
	if($ss)
	echo "<body onload='m()'></body>";
	else
	echo "<body onload='qm()'></body>";

?>
<script>
function m(){
	alert("ASSIGNATION RESET");
	window.location="inneradmin.php";
	}

function qm(){
	alert("SERVER @ERROR");
	window.location="inneradmin.php";
	}
</script>