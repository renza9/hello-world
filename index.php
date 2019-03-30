<!DOCTYPE html>
<html>
<head>

    <title>Belajar</title>
</head>
<body>
<h2>List Mahasiswa</h2>
<table border="1">
    <tr><th>NO</th><th>NIM</th><th>NAMA</th><th>GENDER</th><th>JURUSAN</th></tr>
    <?php
        /* Line Ke 16 : kita meng-includekan file koneksi.php yang menyimpan perintah untuk melakukan koneksi dari php ke mysql, kita membutuhkan perintah ini setiap kali ingin berinteraksi dengan database.
Line Ke 17 : Menampung data array hasil query untuk menampilkan data maahsiswa dalam variabel $mahasiswa.
Line Ke 19 : Melakukan Perulangan untuk menampilkan data mahasiswa dari variabel mahasiswa pada line ke 6.
*/
    include 'koneksi.php';
    $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa");
    $no=1;
    foreach ($mahasiswa as $row){
        $jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan':'Laki laki';
        echo "<tr>
            <td>$no</td>
            <td>".$row['nim']."</td>
            <td>".$row['nama']."</td>
            <td>".$jenis_kelamin."</td>
            <td>".$row['jurusan']."</td>
              </tr>";
        $no++;
    }
    ?>
</table>
</body>
</html>
