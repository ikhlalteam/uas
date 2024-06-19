<?php
require_once('koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM user WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: halaman_utama.php");
}

if (isset($_POST["simpan"])) {
    if (edit($_POST) > 0) {
        echo "
            <script>
            alert('Data Berhasil Diubah');
            window.location.href='halaman_utama.php';
            </script>
        ";
    } else {
        echo "
            <script>
            alert('Data Gagal Diubah');
            window.location.href='halaman_utama.php';
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
    <title>Edit Data</title>
    <style>
        body {
            background-image: url("bg3.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: blue;
        }

        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            background-color: rgba(0, 5, 0, 0.5);
            display: flex;
            flex-direction: column;
            align-items: center;
            animation-name: fadeIn;
            animation-duration: 1s;
            color: white;
        }

        table {
            width: 100%;
            margin-top: 10px;
        }

        td {
            padding: 5px;
        }

        input[type="text"],
        input[type="password"],
        select,
        input[type="date"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 10px;
        }

        button[type="button"] {
            width: 100%;
            padding: 10px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 10px;
        }

        button-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }


    </style>
</head>
<body>
    <div align="center">
        <h1>Edit Data</h1>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <table>
                <tr>
                    <td>nim</td>
                    <td><input type="text" name="nim" value="<?php echo $row['nim']; ?>" /></td>
                </tr>
                <tr>
                    <td>USERNAME</td>
                    <td><input type="text" name="username" value="<?php echo $row['username']; ?>" /></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="text" name="password" value="<?php echo $row['password']; ?>" /></td>
                </tr>
                <tr>
                    <td>level</td>
                    <td>
                        <select name="level">
                            <option value="admin" <?php if ($row['level'] == 'admin') echo 'selected'; ?>>Admin</option>
                            <option value="user" <?php if ($row['level'] == 'user') echo 'selected'; ?>>User</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>tangal daftar </td>
                    <td><input type="date" name="tgl_daftar" value="<?php echo $row['tgl_daftar']; ?>" /></td>
                </tr>
                <tr>
                     <td colspan="2" class="button-container">
                        <button type="submit" name="simpan">Simpan</button>
                        <a href="halaman_utama.php"><button type="button">Batal edit</button></a>
                        
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

