<?php
	session_start();
	require 'connection.php';

	$cname = $_POST['cname'];
		
		$qrycheck = "SELECT * FROM tbl_category WHERE catname= '$cname'";
		$result = mysqli_query($con,$qrycheck);

		if(mysqli_num_rows($result)>0){
			$_SESSION['msg3']= 'Course Already Added';
		}

		else{
		$qry = "INSERT INTO `tbl_category` (`id`, `catname`) VALUES (NULL, '$cname')";
		$res = mysqli_query($con,$qry);
		if ($res == true) {
			$_SESSION['msg1']= 'Inserted Successfully';
		}
		else
			$_SESSION['msg2']= 'Something Went Wrong';

	}
	
		header("location:add-category.php");

?>