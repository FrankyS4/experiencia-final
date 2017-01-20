<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>VideoJuegos</title>
	<link href="<?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>
<body>



<div id="container-fluid">

<h1>Juegos</h1>
	<table class="table table-borderer">
		<thead>
				<th>Fabricante</th>
				<th>Consola</th>
				<th>Titulo</th>
				<th>Unidades</th>
				

		</thead>

		<tbody>

				<?php foreach ($juegos as $game) { ?>
				<tr>
				<td><?php echo $game->fabricante;?></td>
				<td><?php echo $game->consola; ?></td>
				<td><?php echo $game->titulo; ?></td>
				<td><?php echo $game->unidades; ?></td>
				<td>
				<a href="index.php/welcome/editar/<?php echo $game->titulo;?>" class="btn btn-success">Editar</a>
				<a href="index.php/welcome/eliminar/<?php echo $game->titulo;?>" class="btn btn-warning">Eliminar</a>
				<a href="index.php/welcome/merma/<?php echo $game->titulo,"/",$game->unidades;?>" class="btn btn-success">Informar merma</a>

				

				</td>
				</tr>
				<?php } ?>
		</tbody>
	</table>

	<button id="crea" type="button" class="btn btn-info">Agregar</button>


	<div id="creando" class="container-fluid"> 

<h1>Agregar juegos</h1>

<form class="form-inline" method="POST" action="<?php echo base_url(); ?>index.php/welcome/neww">
<div class="form-group">
Fabricante:
<select name="fabricante" id="fabricante" class="form-control" >
  <option value="otro">otro</option>
  <option value="kojima">kojima</option>
  <option value="capcom">capcom</option>
  <option value="bandai">bandai</option>
  <option value="gamebreak">gamefreak</option>
  
</select><hr>
Consola:
<select name="consola" id="consola" class="form-control">
  <option value="otro">otro</option>
  <option value="ps3">Ps3</option>
  <option value="ps2">Ps2</option>
  <option value="sega">Sega</option>
  <option value="xbox">Xbox</option>
  
</select><hr>
Titulo:<input type="text" name="titulo" id="titulo" class="form-control" required> <hr>
Unidades:<input type="number" min="0" name="unidades" id="unidades" class="form-control" required> <hr>
	<button class="btn btn-primary">agregar</button>
	<button type="reset" id="cancel" class="btn btn-primary">Cancerlar</button>
</div>


</form>		


</div>


</div>





<script src="<?php echo base_url('bower_components/jquery/dist/jquery.min.js') ?>" ></script>
<script src="<?php echo base_url('bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>


<script>

$(document).ready(function(){
	var crear=$("#creando");
	var can=$("#cancel");
	crear.hide();
	$("#crea").click(function(){
		$("#crea").hide();
		console.log("hizo click ");
		crear.show();

	});
	can.click(function(){
		$("#crea").show();
		crear.hide();
	});
 });

</script>



</body>
</html>




