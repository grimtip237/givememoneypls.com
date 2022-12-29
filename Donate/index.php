<!DOCTYPE html>
<html>
<head>
	<title>Donate</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		html{
			height:100%;

		}
		body{
			height:100%;
		}
		
		.title{
			font-family:Arial;
			font-size:90px
		}
	</style>
	<?
		$connect = mysqli_connect("127.0.0.1","root", "", "donate");
		if ($connect==false) {
			echo("Не подключено");
		} else {
			echo("Подключено");
		}
		$text_query = 'SELECT * FROM projects';
		$query = mysqli_query($connect, $text_query);
		if ($query==false) {
			echo("Запрос не работает");
		} else {
			echo('Запрос работает');
		}


		//base
		$select = "SELECT * FROM projects";

		$results = mysqli_query($connect, $select);
		?>
</head>
<body class="text-light bg-dark" style="background-attachment:fixed">
<div class="col-12 py-3">
	<div class="d-flex">
		<div class="col-2 pt-3">
			<a href="" class="text-light ms-3">О компании</a>
			<a href="" class="text-light ms-3">Все проекты</a>
		</div>
		<div class="col-8 text-center">
			<h1 class="fw-bold">Donate.yes</h1>
			<p>Донатная платформа для любых проектов</p>
		</div>
		<div class="col-2 text-left pt-3">
			    <a class="text-light add"> Добавить проект <img src="add.png" alt=""> </a>
			    <form style="display: none" class="form1" action="add.php" method="GET">
			    	<input class="form-control" type="" name="title" placeholder="Название">
			    	<input class="form-control" type="" name="text" placeholder="Текст">
			    	<input class="form-control" type="" name="goal" placeholder="Собрать">
			    	<input class="form-control" type="" name="donated" placeholder="Собрано">
			    	<input class="form-control" type="" name="img" placeholder="Картинка">
			    	<button class="btn btn-success">Добавить проект</button>
			    </form>
			

		</div>
	</div>
</div>
<div class="col-12" style='overflow:hidden'>
	
	<div class="d-flex mt-5 col-10 mx-auto">
		<div class="col-6 py-5 mt-5" >
			<h1 class="title">МЕЧТА БЛИЗКО</h1>
		</div>
		<div class="col-6">
            <!--картинка-->
		</div>
	</div>
	<div class="d-flex mt-2 flex-wrap">
		<!--карточка проекта-->

		<?
		    for($i=0; $i<3; $i++){
			    $result = $query-> fetch_assoc();

		?>
		
		<div class="col-4 p-3 text-dark mt-2 pjj" >
			<div class="col-12 bg-light rounded p-3" >
				<div class="rounded" style="background-image: url(<? echo $result['img']?>); background-size: cover; background-position: center; height:500px">
				</div>
				<div>
					<h3><!--Заголовок проекта-->
						<? echo $result['title'];?>
					</h3>
					<p><!--Описание проекта-->
						<? echo $result['text'];?>
					</p>
					<p> <span class="fw-bold"> Всего собрать: <? echo $result['goal'];?></span>  руб.</p>
					<p><span class="fw-bold"> Собрано: <? echo $result['donated'];?></span>  руб.</p>
					<button class="btn btn-success">Поддержать проект</button>
					<form action="redact.php">
						<button class="btn btn-info">Редактировать</button>
					</form>
					<form action="delete.php">
						<button class="btn btn-danger">Удалить</button>
						<input class="form-control" type="" name="id" placeholder="ID">
					</form>
				</div>
			</div>
		</div>	
    	<?
            }
    	?>
	</div>
</div>

</body>
<script type="text/javascript">
	let form = document.querySelector(".form1");
	let btn = document.querySelector(".add");

	btn.onclick = function() {
		form.style.display = "block";
	}

	let pjj = document.querySelectorAll(".pjj");
</script>
</html>