<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nomor Telepon</th>
        </tr>
        <?php 
        $students = array( 
            array("Alex", "220401", "0812345678"), 
            array("Bianca", "220402", "0812345687"), 
            array("Candice", "220403", "0812345665") 
        ); 

        array_push($students,  
            array("David", "220404", "0812345690"), 
            array("Eva", "220405", "0812345701"), 
            array("Fiona", "220406", "0812345712"), 
            array("George", "220407", "0812345723"), 
            array("Hannah", "220408", "0812345734") 
        ); 

        foreach ($students as $student) { 
            echo "<tr>"; 
            foreach ($student as $data) { 
                echo "<td>$data</td>"; 
            } 
            echo "</tr>"; 
        } 
        ?>
    </table>
</body>
</html>
