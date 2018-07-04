<!DOCTYPE html>
<html lang="es">
<head>
	<title>Iniciar sesion de usuario</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
	<link href="css/login.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
 </head>
<body>	
	<?php
		session_start();
		if (!isset($_SESSION['usuario']))
		{
			header('Location: login.html');
		}	
	?>
	<div class="container">
		<header>
			<i class="fa fa-user"></i>
			<spam><?php echo $_SESSION['usuario']; ?></spam>
			<a class="btn btn-primary" href="logout.php">cerrar sesión</a>
		</header>
		<main>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ex ipsum, tempus non hendrerit sit amet, finibus vitae lectus. Donec sagittis ipsum risus, vel ullamcorper justo vulputate eget. Sed eget volutpat justo. Sed nulla est, egestas eu consequat vitae, fringilla a mi. Morbi porttitor convallis nulla at molestie. Sed cursus id libero nec laoreet. In leo neque, tincidunt sit amet turpis in, placerat mollis diam. Suspendisse quis molestie dolor. Maecenas auctor ullamcorper mi a volutpat. Pellentesque vestibulum dignissim ipsum.<br><br>

				Etiam efficitur arcu non cursus dapibus. Phasellus suscipit cursus nibh. Morbi id dui volutpat, tempus urna in, scelerisque arcu. Aenean luctus nisl non augue blandit semper eget at orci. Proin et turpis id eros rutrum congue. Integer tellus justo, efficitur sed quam et, eleifend commodo magna. Duis condimentum, massa id vulputate tincidunt, lacus purus consequat felis, eu iaculis velit nisi in quam. Cras tincidunt lectus eu tellus maximus, ut interdum dolor lobortis. Proin sed augue et orci porttitor volutpat. Donec ultricies elit vel pulvinar imperdiet. Aliquam eu iaculis velit.<br>

				Ut ac lorem interdum, dignissim quam non, molestie erat. Pellentesque id arcu orci. Morbi fermentum, eros nec hendrerit fringilla, ipsum felis ornare nisi, at volutpat nisl tortor eu turpis. Duis molestie imperdiet elementum. Aliquam erat volutpat. Quisque fringilla tellus facilisis laoreet molestie. Sed interdum, dolor ac gravida imperdiet, mauris erat molestie leo, et ullamcorper lectus ante vel erat. Cras tempor metus vitae turpis volutpat imperdiet. Nulla porttitor ipsum erat, accumsan interdum velit elementum consequat. Sed ornare varius justo nec tincidunt. Suspendisse porttitor ligula odio, sed lacinia augue egestas sit amet. Aliquam erat volutpat.<br><br>

				Nulla scelerisque tellus nec est mollis, ac tempor augue rutrum. Duis facilisis tortor eget lacus aliquet, sit amet tristique risus placerat. Nunc sit amet nulla sagittis, interdum lorem eu, condimentum tortor. Curabitur commodo felis ex, vel finibus dolor consequat non. Aliquam mollis lacinia justo, et vestibulum risus ultrices vel. Curabitur ac ultrices tortor. Nam non finibus nulla. Morbi vulputate porta dui, id cursus est scelerisque ac. Donec fermentum placerat rhoncus. Suspendisse sit amet vulputate nibh. Proin porttitor odio vitae mi aliquet luctus. Duis elementum velit feugiat malesuada faucibus. Curabitur vehicula risus quis consequat consectetur. Sed interdum nibh id eros interdum, eu molestie nunc feugiat. Ut sit amet faucibus purus.<br><br>

				Sed rhoncus, mi pellentesque mattis laoreet, neque justo euismod ante, hendrerit lacinia dui libero sit amet purus. Aliquam pretium iaculis tortor, non consectetur metus tincidunt vel. Etiam in placerat metus. Fusce lectus magna, aliquam sed odio a, imperdiet vehicula dui. Cras commodo, elit id sagittis congue, elit augue eleifend turpis, commodo ornare dui purus ut sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum condimentum odio et nunc posuere, ut fringilla metus dapibus. Duis sit amet magna dui. Donec sed est justo.
			</p>
		</main>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script	src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
    <script src="js/codigo.js"></script>
</body>
</html>