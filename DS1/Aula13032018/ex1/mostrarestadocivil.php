<html>
	<head>
		<title>Mostrar dados</title>
	</head>
	<body>
	<?php

	$estadocivil = isset($_POST['estadocivil'])?$_POST['estadocivil']:"";

	if ($estadocivil == ""){
		header("Location:voce.html");
	}
	echo "<p>Estado Civil: $estadocivil</p>";
	?>
</body>
</html>
