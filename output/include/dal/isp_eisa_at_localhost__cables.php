<?php
$dalTablecables = array();
$dalTablecables["id_cables"] = array("type"=>3,"varname"=>"id_cables", "name" => "id_cables", "autoInc" => "1");
$dalTablecables["cable"] = array("type"=>200,"varname"=>"cable", "name" => "cable", "autoInc" => "0");
$dalTablecables["localidad"] = array("type"=>200,"varname"=>"localidad", "name" => "localidad", "autoInc" => "0");
$dalTablecables["id_localidad"] = array("type"=>3,"varname"=>"id_localidad", "name" => "id_localidad", "autoInc" => "0");
$dalTablecables["id_cables"]["key"]=true;

$dal_info["isp_eisa_at_localhost__cables"] = &$dalTablecables;
?>