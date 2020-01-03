<head>
	<meta charset="UTF-8">
	<title>Halaman Dosen Pembimbing</title>
</head>
<body>
	
 
	<table>
 
			<?php foreach($bimbings as $bimbing) { ?>
				<tr>
					<td><?php echo $bimbing->nama_dosen ?></td>
				</tr>
			<?php } ?>
 
 
	</table>
</body>
</html>