<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pengambilan</title>
</head>
<body>
	<center>
		<h1>Formulir Pengambilan</h1>
	</center>
	<form action="<?php echo base_url(). 'pengambilan/index'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>No Laporan</td>
                <td><input type="text" name="laporan"></td>
			</tr>
			<tr>
				<td>Nama Pengambil</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>No Handphone</td>
				<td><input type="text" name="hp"></td>
            </tr>
            <tr>
				<td>Foto Pengambil</td>
				<td><input type="text" name="foto"></td>
            </tr>
            <tr>
				<td>Tanggal Pengambilan</td>
				<td><input type="text" name="tanggal"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>