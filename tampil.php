<html>
    <h1>APLIKASI PEMERIKSAAN HEWAN DI R.S SUMBER WARAS</h1>
    <table border="1">
        <tr>
        <th>Nama Pemilik</th>
        <th>Jenis Hewan</th>
        <th>Keluhan</th>
</tr>

<?php
include("koneksi.php");
$sql='SELECT * FROM tb_hewan';
$query=mysqli_query($koneksi, $sql);
while($putri_3nov=mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$putri_3nov['nama_pemilik']."</td>";
    echo"<td>".$putri_3nov['jenis_hewan']."</td>";
    echo"<td>".$putri_3nov['keluhan']."</td>";
    echo"<td>";
    echo"<a href='edit.php?id=".$putri_3nov['id']."'>edit</a> ";
    echo"<a href='hapus.php?id=".$putri_3nov['id']."'>hapus</a> ";
    echo"</tr>";
    echo"</tr>";
}
?>
</table>
</body>
</html>



