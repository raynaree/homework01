<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decrypt Sayfa</title>
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
        $encryptedSrc = $_GET['url'];
        $iframeSrc = base64_decode($encryptedSrc);
    ?>

    <iframe src="<?php echo $iframeSrc; ?>"></iframe>

</body>
</html>
