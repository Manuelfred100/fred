<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AGENDA</title>
	<link rel="stylesheet" type="text/css" href="icon/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-rtl.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background: url('img/LOGIN.png');background-size: 100%;">
	<h1 style="margin-left: 20px;"><img src="img/INTERELETRIC.png" width="13%"></h1>

	<?php
		include("stilo.html");
	?>


<center>
	<form style="background:#0f22669e;width: 80%;padding: 20px;">
		<div>
			<select style="width:100%;">
				<option>Selecionar serviço</option>
				<option value="electricidade">Electricidade</option>
				<option value="frio e climatização">Frio e climatização</option>
				<option value="redes">Redes de computadores</option>
				<option value="projectos">Projectos</option>
				<option value="construção">Construção civil</option>
				<option value="levantamento">Pedido de levantamento</option>
			</select>
		<div>
		
		
		<div class="row" style="margin-top: 5px;">
			<div class="col-8">
				<h4 style="text-align:left;color: white;">DESCRIÇÃO DO SERVIÇO</h4>
				<div>
					<textarea style="width: 100%;height: 175px;background: #1F2649;color: white;border-radius: 5px;"></textarea>
				</div>
				<br>
				<div><input type="text" name="" style="width:100%"></div>
				<div><input type="text" name="" style="width:100%"></div>
				<div><input type="text" name="" style="width:100%"></div>

				<div class="text-white">
					<label style="margin-right: 80px;">Tipo de serviços: </label>
					<label>Particular</label>
					<input type="checkbox" name="" style="margin-right: 50px;">
					<span>
						<label>Empresa</label>
					<input type="checkbox" name="">
					</span>
				</div>
					<br>
				<div><input type="reset" value="LIMPAR DADOS" name="" style="width:60%; background: #4986FE;margin-left: -200px;color: white;"></div>
			</div>
			<div class="col">
				<h4 style="text-align:center;color: white;">ARQUIVO</h4>
				<div>
					<label for="ficheiro" style="width: 100%;cursor: pointer;"><img src="img/Group 5.png" width="65%"></label>
				</div><br>
				<h5 style="text-align:center;color: white;">TELEFONE</h5>
				<h5 style="text-align:center;color: white;">E-MAIL</h5>
				<h5 style="text-align:center;color: white;">Local</h5>
				<br>
				<div style="margin-right: -80px;">
					<input type="submit" value="ENVIAR" name="" style="width:50%;margin-top: 20px; background: #4986FE;color: white;">
				</div>

			</div>
		</div>
			<input type="file" id="ficheiro" name="ficheiro" style="visibility: hidden;">
	</form>
</center>
</body>
</html>



