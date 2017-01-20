<!DOCTYPE html>
<html>
<body>

<div class="container">
<div class="panel panel-primary">
	<div class="panel-heading">
		<h1 ><div class="panel-title">Edicion de juego   "<?php echo $title ?>" </div></h1>
	</div>
	<div class="panel-body">
	<form class="form-inline" method="POST" action="<?php echo base_url(); ?>index.php/welcome/editarBD">
		<div class="form-group">
		Fabricante:<select name="fabricante" id="fabricante" class="form-control">
  <option value="otro">otro</option>
  <option value="kojima">kojima</option>
  <option value="capcom">capcom</option>
  <option value="bandai">bandai</option>
  <option value="gamebreak">gamefreak</option> </select>
		Consola: <select name="consola" id="consola" class="form-control">
  <option value="otro">otro</option>
  <option value="ps3">Ps3</option>
  <option value="ps2">Ps2</option>
  <option value="sega">Sega</option>
  <option value="xbox">Xbox</option>

  
</select>
		Titulo:<input type="text" name="titulo" id="titulo" class="form-control" required>
		Unidades:<input type="number" min="0" name="unidades" id="genero" class="form-control" required>
		<input type="hidden" name="title" id="title" value="<? echo $title ?>">
		<input type="submit" name="boton" class="btn btn-success" id="confirmar" value="editar">		
		</div>
		</form>
	</div>
</div>
</div>
</body>
</html>