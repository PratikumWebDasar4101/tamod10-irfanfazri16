<!DOCTYPE html>
<html>
<head>
	<title>loogin</title>
</head>
<body>
	<form action="class.php"method="post">
username:<input type="text" name="nama">
password:<input type="text" name="password">
<tr><td>Pilih Aksi
        <select name="pilih">
        	<option value="tambah">login</option>
            <option value="tambah">tambah</option>
            <option value="hapus">hapus</option>
            <option value="tampil">tampil</option>
        </select>
<input type="submit" name="submit">
<a href="editpasword.php">edit</a>
</form>
</body>
</html>