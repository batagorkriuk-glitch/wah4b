<!-- ================= HTML ================= -->

<!DOCTYPE html>
<html>
<head>
    <title>Input Produk</title>
</head>
<body>

<h2>Input Produk</h2>

<form method="post">
    Nama Produk:
    <input type="text" name="nama">
    <br><br>

    Harga:
    <input type="number" name="harga">
    <br><br>

    <input type="submit" name="tambah" value="Tambah">
</form>

</body>
</html>


<!-- ================= PHP ================= -->

<?php

class Produk {
    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;

        echo "<h2>OUTPUT</h2>";
        echo "Barang berhasil ditambahkan<br>";
    }

    public function getDetail() {
        return "Nama: {$this->nama}, Harga: Rp " .
        number_format($this->harga, 0, ',', '.');
    }

    public function __destruct() {
        echo "<br>Produk '{$this->nama}' dihapus dari memori";
    }
}

if (isset($_POST['tambah'])) {

    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $produk1 = new Produk($nama, $harga);

    echo $produk1->getDetail();
}

?>
