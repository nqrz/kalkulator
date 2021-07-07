<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Tugas6_NizarAhmadBaihaqi.css">

    <title>Tugas 5 | BPPTIK JWD1</title>
</head>
<body>
    <!-- Container form -->
    <div class="container">
        <h1>Kalkulator</h1>
        <!-- Form untuk input data bilangan -->
        <form action="" method="POST">
            <div class="col">
                <div class="row">
                    <!-- bilangan ke - 1 -->
                    <label for="bil1">Bilangan ke - 1 =</label>
                    <input class="form-control" type="text" name="bil1" id="bil1" autofocus>
                </div>
                <div class="row">
                    <!-- bilangan ke - 2 -->
                    <label for="">Bilangan ke - 2 =</label>
                    <input class="form-control" type="text" name="bil2" id="bil2">
                </div>
                <!-- Kirim bilangan untuk dihitung -->
                <button type="submit">Kirim</button>
            </div>
        </form>
        <hr>
        <?php
        
            # Menyimpan data ke variabel
            $bil1 = $_POST['bil1'];
            $bil2 = $_POST['bil2'];
            
            print "Bilangan " . $bil1 . " & " . $bil2 . "<br>";
            
            # Penjumlahan
            print "Hasil penjumlahan adalah : " . $bil1 + $bil2 . "<br>";
            
            # Pengurangan
            print "Hasil pengurangan adalah : " . $bil1 - $bil2 . "<br>";
            
            # Perkalian
            print "Hasil perkalian adalah : " . $bil1 * $bil2 . "<br>";
            
            # Pembagian
            print "Hasil pembagian adalah : " . $bil1 / $bil2 . "<br>";
        
        ?>
    </div>
</body>
</html>