<?php
require_once 'koneksi.php';

$data = query("SELECT * FROM user");

if (isset($_POST["simpan"])) {
    if ($_POST['id'] == '') {
        // Data baru, tambahkan data
        if (tambah($_POST) > 0) {
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    window.location.href = 'halaman_utama.php';
                    
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data Gagal Ditambahkan');
                   
                </script>
            ";
        }
    } else {
        
        if (edit($_POST) > 0) {
            echo "
                <script>
                    alert('Data Berhasil Diubah');
                     
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data Gagal Diubah');
                     
                </script>
            ";
        }
    }
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    if (hapus($id) > 0) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                 
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Dihapus');

            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>data anggota perpustakaan</title>
    <link rel="stylesheet" href="sytle.css">
</head>
<body>
    <div class="logout">
    <a href="login.php">Logout</a>
</div>

    <div align="center">    
        <h1>Tambah Data</h1>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>nim</td>
                    <td><input type="text" name="nim" placeholder="masukan nim dengan benar...." /></td>
                   
                </tr>
                <tr>
                    <td>USERNAME</td>
                    <td><input type="text" name="username" placeholder="masukan username anda...." /></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="text" name="password" placeholder="buat password disini..." /></td>
                </tr>
                <tr>
                    <td>level</td>
                    <td>
                        <select name="level">
                            <option value="admin">Admin</option>
                            <option value="user">user</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>tangal daftar </td>
                    <td><input type="date" name="tgl_daftar" /></td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="id" value="">
                        <button type="submit" name="simpan" class="btn btn-save" href="halaman_utama.php">Simpan</button>

                    </td>
                </tr>
            </table>
        </form>

        <!-- Tampilkan data tabel -->
        <div>
            <h2>Data tabel </h2>
            <table border="1" cellpadding="5" cellspacing="2">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>id</th>
                        <th>nim</th>
                        <th>username</th>
                        <th>password</th>
                        <th>level</th>
                        <th>tgl daftar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($data as $row) : ?>
                        <?php
                            $tgl = $row['tgl_daftar'];
                            $tgl_baru = date('d M Y', strtotime($tgl));
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nim']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['level']; ?></td>
                            <td><?php echo $tgl_baru; ?></td>
                            <td>
                               <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-edit">Edit</a>
                                <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                            </td>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
