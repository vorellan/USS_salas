<?php
class Conectar
{
	public static function con()
	{
		
		$conexion=mysql_connect("localhost","root","12345678");
		mysql_select_db("bdmatch2");
		mysql_query("SET NAMES 'utf8'");
		return $conexion;
		
		
	}
	
	
	
}

class Trabajo
{
	private $visitas=array();
	private $visitas;
	
	
	public function get_visitas()
	{
		$sql="select * trabajador";
		mysql_query($sql, Conectar::con());
		while ($reg=mysql_fetch_assoc($res))
		{
			$this->visitas[]=$reg;
			
		}
			return $this->visitas;
		
	}
	
	
}

?>
