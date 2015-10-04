<html>
	<head>
		<title>CONTROL DE FLUJO CORTO
		</title>
		<style>
		.OK {
			width:50%;
			border: 1px solid #000000;
			margin:auto;
		    background-color: #00E676;
		}
		.KO {
			width:50%;
			border: 1px solid #000000;
			margin:auto;
		    background-color: #FF3D00;
		}
		</style>
	</head>
	<body>
		
		<?php
		//Codigo sobre condicionales
		$num_aleatorio=rand(0,10);
		?>
		<div class="<?=($num_aleatorio>5?'OK':'KO')?>">El numero ha sido <?=$num_aleatorio?></div>
		<div class="<?=($num_aleatorio>5?'OK':'KO')?>">El numero ha sido <?=$num_aleatorio?></div>
		<div class="<?=($num_aleatorio>5?'OK':'KO')?>">El numero ha sido <?=$num_aleatorio?></div>
	</body>
</html>