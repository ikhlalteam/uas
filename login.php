<?php
 ob_start();
     session_start();
     $koneksi = mysqli_connect("localhost","root","","perpustakaan");

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>login perpustakaan</title>
     <style >

        form {
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      border-radius: 10px;
      background-color: rgba(0, 5, 0, 0.5);
      display: flex;
      flex-direction: column;
      align-items: center;
     
    }

    body {
    background-image: url("bgi.jpg"); 
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    font-family: Arial, sans-serif;

  }
  label {
  display: black;
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

input[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: rgb(255, 0, 0);
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  margin-top: 10px;
}

input[type="submit"]:hover {
  background-color: #45a049;
}


  h2 {
  text-align: center;
  color: black;
}
.btn {
      background-color:green;
      width: 60%;
      padding: 10px 20px;
      color: white;
      text-decoration: none;
      border: none;
      cursor: pointer;
    }
.typing-title {
      text-align: center;
      color: blck;
    }
    
   
    .typing-cursor::after {
      content: "|";
      display: inline-block;
      animation: blink-caret 0.75s infinite;
      color: black;
    }
    
    @keyframes blink-caret {
      50% {
        opacity: 0;
      }
    }

.icon {
        position: relative;
        display: inline-block;
        color: white;
        width: 20px;
        height: 20px;
        margin-right: 5px;
    }

    .icon i {
        position: absolute;
        color: white;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

.input-container {
        display: flex;
        align-items: center;
    }

    .icon {
        margin-right: 5px;
    }

    .input-container input[type="text"],
    .input-container input[type="password"] {
        flex: 1;
    }

.input-label {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .input-label .icon {
        margin-right: 5px;
    }



   
 </style>
</head>
<body>
    <h2 class="typing-title">unisla <span id="typing-text"></span></h2>
    <form method="POST" action="">
    <label for="username" class="input-label">Username:</label>
    <div class="input-container">
        <span class="icon"><i class="fas fa-user"></i></span>
        <input type="text" name="username" placeholder="Masukkan username..." required><br><br>
    </div>
    <label for="password" class="input-label">Password:</label>
    <div class="input-container">
        <span class="icon"><i class="fas fa-lock"></i></span>
        <input type="password" name="password" placeholder="Masukkan password..." required><br><br>
    </div>
    <br><br>
        <button type="submit" name="login" class="btn"> login </button>
        <br><br>

    
</form>

    <p style="color: white; text-align: center;">Belum punya akun? <a href="register.php"><button style="background-color: blue; color: white;">Register</button></a></p>
<script>
        const texts = ["login perpustakaan", "solusi masa depan","jaya jaya"];
        const typingTextElement = document.getElementById("typing-text");
        let textIndex = 0;
        let charIndex = 0;

        function typeText() {
            if (charIndex < texts[textIndex].length) {
                typingTextElement.textContent += texts[textIndex].charAt(charIndex);
                charIndex++;
                setTimeout(typeText, 450);
            } else {
                setTimeout(deleteText, 2000);
            }
        }

        function deleteText() {
            if (charIndex > 0) {
                typingTextElement.textContent = typingTextElement.textContent.slice(0, -1);
                charIndex--;
                setTimeout(deleteText, 100);
            } else {
                textIndex = (textIndex + 1) % texts.length;
                setTimeout(typeText, 500);
            }
        }

        typeText();
    </script>
</body>
</html>
<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = $koneksi->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");

    $data = $sql->fetch_assoc();
    $ketemu = $sql->num_rows;

    if ($ketemu >= 1) {
        if ($data['level'] == "admin") {
            $_SESSION['admin'] = $data['username'];
            header("location: halaman_utama.php");
        } elseif ($data['level'] == "user") {
            $_SESSION['user'] = $data['id-login'];
            header("location: home.php");
        }
        
        echo '<script type="text/javascript">';
        echo 'alert("Login berhasil ");';
        echo '</script>';
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Username dan password salah ");';
        echo 'alert("coba lagi ");';
        echo '</script>';
    }
}
?>
