<?php
$tdatacable = array();
$tdatacable[".searchableFields"] = array();
$tdatacable[".ShortName"] = "cable";
$tdatacable[".OwnerID"] = "";
$tdatacable[".OriginalTable"] = "Cable";


$tdatacable[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacable[".originalPagesByType"] = $tdatacable[".pagesByType"];
$tdatacable[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacable[".originalPages"] = $tdatacable[".pages"];
$tdatacable[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacable[".originalDefaultPages"] = $tdatacable[".defaultPages"];

//	field labels
$fieldLabelscable = array();
$fieldToolTipscable = array();
$pageTitlescable = array();
$placeHolderscable = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscable["English"] = array();
	$fieldToolTipscable["English"] = array();
	$placeHolderscable["English"] = array();
	$pageTitlescable["English"] = array();
	$fieldLabelscable["English"]["id_cables"] = "Id Cables";
	$fieldToolTipscable["English"]["id_cables"] = "";
	$placeHolderscable["English"]["id_cables"] = "";
	$fieldLabelscable["English"]["cable"] = "Cable";
	$fieldToolTipscable["English"]["cable"] = "";
	$placeHolderscable["English"]["cable"] = "";
	$fieldLabelscable["English"]["localidad"] = "Localidad";
	$fieldToolTipscable["English"]["localidad"] = "";
	$placeHolderscable["English"]["localidad"] = "";
	$fieldLabelscable["English"]["id_localidad"] = "Id Localidad";
	$fieldToolTipscable["English"]["id_localidad"] = "";
	$placeHolderscable["English"]["id_localidad"] = "";
	if (count($fieldToolTipscable["English"]))
		$tdatacable[".isUseToolTips"] = true;
}


	$tdatacable[".NCSearch"] = true;



$tdatacable[".shortTableName"] = "cable";
$tdatacable[".nSecOptions"] = 0;

$tdatacable[".mainTableOwnerID"] = "";
$tdatacable[".entityType"] = 6;
$tdatacable[".connId"] = "isp_eisa_at_localhost";


$tdatacable[".strOriginalTableName"] = "Cable";

	



$tdatacable[".showAddInPopup"] = false;

$tdatacable[".showEditInPopup"] = false;

$tdatacable[".showViewInPopup"] = false;

$tdatacable[".listAjax"] = false;
//	temporary
//$tdatacable[".listAjax"] = false;

	$tdatacable[".audit"] = false;

	$tdatacable[".locking"] = false;


$pages = $tdatacable[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacable[".edit"] = true;
	$tdatacable[".afterEditAction"] = 1;
	$tdatacable[".closePopupAfterEdit"] = 1;
	$tdatacable[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacable[".add"] = true;
$tdatacable[".afterAddAction"] = 1;
$tdatacable[".closePopupAfterAdd"] = 1;
$tdatacable[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacable[".list"] = true;
}



$tdatacable[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacable[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacable[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacable[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacable[".printFriendly"] = true;
}



$tdatacable[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacable[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacable[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacable[".isUseAjaxSuggest"] = false;





$tdatacable[".ajaxCodeSnippetAdded"] = false;

$tdatacable[".buttonsAdded"] = false;

$tdatacable[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacable[".isUseTimeForSearch"] = false;


$tdatacable[".badgeColor"] = "cd5c5c";


$tdatacable[".allSearchFields"] = array();
$tdatacable[".filterFields"] = array();
$tdatacable[".requiredSearchFields"] = array();

$tdatacable[".googleLikeFields"] = array();
$tdatacable[".googleLikeFields"][] = "id_cables";
$tdatacable[".googleLikeFields"][] = "cable";
$tdatacable[".googleLikeFields"][] = "localidad";
$tdatacable[".googleLikeFields"][] = "id_localidad";




$tdatacable[".printerPageOrientation"] = 0;
$tdatacable[".nPrinterPageScale"] = 100;

$tdatacable[".nPrinterSplitRecords"] = 40;

$tdatacable[".geocodingEnabled"] = false;










$tdatacable[".pageSize"] = 20;

$tdatacable[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacable[".strOrderBy"] = $tstrOrderBy;

$tdatacable[".orderindexes"] = array();


$tdatacable[".sqlHead"] = "";
$tdatacable[".sqlFrom"] = "";
$tdatacable[".sqlWhereExpr"] = "";
$tdatacable[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacable[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacable[".arrGroupsPerPage"] = $arrGPP;

$tdatacable[".highlightSearchResults"] = true;

$tableKeyscable = array();
$tableKeyscable[] = "id_cables";
$tdatacable[".Keys"] = $tableKeyscable;


$tdatacable[".hideMobileList"] = array();




//	id_cables
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cables";
	$fdata["GoodName"] = "id_cables";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Cable","id_cables");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_cables";

	
		$fdata["FullName"] = "id_cables";

	
	
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


	$tdatacable["id_cables"] = $fdata;
		$tdatacable[".searchableFields"][] = "id_cables";
//	cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cable";
	$fdata["GoodName"] = "cable";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Cable","cable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cable";

	
		$fdata["FullName"] = "cable";

	
	
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


	$tdatacable["cable"] = $fdata;
		$tdatacable[".searchableFields"][] = "cable";
//	localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "localidad";
	$fdata["GoodName"] = "localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Cable","localidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "localidad";

	
		$fdata["FullName"] = "localidad";

	
	
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


	$tdatacable["localidad"] = $fdata;
		$tdatacable[".searchableFields"][] = "localidad";
//	id_localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_localidad";
	$fdata["GoodName"] = "id_localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Cable","id_localidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_localidad";

	
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


	$tdatacable["id_localidad"] = $fdata;
		$tdatacable[".searchableFields"][] = "id_localidad";


$tables_data["Cable"]=&$tdatacable;
$field_labels["Cable"] = &$fieldLabelscable;
$fieldToolTips["Cable"] = &$fieldToolTipscable;
$placeHolders["Cable"] = &$placeHolderscable;
$page_titles["Cable"] = &$pageTitlescable;


changeTextControlsToDate( "Cable" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Cable"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Cable"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/cable_ops.php" ) );



	
		;

				

$tdatacable[".sqlquery"] = $queryData_cable;



$tdatacable[".hasEvents"] = false;

?>