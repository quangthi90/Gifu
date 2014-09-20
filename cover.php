<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>jQuery Drag'n'crop Plugin Examples</title>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link href="jquery.drag-n-crop.css" rel="stylesheet" type="text/css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="imagesloaded.js"></script>
<script src="scale.fix.js"></script>
<script src="jquery.drag-n-crop.js"></script>

</head>

<body>
<div style="width: 600px; height:200px; overflow: hidden;">
<?php
	$file = $_FILES['user_cover'];
	if(move_uploaded_file($file['tmp_name'], "upload/".$file['name']))
		echo ("<img src='upload/".$file['name']."' id='demo3'/>");
	else echo ("<img src='images/1.jpg' id='demo3'/>");
?>
 </div>
 <button id="btdrag">drag</button>
<button id="btsave">save</button>

<div id="position_img"></div>
<form	action="cover.php"	method="post"	enctype="multipart/form-data">	
	Browse	file	<input	type="file"	name="user_cover"	/>	
	<input	type="submit"	value="Upload"/>	
</form>	
<script type="text/javascript">
	$('#btsave').click(function(){
		$('#demo3').draggable( "disable" );
		a = $('#demo3').dragncrop('getPosition');
		$('#position_img').text ("Position offset: "+ a.offset);
	})

	$('#btdrag').click(function(){
		$('#demo3').draggable( "enable" );
	})

	$('#demo3').load(function(){
		$('#demo3').dragncrop();
		$('#demo3').draggable();
		$('#demo3').draggable( "disable" );
	})
</script>
</div>
</body>
</html>

 
