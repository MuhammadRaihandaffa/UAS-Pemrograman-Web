<?php

//Membuat koneksi ke database
$conn = mysqli_connect("localhost","root","","uas");


// menambah barang

if(isset($_POST['addnewmahasiswa'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $insert = mysqli_query($conn,"insert into mahasiswa (nim, nama, email) values ('$nim','$nama','$email')");
    if($insert){
        header('location:index.php');
    }
    else{
        echo 'gagal';
        header('location:index.php');
    }
}
?>