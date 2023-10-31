<!DOCTYPE html>
<html>
<head>
	<title>Tugas3 P6</title>
	<style>
		h3:hover, button:hover{
				color: white;
				background-color: black;
		}
		table{
			border:3px solid black;
			margin: auto;
			margin-top: 100px;
			margin-bottom: -150px;
		}
		table, tr, td{
			padding-right: 50px;
			padding-left: 50px;
			padding-bottom: 10px;	
		}
		body{
			background-size: 150%;
			background-position: center;
		}
	</style>
</head>
<body>
	<form action="output.php" method="post">
<table>
	<tr>
		<td colspan="2"><center><h3>Buku Tamu</td></center></h3>
	</tr>
	<tr>
		<td><label>Nama  :</label></td>
	</tr>
	<tr>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td><label>Alamat : </label></td>
	</tr>
	<tr>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td><label>Tempat Lahir : </label></td>
	</tr>
	<tr>
		<td><input type="text" name="tempat"></td>
	</tr>
	<tr>
		<td><label>Tanggal Lahir : </label></td>
	</tr>
	<tr>
		<td><input type="text" name="tanggal"></td>
	</tr>
	<tr>
        <td>Jenis kelamin    :</td>
    </tr>
    <tr>    
    <td><input type="radio"name="jeniskel"value="Laki-Laki">Laki-Laki
    <input type="radio"name="jeniskel"value="Perempuan">Perempuan</td>
    </tr>
    <tr>
            <td>Pendidikan      : <select name="pendidikan"><option value="Pilih"><option value="D3">D3<option value="S1">S1<option value="S2">S2<option value="S3">S3</td>
            </select>
            </tr>
	<tr class="satu">
			<td colspan="2"><center><button type="submit" name="submit">Submit</button></center>
		</td>
	</tr>
</form></table>
</body>
</html>