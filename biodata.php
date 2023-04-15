<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Biodata Fitrah</title>
</head>
<body>
	<header>
		<h1>Biodata Saya</h1>
	</header>
	<main>
        <?php
        $nama = "Fitrah Amaliah Muis";
        $ttl = "Padang, 12 Agustus 2002";
        $jenkel = "Perempuan";
        $alamat = "Komplek Cimpago Perma Blok M no 8";
        $pendidikan = "SMAN 10 Padang";
        $hobby = "menonton film, traveling, Membaca Buku";
        ?>
        <center>
        <img src="profil.JPG" alt="fitrah" width="180" height="270">
        
        <table>
            <tr>
                <th>Nama</th>
                <td>:</td>
                <td><?php echo $nama ?></td>
            </tr>
            <tr>
                <th>Tempat, Tanggal Lahir</th>
                <td>:</td>
                <td><?php echo $ttl ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td><?php echo $jenkel ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td><?php echo $alamat ?></td>
            </tr>
            <tr>
                <th>Pendidikan Terakhir</th>
                <td>:</td>
                <td><?php echo $pendidikan ?></td>
            </tr>
            <tr>
                <th>Hobby</th>
                <td>:</td>
                <td><?php echo $hobby ?></td>
            </tr>
        </table>
        </center>
	</main>
</body>
</html>