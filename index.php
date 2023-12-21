<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Örnek Sayfa</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        iframe {
            width: 100%; /* İframe genişliği 100% */
            height: 100vh; /* İframe yüksekliği ekran yüksekliğine eşit */
            border: 0;
            margin: 0; /* Margin'ı 0 olarak ayarla */
        }
    </style>
</head>
<body>

    <?php
        $iframeSrc = "https://tiklabilet.online";
        $encryptedSrc = base64_encode($iframeSrc);
    ?>

    <iframe src="decrypt.php?url=<?php echo $encryptedSrc; ?>"></iframe>

</body>
</html>
