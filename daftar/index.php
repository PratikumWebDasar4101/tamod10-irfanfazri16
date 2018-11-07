<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="class.php" method="post">
        <table>
            <H1>Data Mahasiswa</H1>
        <tR><td>namadepan<td><input type="text" name="namadepan"><br>
             <tR><td>namabelakang<td><input type="text" name="namabelakang"><br>
        <tr><td>nim<td><input type="text" name="nim"><br>
             <tr><td>kelas<td><input type="text" name="kelas"><br>
        <tr><td>hobi<td><input type="text" name="hobi"><br>
             <tr><td>film<td><input type="checkbox" name="film" value="drama">drama<br>
                         <td><input type="checkbox" name="film" value="action">action<br>
                          <td><input type="checkbox" name="film" value="anime">anime<br>
                          <td><input type="checkbox" name="film" value="kartun">kartun<br>
            <tr><td>tempat wisata<td><input type="checkbox" name="tempat" value="bali">bali<br>
                         <td><input type="checkbox" name="tempat" value="tanjung selor">tanjung selor<br>
                          <td><input type="checkbox" name="tempat" value="jakarta">jakarta<br>
                          <td><input type="checkbox" name="tempat" value="lombok">lombok<br>

        <tr><td>tanggallahir<td><input type="date" name="tgl_lahir">
        <tr><td>Pilih Aksi
        <select name="pilih">
            <option value="tambah">tambah</option>
            <option value="hapus">hapus</option>
            <option value="tampil">tampil</option>
        </select>
        <br>
        <tr><td><input type="submit" value="Kirim">
    </form>
    </table>
</body>
</html>