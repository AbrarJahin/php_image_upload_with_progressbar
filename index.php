<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Ajax Upload and Resize with jQuery and PHP - Demo</title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
	<script src="js/script.js" type="text/javascript" charset="utf-8"></script>
	<link href="style/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="upload-wrapper">
		<div align="center">
			<h3>Ajax Image Uploader with Progressbar</h3>
			<span class="">Image Type allowed: Jpeg, Jpg, Png and Gif. | Maximum Size 1 MB</span>
			<form action="processupload.php" onSubmit="return false" method="post" enctype="multipart/form-data" id="MyUploadForm">
				<input name="image_file" id="imageInput" type="file" />
				<input type="submit"  id="submit-btn" value="Upload" />
				<img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
			</form>
			<div id="progressbox" style="display:none;"><div id="progressbar"></div><div id="statustxt">0%</div></div>
			<div id="output"></div>
		</div>
	</div>
</body>
</html>