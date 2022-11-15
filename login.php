<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>login admin</h2>
    <form action="tampil-mahasiswa.php" method="POST">
        Username: <br>
        <input type="text" name="username" required>
        <br>
        password: <br>
        <input type="password" name="password" required>
        <br>
        <input type="submit" name="simpan" vaule="login">
        <input type="reset" name="kosongkan" value="kosongkan">
    </form>
</body>
</html>