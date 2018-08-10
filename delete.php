<?php
session_start();
include 'co.php';
$d=$_GET['d'];
$x=mysql_query("DELETE FROM supervisors WHERE id='$d'");
$s=mysql_query("DELETE FROM joint WHERE sup='$d'");
if($s){
echo "<body onLoad='a()'></body>";
}
?>
<script>
function a(){
	alert("DELETED");
	window.location='inneradmin.php';
	}
</script>