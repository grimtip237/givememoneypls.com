<?
    $connect = mysqli_connect("127.0.0.1", "root", "", "donate");
    if ($connect==false) {
        echo "НЕ подключено";
    } else {
        echo "Подключено";
    }

    $sql = "INSERT INTO projects (title, text, goal, donated, img) VALUES ('{$_GET['title']}', '{$_GET['text']}', '{$_GET['goal']}', '{$_GET['donated']}', '{$_GET['img']}')";

    $quer = mysqli_query($connect, $sql);

    header("Location: index.php")
?>