<?php
// Skrip Halaman Indeks Sederhana
// Menyediakan tampilan statis menggunakan PHP dan HTML

header("X-Powered-By: Ksotaria1337");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacked by Ksotaria1337</title>
    <style>
        body {
            background-color: #000000;
            color: #ff0000;
            font-family: 'Courier New', Courier, monospace;
            display: block;
            text-align: center;
            margin: 0;
            padding: 0;
            padding-top: 20%;
        }
        h1 {
            font-size: 3em;
            margin-bottom: 10px;
            text-shadow: 0 0 10px #ff0000;
        }
        p {
            color: #ffffff;
            font-size: 1.2em;
        }
        .footer {
            margin-top: 50px;
            font-size: 0.8em;
            color: #555555;
        }
    </style>
</head>
<body>

    <h1>Hacked by Ksotaria1337</h1>
    <p>We are everywhere.</p>

    <div class="footer">
        <?php echo "Server Time: " . date("Y-m-d H:i:s"); ?>
    </div>

</body>
</html>