<!DOCTYPE html>
<html lang="en">
<head>

	<title> JobUs | Dashboard </title>
	<?php include 'view/source.php'; ?>

</head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			
			<?php include 'view/header.php'; ?>

		</div>
	</div>
<!-- banner -->

<!-- Menu -->
<br>
<?php include 'view/menu.php'; ?>
<!-- end Menu -->
<!-- Dashboard -->
<br>
<div class="container">
<form>
<div class="form-group">
		  <label for="posisi">Title</label>
		  <input type="text" class="form-control" name="posisi" placeholder="">
	</div>
	<div class="form-group">
		  <label for="sel1">Job Type</label>
		  <select class="form-control" id="sel1">
		    <option value="">Permanent</option>
		    <option value="">Contract</option>
		  </select>
	</div>
	<div class="form-group">
		  <label for="posisi">Position</label>
		  <input type="text" class="form-control" name="posisi" placeholder="">
	</div>
	<div class="form-group">
		  <label for="posisi">Salary</label>
		  <input type="text" class="form-control" name="posisi" placeholder="">
	</div>
	<div class="form-group">
		  <label for="posisi">Requirements</label>
		  <textarea class="form-control" rows="5" id="req"></textarea>
	</div>
	<div class="form-group">
		  <label for="posisi">Location</label>
		  <select class="form-control" id="sel2">
		    <option value="">Padang</option>
		    <option value="">Payakumbuh</option>
		  </select>
	</div>
	<div class="form-group">
		    <label for="exampleInputFile">Upload Pamflet / Brosur (optional)</label><br><br>
		    <input type="file" id="pamflet">
		    <p class="help-block">nb : ekstensi yang diterima hanya berupa jpg/ jpeg/ png</p>
	</div>
	<center><button type="submit" class="btn btn-default">Submit</button></center><br>
</form>
</div>
<!-- Dashboard -->
<!-- javascript -->
	<?php include 'view/script.php'; ?>
<!-- javascript -->

</body>
</html>