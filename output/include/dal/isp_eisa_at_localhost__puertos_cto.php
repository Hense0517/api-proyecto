<?php
$dalTablepuertos_cto = array();
$dalTablepuertos_cto["Id_puertos"] = array("type"=>3,"varname"=>"Id_puertos", "name" => "Id_puertos", "autoInc" => "1");
$dalTablepuertos_cto["Puerto"] = array("type"=>200,"varname"=>"Puerto", "name" => "Puerto", "autoInc" => "0");
$dalTablepuertos_cto["Cto"] = array("type"=>200,"varname"=>"Cto", "name" => "Cto", "autoInc" => "0");
$dalTablepuertos_cto["Spliter"] = array("type"=>200,"varname"=>"Spliter", "name" => "Spliter", "autoInc" => "0");
$dalTablepuertos_cto["Cable"] = array("type"=>200,"varname"=>"Cable", "name" => "Cable", "autoInc" => "0");
$dalTablepuertos_cto["Localidad"] = array("type"=>200,"varname"=>"Localidad", "name" => "Localidad", "autoInc" => "0");
$dalTablepuertos_cto["Cedula"] = array("type"=>3,"varname"=>"Cedula", "name" => "Cedula", "autoInc" => "0");
$dalTablepuertos_cto["Activo"] = array("type"=>200,"varname"=>"Activo", "name" => "Activo", "autoInc" => "0");
$dalTablepuertos_cto["Ocupado"] = array("type"=>200,"varname"=>"Ocupado", "name" => "Ocupado", "autoInc" => "0");
$dalTablepuertos_cto["Id_puertos"]["key"]=true;

$dal_info["isp_eisa_at_localhost__puertos_cto"] = &$dalTablepuertos_cto;
?>