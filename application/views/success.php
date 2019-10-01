<html>
<head>
<title>Uploaded Image Details</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container"><br/><br/>
	<h2>Your Image was successfully uploaded!</h2><br/>
	<h3>Image Upload Details:</h3>
	<ul class="list-group">
	<li class="list-group-item">Image Url: <a href="<?php echo base_url().'uploads/'.$upload_data['file_name']; ?>" target="_blank"><?php echo base_url().'uploads/'.$upload_data['file_name']; ?></a></li><br/>
	<li class="list-group-item">Width: <?php echo $upload_data['image_width']; ?></li><br/>
	<li class="list-group-item">Height: <?php echo $upload_data['image_height']; ?></li>
	</ul><br/>
	<strong><p><?php echo anchor('uploadimage', 'Upload Another Image!'); ?></p></strong>
</div> 

</body>
</html>