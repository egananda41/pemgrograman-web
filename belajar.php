<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php</title>
    <style>
        h1 {
  color: blue;
  text-align: center;
}

    </style>
</head>
<body>
    <h1>Belajar Pemrograman Server Side Menggunakan PHP</h1>
    <?
        echo "test php";

        $nama = "<h1>Nanda</h1>";
        $umur = "21";
        $tinggi = "172.5";
        $aktif = "true";

        echo "<h1>Nama: $nama<br></h1>";
        echo "Umur: $umur tahun<br>";
        echo "Tinggi: $tinggi cm<br>";
        echo "Status Aktif: $aktif<br>";

        $nilai = 85;
        if ($nilai >= 75) {
            echo "lulus";
        } else {
            echo "tidak lulus";
        }

        for ($i = 1; $i <=5; $i++) {
            echo "baris ke-$i <br>";
        }

        function salam($nama) {
            return "halo, $nama!";
        }

        echo salam("dina");

        $buah = ["apel", "jeruk", "mangga"];
        foreach ($buah as $b) {
            echo "buah: $b<br>";
        }
?>

<form action="proses.php" method="post">
        nama: <input type="text" name="nama"><br>
        <input type="submit" value="kirim">
        </form>
       
  </body>
  </html>