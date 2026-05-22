<?php 
$sql="
;
if($conexao->query($sql) === TRUE) {
	$_SESSION['status_dados'] = true;
}
?>