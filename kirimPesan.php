<?php
$host="localhost";
$user="root";
$password="";
$db="projectwebnaufal";

$nama=$_POST["nama"];
$email=$_POST["email"];
$kota=$_POST["kota"];
$nohp=$_POST["nohp"];
$tanggal=$_POST["tanggal"];
$pesan=$_POST["pesan"];

$conn = mysqli_connect($host,$user,$password,$db);
$sql = "INSERT INTO data_pengunjung (Nama,Email,Kota,NoHP,Tanggal,Pesan) 
	VALUES('".$nama."','".$email."','".$kota."'
	,'".$nohp."','".$tanggal."','".$pesan."')";
 
if ($conn->query($sql) === TRUE) {
    echo "Respon anda sudah terkirim";
	header ("location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>