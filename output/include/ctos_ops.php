<?php
$topsctos = array();
		$topsctos["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT
	`id_Ctos`,
	`Cto`,
        `id_spliter`,
	`Spliter`,
	`Cable`,
	`Localidad`	
FROM `ctos`"
	);
		$tables_data["ctos"][".operations"] = &$topsctos;
?>