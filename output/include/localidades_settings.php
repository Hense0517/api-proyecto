<?php
$tdatalocalidades = array();
$tdatalocalidades[".searchableFields"] = array();
$tdatalocalidades[".ShortName"] = "localidades";
$tdatalocalidades[".OwnerID"] = "";
$tdatalocalidades[".OriginalTable"] = "Localidades";


$tdatalocalidades[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatalocalidades[".originalPagesByType"] = $tdatalocalidades[".pagesByType"];
$tdatalocalidades[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatalocalidades[".originalPages"] = $tdatalocalidades[".pages"];
$tdatalocalidades[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatalocalidades[".originalDefaultPages"] = $tdatalocalidades[".defaultPages"];

//	field labels
$fieldLabelslocalidades = array();
$fieldToolTipslocalidades = array();
$pageTitleslocalidades = array();
$placeHolderslocalidades = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslocalidades["English"] = array();
	$fieldToolTipslocalidades["English"] = array();
	$placeHolderslocalidades["English"] = array();
	$pageTitleslocalidades["English"] = array();
	$fieldLabelslocalidades["English"]["Localidad"] = "Localidad";
	$fieldToolTipslocalidades["English"]["Localidad"] = "";
	$placeHolderslocalidades["English"]["Localidad"] = "";
	$fieldLabelslocalidades["English"]["id_localidad"] = "Id Localidad";
	$fieldToolTipslocalidades["English"]["id_localidad"] = "";
	$placeHolderslocalidades["English"]["id_localidad"] = "";
	if (count($fieldToolTipslocalidades["English"]))
		$tdatalocalidades[".isUseToolTips"] = true;
}


	$tdatalocalidades[".NCSearch"] = true;



$tdatalocalidades[".shortTableName"] = "localidades";
$tdatalocalidades[".nSecOptions"] = 0;

$tdatalocalidades[".mainTableOwnerID"] = "";
$tdatalocalidades[".entityType"] = 6;
$tdatalocalidades[".connId"] = "isp_eisa_at_localhost";


$tdatalocalidades[".strOriginalTableName"] = "Localidades";

	



$tdatalocalidades[".showAddInPopup"] = false;

$tdatalocalidades[".showEditInPopup"] = false;

$tdatalocalidades[".showViewInPopup"] = false;

$tdatalocalidades[".listAjax"] = false;
//	temporary
//$tdatalocalidades[".listAjax"] = false;

	$tdatalocalidades[".audit"] = false;

	$tdatalocalidades[".locking"] = false;


$pages = $tdatalocalidades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalocalidades[".edit"] = true;
	$tdatalocalidades[".afterEditAction"] = 1;
	$tdatalocalidades[".closePopupAfterEdit"] = 1;
	$tdatalocalidades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalocalidades[".add"] = true;
$tdatalocalidades[".afterAddAction"] = 1;
$tdatalocalidades[".closePopupAfterAdd"] = 1;
$tdatalocalidades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalocalidades[".list"] = true;
}



$tdatalocalidades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalocalidades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalocalidades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalocalidades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalocalidades[".printFriendly"] = true;
}



$tdatalocalidades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalocalidades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalocalidades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalocalidades[".isUseAjaxSuggest"] = false;





$tdatalocalidades[".ajaxCodeSnippetAdded"] = false;

$tdatalocalidades[".buttonsAdded"] = false;

$tdatalocalidades[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalocalidades[".isUseTimeForSearch"] = false;


$tdatalocalidades[".badgeColor"] = "1E90FF";


$tdatalocalidades[".allSearchFields"] = array();
$tdatalocalidades[".filterFields"] = array();
$tdatalocalidades[".requiredSearchFields"] = array();

$tdatalocalidades[".googleLikeFields"] = array();
$tdatalocalidades[".googleLikeFields"][] = "id_localidad";
$tdatalocalidades[".googleLikeFields"][] = "Localidad";




$tdatalocalidades[".printerPageOrientation"] = 0;
$tdatalocalidades[".nPrinterPageScale"] = 100;

$tdatalocalidades[".nPrinterSplitRecords"] = 40;

$tdatalocalidades[".geocodingEnabled"] = false;










$tdatalocalidades[".pageSize"] = 20;

$tdatalocalidades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalocalidades[".strOrderBy"] = $tstrOrderBy;

$tdatalocalidades[".orderindexes"] = array();


$tdatalocalidades[".sqlHead"] = "";
$tdatalocalidades[".sqlFrom"] = "";
$tdatalocalidades[".sqlWhereExpr"] = "";
$tdatalocalidades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalocalidades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalocalidades[".arrGroupsPerPage"] = $arrGPP;

$tdatalocalidades[".highlightSearchResults"] = true;

$tableKeyslocalidades = array();
$tdatalocalidades[".Keys"] = $tableKeyslocalidades;


$tdatalocalidades[".hideMobileList"] = array();




//	id_localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_localidad";
	$fdata["GoodName"] = "id_localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Localidades","id_localidad");
	$fdata["FieldType"] = 3;


	
	
			

	
		$fdata["sourceSingle"] = "id_localidad";

		$fdata["FullName"] = "id_localidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocalidades["id_localidad"] = $fdata;
		$tdatalocalidades[".searchableFields"][] = "id_localidad";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Localidades","Localidad");
	$fdata["FieldType"] = 200;


	
	
			

	
		$fdata["sourceSingle"] = "Localidad";

		$fdata["FullName"] = "Localidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocalidades["Localidad"] = $fdata;
		$tdatalocalidades[".searchableFields"][] = "Localidad";


$tables_data["Localidades"]=&$tdatalocalidades;
$field_labels["Localidades"] = &$fieldLabelslocalidades;
$fieldToolTips["Localidades"] = &$fieldToolTipslocalidades;
$placeHolders["Localidades"] = &$placeHolderslocalidades;
$page_titles["Localidades"] = &$pageTitleslocalidades;


changeTextControlsToDate( "Localidades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Localidades"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Localidades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/localidades_ops.php" ) );



	
		;

		

$tdatalocalidades[".sqlquery"] = $queryData_localidades;



$tdatalocalidades[".hasEvents"] = false;

?>