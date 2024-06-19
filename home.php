<!DOCTYPE html>
<html>
<head>
  <title>Perpustakaan Unisla</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-image: url("ppp.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
    }

    .navbar {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .navbar a {
      display: inline-block;
      padding: 10px 20px;
      background-color: skyblue;
      color: black;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s;
      margin-right: 10px;
    }

    .navbar a:hover {
      background-color: skyblue;
    }

    h1,
    h2 {
      text-align: center;
      color: white;
      overflow: hidden;
      white-space: nowrap;
      width: 0;
    }

    .book-list {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      color: white;
    }

    .book-card {
      width: 200px;
      margin: 10px;
      padding: 10px;
      border: 1px solid #ccc;
      text-align: center;
    }

    .book-card img {
      width: 150px;
      height: 200px;
      object-fit: cover;
      margin-bottom: 10px;
    }

    .back-button {
      text-align: left;
      margin-bottom: 20px;
    }

    .back-button a {
      display: inline-block;
      padding: 10px 20px;
      background-color: red;
      color: black;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s;
    }

    .back-button a:hover {
      background-color: darkred;
    }

    @keyframes typing-h1 {
      0% {
        width: 0;
      }
      100% {
        width: 100%;
      }
    }

    @keyframes typing-h2 {
      0% {
        width: 0;
      }
      100% {
        width: 100%;
      }
    }

    h1::after,
    h2::after {
      content: "|";
      display: inline-block;
      margin-left: 5px;
      opacity: 1;
      animation: blink-caret 0.75s infinite;
    }

    @keyframes blink-caret {
      50% {
        opacity: 0;
      }
    }

    h1 {
      animation: typing-h1 5s steps(34) 1s forwards;
    }

    h2 {
      animation: typing-h2 3s steps(21) 6s forwards;
    }

    .profile {
      text-align: center;
      color: white;
    }

    .profile img {
      width: 200px;
      height: 200px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 20px;
    }

    .profile h1 {
      margin: 0;
    }

    .profile p {
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="navbar">
    <a href="#home">Home</a>
    <a href="#novel">Novel</a>
    <a href="#buku-populer">Buku Populer</a>
    <a href="#buku-belajar">Buku Belajar</a>
    <a href="#komik">Komik</a>
  </div>
   <div class="back-button">
    <a href="login.php">logout</a>
  </div>
  <div class="profile">
    <img src="unisla.jpeg" alt="Logo Perpustakaan">
    <h1>Selamat datang di Perpustakaan Unisla</h1>
    <p>Jl.deandles NO 356 Kandangsemangko paciran </p>
    <p>Telepon: 081235022447</p>
    <p>Email: info@unisla.ac.id</p>
  </div>
  <h2>daftar koleksi buku kami </h2>
  
  <div class="book-list">
   <div class="book-card buku-populer">
      <img src="https://i.pinimg.com/236x/40/e9/b9/40e9b955e09e43e1dbfd4309f17a8367.jpg" alt="Buku populer 1">
      <h3>filosofi teras</h3>
      <p>Penulis: henry manapiring</p>
    </div>
    
    <div class="book-card buku-populer">
      <img src="https://i.pinimg.com/236x/8e/e3/93/8ee393d97e86d144489817612fcc9146.jpg" alt="Buku populer 2">
      <h3>sebuah seni untuk  bersikap bodoh amat</h3>
      <p>Penulis: mark mosen</p>
    </div>
    
   <div class="book-card buku-populer">
      <img src="https://i.pinimg.com/564x/f9/d4/17/f9d417b8fd86a65becdf071f511c0bc6.jpg" alt="Buku populer 3">
      <h3>berani tidak di sukai</h3>
      <p>Penulis: fumitake koga & ichiro kishimi</p>
    </div>
    
    <div class="book-card buku-populer">
      <img src="https://i.pinimg.com/564x/2c/f1/48/2cf148ef75de81da4c009747ecb5d3dd.jpg" alt="Buku populer 4">
      <h3>negeri para badebah</h3>
      <p>Penulis: tere liye</p>
    </div>

    <div class="book-card buku-populer">
      <img src="https://i.pinimg.com/564x/26/54/11/265411c52e4e423389f5cebe4476568e.jpg" alt="Buku populer 5">
      <h3>pemulihan jiwa </h3>
      <p>Penulis: dedy susanto</p>
    </div>


   <div class="book-card novel">
      <img src="https://i.pinimg.com/564x/97/80/74/978074026fe62872dd2e03574c92b423.jpg" alt="Novel 1">
      <h3>pergi</h3>
      <p>Penulis: tere liye</p>
    </div>

    <div class="book-card">
      
      <img src="https://i.pinimg.com/564x/13/a2/64/13a264a092e8316b49809900ed337737.jpg" alt="Novel 2">
      <h3>tentang kamu </h3>
      <p>Penulis: tere liye</p>
    </div>
    
 <div class="book-card novel">
    
      <img src="https://i.pinimg.com/236x/80/17/dd/8017ddf17e5fcba65eb7ed9fddb43d4a.jpg" alt="Novel 3">
      <h3>pulang </h3>
      <p>Penulis: tere liye</p>
    </div>

 <div class="book-card novel">
    
      <img src="https://i.pinimg.com/236x/a6/2e/53/a62e53b52a6bf72742a1d0990e757da8.jpg" alt="Novel 4">
      <h3>hujan</h3>
      <p>Penulis: tere liye</p>
    </div>
    
 <div class="book-card novel">
      <img src="https://i.pinimg.com/236x/ea/e0/21/eae021029e5943fa4802b5b16b7152d4.jpg" alt="Novel 5">
      <h3>your name (kimi no nawa )</h3>
      <p>Penulis: shikai makoto</p>
    </div>
  
  <div class="book-card buku-belajar">
    
      <img src="https://i.pinimg.com/564x/fa/c2/0d/fac20d58efb32cfd377e3cf21968ac14.jpg" alt="Buku belajar 1">
      <h3>hacking with python</h3>
      <p>Penulis: steven tale </p>
    </div>

  <div class="book-card buku-belajar">
    
      <img src="https://i.pinimg.com/236x/fd/2a/23/fd2a23e1829afd9ee030633bdf148e22.jpg" alt="Buku belajar 2">
      <h3>informatika pascal</h3>
      <p>Penulis: zoran vlasic </p>
    </div>

   <div class="book-card buku-belajar">
    
      <img src="https://penerbitbukudeepublish.com/wp-content/uploads/2020/05/Dasar-dasar-Teknik-Informatika_Novega-Pratama-rev-1.0-depan-768x1097.jpg" alt="Buku belajar 3">
      <h3> dasar dasar teknik informatika </h3>
      <p>Penulis: novega pratama adiputra</p>
    </div>

  <div class="book-card buku-belajar">
    
      <img src="https://th.bing.com/th/id/OIP.Q6J1f6eJU_DHdYAj-VKP5wHaKc?pid=ImgDet&rs=1" alt="Buku belajar 4">
      <h3>dasar teknik digital</h3>
      <p>Penulis: ahmad yamien st.mt </p>
    </div>

  <div class="book-card buku-belajar">
    
      <img src="https://th.bing.com/th/id/R.53c03188e8a3c014f1ded49592d15dd9?rik=PzHbqwxHbOZLCA&riu=http%3a%2f%2fimages.tandf.co.uk%2fcommon%2fjackets%2famazon%2f978148224%2f9781482240559.jpg&ehk=GThtgQz37vvKOdQV59a5Ga2C0vIiQRFt9fnSKD4Ihog%3d&risl=&pid=ImgRaw&r=0" alt="Buku belajar 5">
      <h3>BIG DATA </h3>
      <p>Penulis: chapman </p>
    </div>

   
 <div class="book-card komik">
      <img src="https://th.bing.com/th/id/OIP.jtFRQ9JV0Ze8tFptWFqj5QHaLZ?pid=ImgDet&w=202&h=310&c=7" alt="komik 1">
      <h3>one piece vol 1 </h3>
      <p>Penulis: eiichiro oda </p>
    </div>

   <div class="book-card komik">
      <img src="https://th.bing.com/th/id/OIP.Amu1PEfFWCoRW0NOGJKF3AHaLF?w=204&h=305&c=7&r=0&o=5&pid=1.7" alt="komik 2">
      <h3>one piece vol 2 </h3>
      <p>Penulis: eiichiro oda </p>
    </div>

    <div class="book-card komik">
      <img src="https://th.bing.com/th/id/OIP.4QV3PKf0rgNWDMtt2wG-DQHaLH?w=203&h=306&c=7&r=0&o=5&pid=1.7" alt="komik 3">
      <h3>one piece vol 3 </h3>
      <p>Penulis: eiichiro oda </p>
    </div>

    <div class="book-card komik">
      <img src="https://i.pinimg.com/236x/ae/f5/20/aef520ed291e49322ed2f35ad4dc7ed4.jpg" alt="komik 4">
      <h3>kimetsu no yaiba vol 1 </h3>
      <p>Penulis: koyoharu gotogue </p>
    </div>

    <div class="book-card komik">
      <img src="https://i.pinimg.com/236x/7a/90/68/7a906848466bc3e4274adc759ab612d0.jpg" alt="komik 5">
      <h3>kimetsu no yaiba vol 2 </h3>
      <p>Penulis: koyoharu gotogue </p>
    </div>

     <div class="book-card komik">
      <img src="https://i.pinimg.com/236x/b0/90/90/b09090bf682d4a6bb3fccfdbde49afb4.jpg" alt="komik 6">
      <h3>kimetsu no yaiba vol 3 </h3>
      <p>Penulis: koyoharu gotogue </p>
    </div>

   
 <div class="book-card novel">
    
      <img src="https://i.pinimg.com/236x/36/d7/bb/36d7bbb5b8e01f06f27d925fcb697fee.jpg" alt="Novel 6">
      <h3>ubur ubur lembur </h3>
      <p>Penulis: raditya dika </p>
    </div>
   
    
      <div class="book-card novel">
     
      <img src="https://i.pinimg.com/236x/4a/08/be/4a08beb3b8d69cbf9c7859d9693df364.jpg" alt="Novel 7">
      <h3>koala kumal </h3>
      <p>Penulis: raditya dika </p>
    </div>

  
    <div class="book-card novel">
      <img src="https://i.pinimg.com/236x/67/aa/c1/67aac178ec5ed01401030f6f99253ed9.jpg" alt="Novel 8">
      <h3>marmut merah jambu </h3>
      <p>Penulis: raditya dika </p>
    </div>

 
    <div class="book-card novel">
    
      <img src="https://i.pinimg.com/564x/b3/0c/2b/b30c2bf06082d4fd30ffbf6d949a0a5c.jpg" alt="Novel 9">
      <h3>manusia setengah salmon </h3>
      <p>Penulis: raditya dika </p>
    </div>

 
    <div class="book-card novel">
    
      <img src="https://i.pinimg.com/564x/8f/82/ba/8f82ba34241d0620c96e2b9eb0f66eef.jpg" alt="Novel 10">
      <h3>dilan </h3>
      <p>Penulis: pidi baiq </p>
    </div>

   
    <div class="book-card novel">
    
      <img src="https://i.pinimg.com/236x/10/dc/06/10dc06814790d2159ade8a25ac61fa24.jpg" alt="Novel 11">
      <h3>laskar pelangi </h3>
      <p>Penulis: andrea hirata </p>
    </div>

  
    <div class="book-card novel">
   
      <img src="https://i.pinimg.com/236x/81/91/ce/8191ce15bc6cc4491d184c7384ffe345.jpg" alt="Novel 12">
      <h3>matahari minor</h3>
      <p>Penulis: tere liye</p>
    </div>

  
    <div class="book-card novel">
    
      <img src="https://i.pinimg.com/236x/53/67/d3/5367d3db20b2a17248c3885fcf56e58c.jpg" alt="Novel 13">
      <h3>bulan</h3>
      <p>Penulis: tere liye</p>
    </div>

 
    <div class="book-card novel">
   
      <img src="https://i.pinimg.com/236x/71/ac/f4/71acf489e079be4a82e67b5bcf8e38fc.jpg" alt="Novel 14">
      <h3>bintang</h3>
      <p>Penulis: tere liye</p>
    </div>



  </div>
<script>
 // Fungsi untuk menampilkan buku sesuai kategori yang dipilih
function showBooks(category) {
  // Semua elemen buku
  var books = document.getElementsByClassName("book-card");

  // Menampilkan semua buku
  if (category === "home") {
    for (var i = 0; i < books.length; i++) {
      books[i].style.display = "block";
    }
    document.querySelector("h1").style.display = "none";
    document.querySelector("h2").style.display = "none";
  } else {
    // Menyembunyikan semua buku
    for (var i = 0; i < books.length; i++) {
      books[i].style.display = "none";
    }

    // Menampilkan buku yang sesuai dengan kategori yang dipilih
    var selectedBooks = document.getElementsByClassName(category);
    for (var i = 0; i < selectedBooks.length; i++) {
      selectedBooks[i].style.display = "block";
    }
    document.querySelector("h1").style.display = "block";
    document.querySelector("h2").style.display = "block";
  }
}

// Mendengarkan klik pada navbar
var navbarLinks = document.getElementsByClassName("navbar")[0].getElementsByTagName("a");
for (var i = 0; i < navbarLinks.length; i++) {
  navbarLinks[i].addEventListener("click", function(event) {
    // Mendapatkan kategori yang dipilih dari atribut href
    var category = event.target.getAttribute("href").slice(1);
    // Menampilkan buku sesuai dengan kategori yang dipilih
    showBooks(category);

    // Mengembalikan tampilan h1 dan h2 jika kembali ke "home"
    if (category === "home") {
      document.querySelector("h1").style.display = "block";
      document.querySelector("h2").style.display = "block";
    }
  });
}

  
</script>

</body>
</html>




