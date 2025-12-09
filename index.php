<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
</head>
<body>
     <form action="" method="post">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Nis</td>
                <td>:</td>
                <td><input type="text" name="nis" required></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" required></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="text" name="jumlah" required></td>
            </tr>
             <tr>
                <td colspan="3"><input type="submit" name="submit" value="Save"></td>
            </tr>
        </table>
     </form>

    <?php
    include 'config.php';
    

    if (isset($_POST['save'])) {
        $nama = $_POST['nama'];
        $nis = $_POST['nis'];
        $kelas = $_POST['kelas'];
        $jumlah = $_POST['jumlah'];

        echo "<div class='hasil'>";
        echo "<h3>Hasil</h3>";
        echo "<p><strong>Nama Lengkap:</strong> $nama</p>";
        echo "<p><strong>Nis:</strong> $nis</p>";
        echo "<p><strong>Kelas:</strong> $kelas</p>";
        echo "<p><strong>Jumlah:</strong> $jumlah</p>";
        echo "</div>";
    }
    ?>

    <?php
    $query = mysqli_query($conn, "SELECT * FROM siswa");
    while ($data = mysqli_fetch_assoc($query)) :
    ?>  
    <div class="card">
        <p><?= $data['nama']; ?></p>
        <p><?= $data['nis']; ?></p>
        <p><?= $data['kelas']; ?></p>
        <p><?= $data['jumlah']; ?></p>
        <button onclick="save('<?= $data['nama']; ?>')">Save</button>
    </div>

<?php endwhile; ?>
</body>
</html>