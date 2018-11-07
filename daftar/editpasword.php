<?php
require_once("konek.php");

$id = $_GET["id"];

$sql = "SELECT * FROM login WHERE id=$id";
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="updatepass.php" method="get">
        <table>
            <tr><td>id</td><td><input type="text" name="id2" value="<?php echo $row["id"]; ?>" disabled>
                      <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"></td></tr>
                      <tr><td>username</td><td><input type="text" name="nama" value="<?php echo $row["nama"]; ?>"></td></tr>
            <tr><td>password</td><td><input type="password" name="password" value="<?php echo $row["password"]; ?>"></td>
            </tr>
            <tr><td colspan="2"><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>