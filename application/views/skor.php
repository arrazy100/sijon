<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perhitungan Skor</title>
</head>
<body>
    <?php if ($skor > 50) {
        ?> <h4>Selamat Anda Berhasil</h1>
    <?php } else { ?>
            <h1>Anda Gagal</h1>
    <?php } ?>
    Skor = <?php echo $skor ?>
</body>
</html>