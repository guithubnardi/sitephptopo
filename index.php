<?php
	$paginas = array('home' =>'Minha Página' , 'sobre' => 'sobre ', 'contato' => '<input type = "text"/>' );

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página dinamica php</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		header{
			background: #069;
			padding: 8px 10px;
			text-align: center;
		}
		a{
			display: inline-block;
			margin: 0 10px;
			color: white;
			font-size:  17px;


		}
	</style>

</head>
<body>
	<header>

	<?php
		foreach ($paginas as $key => $value) {
			echo '<a href="?page='.$key.'">' . ucfirst($key)	.'</a>';
		}
	?>		

	</header>
	<section>
		<h2>
			<?php
			$pagina = (isset($_GET['page']) ? $_GET['page'] : 'home');

			?>
		</h2>
	</section>

</body>
</html>