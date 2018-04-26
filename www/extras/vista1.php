<?php 
require_once("curso1.php");
?>
<html>
<head>
<title>
</title>
</head>
<body>
<h2> Listado de Base de datos</h2>

<?php 
$tra=new Trabajo();
$list=$tra->get_visitas();

for($i=0;$i<sizeof($list);i++)
{
	echo $list[$i]["rut"];
	echo $list[$i]["nombre"];
	
}
?>
</body>
</html>
