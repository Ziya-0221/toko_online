<?php
if($_POST){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    if(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($telp)){
        echo "<script>alert('Nomor Telepon tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into pelanggan (nama,alamat,telp) value ('".$nama."','".$alamat."','".$telp."')");
        if($insert){
            echo "<script>alert('Sukses Menambahkan');location.href='tambah_pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal Menambahkan');location.href='tambah_pelanggan.php';</script>";
        }
    }
}
?>
