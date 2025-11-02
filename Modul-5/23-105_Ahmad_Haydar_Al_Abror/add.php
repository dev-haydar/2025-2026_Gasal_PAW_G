
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Supplier</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; padding: 20px; }
        form { width: 50%; margin: 20px auto; padding: 20px; border: 1px solid #ddd; background-color: #fff; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        form input[type="text"] { width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        form button, form a { display: inline-block; padding: 10px 20px; text-align: center; }
        form a { background-color: #f44336; color: white; text-decoration: none; border-radius: 5px; }
        .error { color: red; font-size: 14px; }
    </style>
</head>
<body>

<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $errors = [];

    if (empty($nama) || !ctype_alpha(str_replace(' ', '', $nama))) { $errors[] = "Nama harus berisi huruf saja."; }
    if (empty($telp) || !ctype_digit($telp)) { $errors[] = "Telp harus berisi angka saja."; }
    if (empty($alamat) || !preg_match('/[A-Za-z]/', $alamat) || !preg_match('/\d/', $alamat)) { $errors[] = "Alamat harus alfanumerik."; }

    if (empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO supplier (nama, telp, alamat) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nama, $telp, $alamat);
        $stmt->execute();
        header("Location: index.php");
    }
}
?>

<form method="POST">
    Nama: <input type="text" name="nama" value="<?php echo isset($nama) ? $nama : ''; ?>"><br>
    Telp: <input type="text" name="telp" value="<?php echo isset($telp) ? $telp : ''; ?>"><br>
    Alamat: <input type="text" name="alamat" value="<?php echo isset($alamat) ? $alamat : ''; ?>"><br>
    <button type="submit">Simpan</button>
    <a href="index.php">Batal</a>
</form>

<?php if (!empty($errors)) { foreach ($errors as $error) { echo "<p class='error'>$error</p>"; }} ?>

</body>
</html>
