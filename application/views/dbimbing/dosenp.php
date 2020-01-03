<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="col-sm-12 col-md-4 offset-md-8">

	<?php echo form_open('bimbing/search') ?>
		<input type="text" name="keyword" placeholder="search">
		<input type="submit" name="search_submit" value="Cari">
	<?php echo form_close() ?>
</div>


</body>
</html>