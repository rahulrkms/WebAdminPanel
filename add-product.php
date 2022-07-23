<?php
session_start();
include ("header.php");
require 'connection.php';
?>

<main>
	
	<div class= "section-1">
	<div class= "container text-center">
		<h1 class="heading-1">Add Job Details</h1>

<!-- Add your Category PAge data-->
<div class="row"> 
  <div class="col-md-8 mx-auto">
    
    <form name="frm" action="process-product.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Select Course</label>
    <select name="category" class="form-control">

  <?php 
    $qry = "select * from  tbl_category";
    $raw = mysqli_query($con, $qry);
    while ($res = mysqli_fetch_array($raw)) 
    {
  ?>
    <option value="<?php echo $res['catname']; ?>"> <?php echo $res['catname']; ?></option>

  <?php   }   ?> 

    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Enter Job Details</label>
    <textarea name="pname" rows="3" cols="30" class="form-control"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Paste Url</label>
    <input type="text" name="sdesc" class="form-control" placeholder="Enter link">
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
