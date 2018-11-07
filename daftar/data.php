
<table border=1>
    <thead>
        <th>Nama Depan</th>
        <th>Nama Belakang</th>
        <th>Nim</th>
        <th>Kelas</th>
        <th>hobi</th>
        <th>film</th>
        <th>tempat</th>
        <th>Tanggal Lahir</th>
        <th>Aksi</th>
    </thead>
    <tbody>
<?php
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $nim = $row['nim'];
        echo "<tr>";
        echo "<td>" . $row["namadepan"]. "</td>";
        echo "<td>" . $row["namabelakang"]. "</td>"; 
        echo "<td>" . $row["nim"]. "</td>";
        echo "<td>" . $row["kelas"]. "</td>";
        echo "<td>" . $row["hobi"]. "</td>";
        echo "<td>" . $row["film"]. "</td>";
        echo "<td>" . $row["wisata"]. "</td>";
        echo "<td>" . $row["tgl_lahir"]. "</td>";
        echo "<td>
            <a href='editprofile.php?nim=$nim'>Edit</a>|<a href='index.php?nim=$nim'>kembali</a> 
            </td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}

?> 
    </tbody>
</table>