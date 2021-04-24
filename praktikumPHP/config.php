<?php
// koneksi ke database(""merupakan password phpmyadmin)
$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");

//cek koneksi ke Database
//Apabila error

if (mysqli_connect_errno()) {
    echo "koneksi databse gagal : " . mysqli_connect_error();
    
}