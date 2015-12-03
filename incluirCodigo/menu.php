<?php
//Array multilenguaje
$lang="en";
$menu=array(
	"titulo"=>array(
		"sp"=>"Math Dice",
		"en"=>"Math Dice"
	),
	"portada"=>array(
		"sp"=>"Inicio",
		"en"=>"Home"
	),
	"instrucciones"=>array(
		"sp"=>"Instrucciones",
		"en"=>"Instructions"
	),
	"tiposJuego"=>array(
		"sp"=>"Tipos juego",
		"en"=>"Game choice",
		"submenu"=>array(
			"tipo1"=>array(
				"sp"=>"Juego tradicional",
				"en"=>"Traditional game",
			),
			"tipo2"=>array(
				"sp"=>"Juego modificado",
				"en"=>"Game modified",
			),
			"tipo3"=>array(
				"sp"=>"Juego niños",
				"en"=>"Kid game",
			)
		)
	)	
)
function menu(){
	
	$str=<<<EOT
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#"><?=$menu["titulo"][$lang]?></a>
		    </div>
		    <div>
		      <ul class="nav navbar-nav">
EOT;
		        <li class="active"><a href="#"><?=$menu["portada"][$lang]?></a></li>
		        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$menu["tiposJuego"][$lang]?> <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		          	<?php 
		          		foreach ($menu["tiposJuego"]["submenu"] as $key => $value) {
		          		?>
		          			<li><a href="#"><?=$value[$lang]?></a></li>
		          		<?php
		          		}
		          	?>

		          </ul>
		        </li>
		        <li><a href="#"><?=$menu["instrucciones"][$lang]?></a></li>
		      </ul>
		    </div>
		  </div>
		</nav>  

}
?>