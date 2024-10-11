<?php
$topspuertos = array();
		$topspuertos["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT
	`Id_puertos`,
	`Puerto`,
	`Cto`,
	`Spliter`,
	`Cable`,
	`Localidad`,
	`Cedula`,
	`Activo`,
	`Ocupado`
FROM `puertos_cto` 
"
	);
		$tables_data["puertos"][".operations"] = &$topspuertos;
?>