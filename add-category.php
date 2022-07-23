<?php
session_start();
include ("header.php");
?>

<main>
	
	<div class= "section-1">
	<div class= "container text-center">
		<h1 class="heading-1">Add your Course here</h1>

<!-- Add your Category PAge data-->
<div class="row"> 
  <div class="col-md-8 mx-auto">
    
    <form name="frm" action="process-category.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Course Name</label>
    <input type="text" name= "cname"class="form-control"  aria-describedby="emailHelp" placeholder="Enter Course Name">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<!-- Alerts -->
<?php
  if (isset($_SESSION['msg1'])) {
    
  
?>
<div class="alert alert-success" role="alert">
  <?php echo $_SESSION['msg1'];
    unset ($_SESSION['msg1']);
  ?>
</div>
<?php } ?>

<?php
  if (isset($_SESSION['msg3'])) {
    
  
?>
<div class="alert alert-Course Already Exist" role="alert">
  <?php echo $_SESSION['msg3'];
    unset ($_SESSION['msg3']);
  ?>
</div>
<?php } ?>

<?php
  if (isset($_SESSION['msg2'])) {
    
  
?>
<div class="alert alert-danger" role="alert">
  <?php
   echo $_SESSION['msg2']; 
   unset ($_SESSION['msg2']);
 ?>
</div>
<?php } ?>

<!-- end of Alerts -->


  </div>
</div>


<!-- end of main section -->

	</div>
	</div>

</main>
<?php include("footer.php");
?>
