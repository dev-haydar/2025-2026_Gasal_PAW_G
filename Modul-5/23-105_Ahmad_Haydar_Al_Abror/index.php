<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Master Supplier</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #2a7ebb;
            margin-bottom: 20px;
        }
        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 10px;
        }
        .btn-add {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th {
            background-color: #add8e6;
            color: #333;
            padding: 10px;
            text-align: center;
        }
        td {
            padding: 10px;
            text-align: center;
        }
        .btn-edit {
            background-color: #ff8c00;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            text-decoration: none;
            font-size: 14px;
        }
        .btn-delete {
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
        }
    </style>
    <script>
        function confirmDelete(id) {
            if (confirm("Apakah Anda yakin ingin menghapus supplier ini?")) {
                window.location.href = "index.php?delete_id=" + id;
            }
        }
    </script>
</head>
<body>

<h2>Data Master Supplier</h2>
<div class="button-container">
    <a href="add.php" class="btn-add">Tambah Data</a>
</div>
<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Telp</th>
        <th>Alamat</th>
        <th>Tindakan</th>
    </tr>
    <?php
    
    include 'db.php';

    if (isset($_GET['delete_id'])) {
        $id = $_GET['delete_id'];
        $stmt = $conn->prepare("DELETE FROM supplier WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        header("Location: index.php");
    }

    $result = $conn->query("SELECT * FROM supplier");
    $no = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$no++."</td>
                <td>".$row['nama']."</td>
                <td>".$row['telp']."</td>
                <td>".$row['alamat']."</td>
                <td>
                    <a href='edit.php?id=".$row['id']."' class='btn-edit'>Edit</a>
                    <button onclick=\"confirmDelete(".$row['id'].")\" class='btn-delete'>Hapus</button>
                </td>
              </tr>";
    }
    $conn->close();
    ?>
</table>

</body>
</html>
