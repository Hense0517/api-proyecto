<?php
$topscable = array();
		$topscable["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT
	`id_cables`,
	`cable`,
	`localidad`,
	`id_localidad`
FROM `cables` "
	);
		$tables_data["Cable"][".operations"] = &$topscable;
?>