<html>
<head>
<title>Upload Image</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body><br/><br/>
	<div class="container">
	<h2>Codeigniter Image Upload with Width and Height</h2>
	<br/>
	<?php echo $error;?>

		<?php echo form_open_multipart('uploadimage/do_upload'); ?>
		<div class="form-group">
			<label for="file">File:</label>
			<input type="file" name="userfile" size="20"  class="form-control" required />
		</div>
		<div class="form-group">
			<label for="file">Width:</label>
			<input type="number" name="width" size="20"  class="form-control" required />
		</div>
		<div class="form-group">
		<label>Height:</label>
		<input type="number" name="height" size="20" class="form-control" required />
		</div>
		<br />

		<input type="submit" value="upload" class=" btn btn-success" />

		</form>
	</div>
</body>
</html>