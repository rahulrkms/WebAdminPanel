<?php
	session_start();
	require 'connection.php';


	$catid = $_POST['category'];
	$pname = $_POST['pname'];
	$sdesc = $_POST['sdesc'];

	

		$qry = "INSERT INTO `tbl_dashboard` (`id`, `catname`, `cpname`, `url`) 
		VALUES (NULL, '$catid', '$pname', '$sdesc');";

		$res = mysqli_query($con,$qry);

		if ($res == true) {
			$_SESSION['msg1']= 'Inserted Successfully';
		}
		else
			$_SESSION['msg2']= 'Something Went Wrong';

		header("location:add-product.php");
	

?>