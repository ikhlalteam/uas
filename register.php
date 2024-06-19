<?php
require_once('koneksi.php');
if (isset($_POST['register'])) {
    $nim = $_POST['nim'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $registerResult = register($nim, $username, $password);

    if ($registerResult) {
        echo "
          <script>
                    alert('Data Berhasil Ditambahkan');
                    window.location.href = 'login.php';
                    
                </script>
            ";


        
    } else {
        echo '<script>alert("Registrasi gagal.");</script>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>

    <title>Registrasi Perpustakaan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
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
}

body {
    background-image: url("bg44.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    font-family: Arial, sans-serif;
}

label {
    display: block;
    margin-bottom: 10px;
    color: white;
    font-size: 30px;
    font-weight: bold;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}


h2 {
    text-align: center;
    color: white;
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
    
    .button-container {
      display: flex;
      flex-direction: column;
      width: 100%;
      margin-top: 10px;
    }
    
    .input-icon {
            position: relative;
        }

        .input-icon input[type="text"],
        .input-icon input[type="password"] {
            padding-left: 30px;
        }

        .input-icon .fa-user,
        .input-icon .fa-lock,
        .input-icon .fa-graduation-cap {
            position: absolute;
            left: 8px;
            top: 50%;
            transform: translateY(-50%);
        }

  </style>
</head>
<body>
 <body>
    <h2>Registrasi Perpustakaan</h2>
    <form method="POST" action="">
        <label for="nim">NIM:</label>
        <div class="input-icon">
            <i class="fas fa-graduation-cap"></i>
            <input type="text" name="nim" placeholder="Masukkan NIM" required>
        </div><br><br>
        <label for="username">Username:</label>
        <div class="input-icon">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Masukkan username" required>
        </div><br><br>
        <label for="password">Password:</label>
        <div class="input-icon">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Masukkan password" required>
        </div><br><br>

        <div class="button-container">
            <button type="submit"  name="simpan">Simpan</button>
            <a href="login.php">
            <a href="login.php"><button type="button">Batal daftar</button></a>
        </div>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>






