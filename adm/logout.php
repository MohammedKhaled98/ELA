<?php
	session_start();
	$ulrx="location:"." index.php?id=".$_SESSION['mdrsh'];
	session_destroy();
header($ulrx);
	////header('location: index.php');
?>