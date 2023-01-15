<?php
require_once "Controllers.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Youtube Converter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/502e111284.js" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar fixed-top navbar-dark bg-dark">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="index.php">YT MP3 Downloader</a>
	  </div>
	</nav>

	<div class="container">
		
		<figure class="text-center" style="margin-top:10em;">
  			<blockquote class="blockquote">
				<p>YT MP3 Downloader Is A PHP Script Thats Allows Your To Download YouTube Video In MP3 Format Usig API .</p>
				 </blockquote>
		<figcaption class="blockquote-footer">
		    Made With <i class="fa-solid fa-heart"></i> By <cite title="Source Title"><a href="https://www.youtube.com/channel/UCao-qf0nQ2oN348yY3OW_dA" class="badge bg-dark">Self Learning</a></cite>
		</figcaption>
		</figure>
		

		<form method="post" action="" style="margin-top:6em;">

			<div class="form-floating mb-3" >
		  	<input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="video_id">
			  <label for="floatingInput">YT Video ID</label>
			  <br>
			  <button type="submit" class="btn btn-dark form-control" title="Download" name="download"><i class="fa-solid fa-download"></i></button>
			</div>
		</form>
		<br>

		<?php
		@$video_id = $_POST['video_id'];
		$start_downloader = new YTDownloader();
		$start_downloader->Download($video_id);
		?>

	</div>


</body>
</html>
