<html>
<head>
	<title>Sitio modular</title>
</head>
<body bgcolor='#9999cc'>
	<?php
		if(file_exists($module_path)) include($module_path);
		else echo "Error al cargar el modulo '$modulo'";
		?>
</body>