<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include '../view/source3.php'; ?>
</head>
<body>

 <?php include('../view/navbar.php'); ?>

	<ul class="nav nav-tabs nav-justified">
  		<li><a href="../admin/dashboard.php">Home</a></li>
  		<li><a href="../admin/pekerja.php">Pekerja</a></li>
  		<li><a href="../admin/pengiklanan.php">Pengiklanan</a></li>
  		<li><a href="postingan.php">Postingan</a></li>
  		<li role="presentation" class="active"><a href="pengaturan.php"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Setting</a></li>
	</ul>


	<!-- Main content -->
	<div class="container">
		<!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Detail</button>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
            <p>Some text in the modal.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End modal -->
	</div>
	<!-- end main content -->
  
	<!-- footer -->
  <!-- TES DULU :v -->
  <?php include '../view/footer2.php'; ?>
<!-- //footer -->

</body>
</html>