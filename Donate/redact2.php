<?
	    $connect = mysqli_connect("127.0.0.1", "root", "", "donate");

	    $update = "UPDATE projects SET title = '{$_GET['title']}', text = '{$_GET['text']}', goal = '{$_GET['goal']}', donated = '{$_GET['donated']}', img = '{$_GET['img']}' WHERE id = '{$_GET['id']}'";

	    $update_result = mysqli_query($connect, $update);

	    header("Location: index.php");
	?>