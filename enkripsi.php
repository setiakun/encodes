<?php
$stringawal = $_POST['url'];
$hasilenkripsi = base64_encode($stringawal); // enkripsi $stringawal dg metode base64
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Cara Enkripsi URL Parameter Pada PHP</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<table width="271" border="0">
<tr>
<td width="114"><div align="right">URL</div></td>
<td width="147"><input type="text" name="url" value="http://" style="width:500px;"/></td>
<td><input type="submit" name="Submit" value="Hasil" /></td>
</tr>
<tr>
</tr>
<tr>
<td><?php echo $hasilenkripsi?></td>
</tr>
</table>
</form>