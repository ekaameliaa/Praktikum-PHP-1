<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form method="POST" action="form_belanja.php">
   Customer : <input type="text" name="nama" id="nama" value="" size="30"/><br/>
   Produk Pilihan  :
   <input type="radio" name="produk" id="produk" value="TV"/>TV
   <input type="radio" name="produk" id="produk" value="Kulkas"/>Kulkas
   <input type="radio" name="produk" id="produk" value="Mesin Cuci"/>Mesin Cuci<br/>
   Jumlah beli : <input type="text"  name="jumlah" id="jumlah" value=""
size="6"/><br/>
   <input type="submit" value="Kirim"  name="proses" id="proses"/>
  </form>

<?php
$proses= $_POST['proses'];
$nama_customer= $_POST['nama'];
$produk_pilihan= $_POST['produk'];
$jumlah_beli= $_POST['jumlah'];
 echo 'Proses : '.$proses;
 echo '<br/>Customer  : '.$nama_customer;
 echo '<br/>Produk Pilihan : '.$produk_pilihan;
 echo '<br/>Jumlah beli : '.$jumlah_beli;
 echo '<br/>Total belanja :'; 
if ($produk_pilihan == "TV"){
     echo 4200000 * $jumlah_beli;
 }
 elseif($produk_pilihan == "Kulkas"){
    echo 3100000 * $jumlah_beli;
}
 else{
    echo 3100000 * $jumlah_beli;
}
 

?>
 

</body>
</html>