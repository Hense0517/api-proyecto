<?php
$dalTableusuarios = array();
$dalTableusuarios["Id"] = array("type"=>3,"varname"=>"Id", "name" => "Id", "autoInc" => "1");
$dalTableusuarios["Nombre"] = array("type"=>200,"varname"=>"Nombre", "name" => "Nombre", "autoInc" => "0");
$dalTableusuarios["Perfil"] = array("type"=>200,"varname"=>"Perfil", "name" => "Perfil", "autoInc" => "0");
$dalTableusuarios["Clave"] = array("type"=>200,"varname"=>"Clave", "name" => "Clave", "autoInc" => "0");
$dalTableusuarios["apikey"] = array("type"=>200,"varname"=>"apikey", "name" => "apikey", "autoInc" => "0");
$dalTableusuarios["Id"]["key"]=true;

$dal_info["isp_eisa_at_localhost__usuarios"] = &$dalTableusuarios;
?>