<!DOCTYPE html>
<html>
<head>
	<title>La Pizza</title>
	<meta charset="utf-8">
	<style>
		
		h1{
			text-align: center;
		}


	</style>
</head>
<body>
	<h1>La Pizza</h1>

	<?php 
		$correcta = 0;
		$cuenta = 0;
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			foreach($_REQUEST as $key => $value){
				if($key == 'masa' || $key == 'orenga'){
					$correcta++;
				}

			}
			if($correcta == 2){
				echo "Los ingredientes que ha seleccionado son: ";
				foreach($_REQUEST as $key => $value){
					echo "$value  ";
					$cuenta++;
				}
				echo "</br>El precio es ";
				echo 5+0.5*$cuenta;
			}
			else{
				echo "La pizza debe tener masa i oregano.";
				}

		}else{
		?>
		
			<form method="post">
				<p>Ingrediente1: <input type="checkbox" name="masa" id="ingrediente1" value="masa">Masa</p>
				<p>Ingrediente2: <input type="checkbox" name="orenga" id="ingrediente2" value="orenga">Orenga</p>
				<p>Ingrediente3: <input type="checkbox" name="formatge" id="ingrediente3" value="formatge">Formatge</p>
				<p>Ingrediente4: <input type="checkbox" name="pernil" id="ingrediente4" value="pernil">Pernil dolç</p>
				<p>Ingrediente5: <input type="checkbox" name="bacon" id="ingrediente5" value="bacon">Bacon</p>
				<p><input type="submit" value="Enviar"></p>
			</form>
		<?php			
		}
		?>
</body>
</html>