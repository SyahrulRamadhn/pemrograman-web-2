<!DOCTYPE html>
<html>
    <head>
        <title>Mengakses Variabel Array</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <?php
            $mahasiswa = array
            (
            array("nim"=>"TI-001", "nama_mahasiswa"=>"Andi",
            "program_studi"=>"Teknik Informatika"),
            array("nim"=>"TI-002", "nama_mahasiswa"=>"Budi",
            "program_studi"=>"Teknik Informatika"),
            array("nim"=>"TI-003", "nama_mahasiswa"=>"Wati",
            "program_studi"=>"Teknik Informatika"),
            array("nim"=>"SI-001", "nama_mahasiswa"=>"Fatma",
            "program_studi"=>"Sistem Informasi"),
            array("nim"=>"SI-002", "nama_mahasiswa"=>"Wawan",
            "program_studi"=>"Sistem Informasi")
            );
        ?>
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Program Studi</th>
            </tr>
            <?php
            /* menampilkan isi tabel */
            echo "
            <tr>
                <td>1</td>
                <td>".$mahasiswa[0]["nim"]."</td>
                <td>".$mahasiswa[0]["nama_mahasiswa"]."</td>
                <td>".$mahasiswa[0]["program_studi"]."</td>
            </tr>
            <tr>
                <td>2</td>
                <td>".$mahasiswa[1]["nim"]."</td>
                <td>".$mahasiswa[1]["nama_mahasiswa"]."</td>
                <td>".$mahasiswa[1]["program_studi"]."</td>
            </tr>
            <tr>
                <td>3</td>
                <td>".$mahasiswa[2]["nim"]."</td>
                <td>".$mahasiswa[2]["nama_mahasiswa"]."</td>
                <td>".$mahasiswa[2]["program_studi"]."</td>
            </tr>
            <tr>
                <td>4</td>
                <td>".$mahasiswa[3]["nim"]."</td>
                <td>".$mahasiswa[3]["nama_mahasiswa"]."</td>
                <td>".$mahasiswa[3]["program_studi"]."</td>
            </tr>
            <tr>
                <td>5</td>
                <td>".$mahasiswa[4]["nim"]."</td>
                <td>".$mahasiswa[4]["nama_mahasiswa"]."</td>
                <td>".$mahasiswa[4]["program_studi"]."</td>
            </tr>
            ";
            ?>
        </table>
        
</body>
</html>