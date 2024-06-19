<?php 
$koneksi = mysqli_connect("localhost","root","","perpustakaan");

function query($query){
		global $koneksi;

		$result = mysqli_query($koneksi, $query);
	    $rows =[];
		while ($row = mysqli_fetch_assoc($result) ){
			$rows[] = $row;
		}

		return $rows;
	}
	function tambah($data){
		global $koneksi;
	$nim = $_POST ['nim'];
	$username = $_POST ['username'];
	$password = $_POST ['password'];
	$level = $_POST ['level'];
	$tgl_daftar = $_POST ['tgl_daftar'];


	$query = "INSERT into user values
			 ('','$nim', '$username', '$password', '$level', '$tgl_daftar')
			 ";

		mysqli_query($koneksi, $query);
		return mysqli_affected_rows($koneksi);
	}
      function edit($data)
    {
        global $koneksi;
        $id = $_POST['id'];
        $nim = $_POST['nim'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = $_POST['level'];
        $tgl_daftar = $_POST['tgl_daftar'];

        $query = "UPDATE user SET nim = '$nim', username = '$username', password = '$password', level = '$level', tgl_daftar = '$tgl_daftar' WHERE id = $id";

        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
    }
 function hapus($id)
    {
        global $koneksi;
        $query = "DELETE FROM user WHERE id = $id";

        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
    }

function register($nim, $username, $password)
{
    global $koneksi;
    $tgl_daftar = date('Y-m-d');

    $sql = "INSERT INTO user (nim, username, password, tgl_daftar, level) VALUES ('$nim', '$username', '$password', '$tgl_daftar', 'user')";
    $result = mysqli_query($koneksi, $sql);

    return $result;
}
