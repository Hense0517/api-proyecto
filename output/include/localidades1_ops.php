<?php
$topslocalidades1 = array();
		$topslocalidades1["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT
	`Id_localidad`,
	`Localidad`
FROM `localidad` "
	);
		$tables_data["Localidades"][".operations"] = &$topslocalidades1;
?>