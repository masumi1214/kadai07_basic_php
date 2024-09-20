<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>犬に関するアンケート入力フォーム</title>
</head>
<body>
    <h2>犬に関するアンケート入力フォーム</h2>
    <form action="write.php" method="POST">
        <label for="name">名前:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="dog_breed">Q1: 好きな犬種は？</label><br>
        <input type="text" id="dog_breed" name="dog_breed" required><br><br>
        
        <label for="own_dog">Q2: 犬を飼っていますか？</label><br>
        <select id="own_dog" name="own_dog" required>
            <option value="はい">はい</option>
            <option value="いいえ">いいえ</option>
        </select><br><br>
        
        <input type="submit" value="送信">
    </form>
</body>
</html>
