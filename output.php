<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas3 P6</title>
</head>
<style>
   a:hover, h1:hover{
			color: yellow;
			background-color: black;
		}
		}
		table, tr, th, td{
			border:3px solid black;
			padding: 8px;
			margin-top: 50px;
			margin-bottom: -150px;
		}
		body{
			background-size: 100%;
		}
		table, tr, td{
			background-color: white;
			border: 3px solid black;
			padding-right: 30px;
			padding-left: 30px;
			padding-top: 10px;
			padding-bottom: 10px;
			background-color: yellow;
		}
	</style>
</style>
<body align="center">
    <?php
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tempat=$_POST['tempat'];
    $tanggal=$_POST['tanggal'];
    $jeniskel=$_POST['jeniskel'];
    $pendidikan=$_POST['pendidikan'];
    ?>
    <table border=1 bgcolor="Pink" align="center">
        <tr>
            <td colspan=2 align="center"><b>Data Mahasiswa</b></td>
        </tr>
        <tr>
            <td>Nama</td><td><?php echo $nama;?></td>
        </tr>
        <tr>
            <td>Alamat</td><td><?php echo $alamat;?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td><td><?php echo $tempat;?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td><td><?php echo $tanggal;?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td><td><?php echo $jeniskel;?></td>
        </tr>
        <tr>
            <td>Pendidikan</td><td><?php echo $pendidikan;?></td>
        </tr>
</table>    
<a href="input.php">INPUT DATA LAGI</a>
</body>
</html>