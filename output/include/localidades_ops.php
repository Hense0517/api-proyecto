<?php
$topslocalidades = array();
		$topslocalidades["update"] = array(
		"subtype" => "sql",
		"sql" => "
SELECT
`id_localidad`,
`Localidad`
FROM `localidad`
ORDER BY `Localidad`"
	);
		$tables_data["Localidades"][".operations"] = &$topslocalidades;
?>