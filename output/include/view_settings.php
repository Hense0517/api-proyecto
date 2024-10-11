<?php
$tdataview = array();
$tdataview[".searchableFields"] = array();
$tdataview[".ShortName"] = "view";
$tdataview[".OwnerID"] = "";
$tdataview[".OriginalTable"] = "View";


$tdataview[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"]}" );
$tdataview[".originalPagesByType"] = $tdataview[".pagesByType"];
$tdataview[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"]}" ) );
$tdataview[".originalPages"] = $tdataview[".pages"];
$tdataview[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\"}" );
$tdataview[".originalDefaultPages"] = $tdataview[".defaultPages"];

//	field labels
$fieldLabelsview = array();
$fieldToolTipsview = array();
$pageTitlesview = array();
$placeHoldersview = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsview["English"] = array();
	$fieldToolTipsview["English"] = array();
	$placeHoldersview["English"] = array();
	$pageTitlesview["English"] = array();
	if (count($fieldToolTipsview["English"]))
		$tdataview[".isUseToolTips"] = true;
}


	$tdataview[".NCSearch"] = true;



$tdataview[".shortTableName"] = "view";
$tdataview[".nSecOptions"] = 0;

$tdataview[".mainTableOwnerID"] = "";
$tdataview[".entityType"] = 7;
$tdataview[".connId"] = "";


$tdataview[".strOriginalTableName"] = "View";





$tdataview[".showAddInPopup"] = false;

$tdataview[".showEditInPopup"] = false;

$tdataview[".showViewInPopup"] = false;

$tdataview[".listAjax"] = false;
//	temporary
//$tdataview[".listAjax"] = false;

	$tdataview[".audit"] = false;

	$tdataview[".locking"] = false;


$pages = $tdataview[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataview[".edit"] = true;
	$tdataview[".afterEditAction"] = 1;
	$tdataview[".closePopupAfterEdit"] = 1;
	$tdataview[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataview[".add"] = true;
$tdataview[".afterAddAction"] = 1;
$tdataview[".closePopupAfterAdd"] = 1;
$tdataview[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataview[".list"] = true;
}



$tdataview[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataview[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataview[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataview[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataview[".printFriendly"] = true;
}



$tdataview[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataview[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataview[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataview[".isUseAjaxSuggest"] = false;





$tdataview[".ajaxCodeSnippetAdded"] = false;

$tdataview[".buttonsAdded"] = false;

$tdataview[".addPageEvents"] = false;

// use timepicker for search panel
$tdataview[".isUseTimeForSearch"] = false;


$tdataview[".badgeColor"] = "5F9EA0";


$tdataview[".allSearchFields"] = array();
$tdataview[".filterFields"] = array();
$tdataview[".requiredSearchFields"] = array();





$tdataview[".printerPageOrientation"] = 0;
$tdataview[".nPrinterPageScale"] = 100;

$tdataview[".nPrinterSplitRecords"] = 40;

$tdataview[".geocodingEnabled"] = false;










$tdataview[".pageSize"] = 20;

$tdataview[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataview[".strOrderBy"] = $tstrOrderBy;

$tdataview[".orderindexes"] = array();


$tdataview[".sqlHead"] = "";
$tdataview[".sqlFrom"] = "";
$tdataview[".sqlWhereExpr"] = "";
$tdataview[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataview[".arrGroupsPerPage"] = $arrGPP;

$tdataview[".highlightSearchResults"] = true;

$tableKeysview = array();
$tdataview[".Keys"] = $tableKeysview;


$tdataview[".hideMobileList"] = array();






$tables_data["View"]=&$tdataview;
$field_labels["View"] = &$fieldLabelsview;
$fieldToolTips["View"] = &$fieldToolTipsview;
$placeHolders["View"] = &$placeHoldersview;
$page_titles["View"] = &$pageTitlesview;


changeTextControlsToDate( "View" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["View"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["View"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/view_ops.php" ) );



	
		;



$tdataview[".sqlquery"] = $queryData_view;



$tdataview[".hasEvents"] = false;

?>