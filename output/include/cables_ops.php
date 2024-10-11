<?php
$topscables = array();
		$topscables["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO `Localidades` (

)
VALUES
(

)"
	);
				$topscables["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT
	`id_cables`,
	`cable`,
	`localidad`,
	`id_localidad`
FROM `Cables`"
	);
		$tables_data["Cables"][".operations"] = &$topscables;
?>