<?php
$expression = isset($_GET['expression']) ? $_GET['expression'] : '🙂';

// Mengganti ekspresi menjadi emotikon yang sesuai
$emoticon = '🤔'; // Default emotikon
if (strpos(strtolower($expression), 'senang') !== false) {
    $emoticon = '😊';
} elseif (strpos(strtolower($expression), 'sedih') !== false) {
    $emoticon = '😢';
} elseif (strpos(strtolower($expression), 'marah') !== false) {
    $emoticon = '😡';
} elseif (strpos(strtolower($expression), 'biasa aja') !== false) {
    $emoticon = '😌';
} elseif (strpos(strtolower($expression), 'kecewa') !== false) {
    $emoticon = '😒';
} elseif (strpos(strtolower($expression), 'ngantuk') !== false) {
    $emoticon = '🥱';
} elseif (strpos(strtolower($expression), 'semangat') !== false) {
    $emoticon = '🤩';
} elseif (strpos(strtolower($expression), 'bosan') !== false) {
    $emoticon = '🙄';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Ekspresi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-image: url(bg.jpg);
            background-size: cover;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .emoticon {
            font-size: 200px;
        }
        h2 {
            padding: -5px;
            color: #ffffff;
        }
        .button {
            background-color: #ff6b6b;
            color: white;
            border: none;
            cursor: pointer;
            
        }
        input[type="text"], input[type="submit"] {
            padding: 10px;
            font-size: 16px;
            border-radius: 10px;
            margin: 5px;
            width: 100px;
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
        }
      
    </style>
</head>
<body>
    <div>
        
        <h2>Ekspresi Kamu Hari Ini:</h2>
        <div class="emoticon"><?php echo $emoticon; ?></div>
        <form action="index.html" method="post">
            <input type="submit" value="Selesai" class="button">
    </div>
    <footer>
        <p>Created by Ni Kadek Intan Rahayu</p>
    </footer>
</body>

</html>
