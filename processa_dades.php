<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		
		foreach ($_REQUEST as $key => $value) {
			if (gettype($value) == "array"){
				foreach($value as $b){
					echo "$key" . "$b";
				}
			}else{
				echo "$key" . "$value";
			}	
		}
	?>
</body>
</html>