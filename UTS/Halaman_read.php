<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Read</title>
</head>
<body>
    <h2>DAFTAR GAME POPULER DI INDONESIA 2021</h2>
    <table >
		<tr>
			<th>No</th>
			<th>NamaGame</th>
			<th>Penerbit</th>
			<th>Tahun Rilis</th>
			<th>Kategori</th>		
		</tr>
		<?php 
        //include file koneksi
		include "koneksi.php";

        //sql select
		$sql ="SELECT nama_game,kategori,penerbit, tahun_rilis FROM DATA";
		$nomor = 1;
        
        $kueri = $koneksi->query($sql);
        if($kueri){
            while($info = $kueri->fetch_array()){
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $info['nama_game']; ?></td>
                <td><?php echo $info['penerbit']; ?></td>
                <td><?php echo $info['tahun_rilis']; ?></td>
                <td><?php echo $info['kategori']; ?></td>
            </tr>
            <?php } 
            }
            else{
                echo "Gagal Menampilkan Data : ".$koneksi->error;
            }
            ?>
        
	</table>
</body>
</html>