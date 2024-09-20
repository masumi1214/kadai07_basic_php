<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $dog_breed = htmlspecialchars($_POST['dog_breed']);
    $own_dog = htmlspecialchars($_POST['own_dog']);

    // CSVファイルのパス
    $file = 'survey_data.csv';

    // ファイルが存在しない場合、ヘッダー行を含む新しいファイルを作成
    if (!file_exists($file)) {
        file_put_contents($file, "名前,Email,好きな犬種,犬を飼っていますか？\n", FILE_APPEND | LOCK_EX);
    }

    // データをCSVファイルに保存
    $data = "$name, $email, $dog_breed, $own_dog\n";
    
    // ファイルにデータを書き込む
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX) === false) {
        echo "<p>データの保存に失敗しました。書き込み権限を確認してください。</p>";
    } else {
        echo "<p>アンケートを受け付けました。ありがとうございます！</p>";
        echo '<a href="read.php">結果を表示</a>';
    }
} else {
    echo "<p>不正なアクセスです。</p>";
}
?>
