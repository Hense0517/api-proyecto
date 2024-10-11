<?php
$topsspliter = array();
		$topsspliter["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT
	`id_spliters`,
	`spliter`,
`id_cable`,
	`cable`,
	`localidad`
		
FROM `spliters`"
	);
		$tables_data["spliter"][".operations"] = &$topsspliter;
?>