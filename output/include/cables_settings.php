<?php
$tdatacables = array();
$tdatacables[".searchableFields"] = array();
$tdatacables[".ShortName"] = "cables";
$tdatacables[".OwnerID"] = "";
$tdatacables[".OriginalTable"] = "Cables";


$tdatacables[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacables[".originalPagesByType"] = $tdatacables[".pagesByType"];
$tdatacables[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacables[".originalPages"] = $tdatacables[".pages"];
$tdatacables[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacables[".originalDefaultPages"] = $tdatacables[".defaultPages"];

//	field labels
$fieldLabelscables = array();
$fieldToolTipscables = array();
$pageTitlescables = array();
$placeHolderscables = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscables["English"] = array();
	$fieldToolTipscables["English"] = array();
	$placeHolderscables["English"] = array();
	$pageTitlescables["English"] = array();
	$fieldLabelscables["English"]["id_cables"] = "Id Cables";
	$fieldToolTipscables["English"]["id_cables"] = "";
	$placeHolderscables["English"]["id_cables"] = "";
	$fieldLabelscables["English"]["cable"] = "Cable";
	$fieldToolTipscables["English"]["cable"] = "";
	$placeHolderscables["English"]["cable"] = "";
	$fieldLabelscables["English"]["localidad"] = "Localidad";
	$fieldToolTipscables["English"]["localidad"] = "";
	$placeHolderscables["English"]["localidad"] = "";
	$fieldLabelscables["English"]["id_localidad"] = "Id Localidad";
	$fieldToolTipscables["English"]["id_localidad"] = "";
	$placeHolderscables["English"]["id_localidad"] = "";
	if (count($fieldToolTipscables["English"]))
		$tdatacables[".isUseToolTips"] = true;
}


	$tdatacables[".NCSearch"] = true;



$tdatacables[".shortTableName"] = "cables";
$tdatacables[".nSecOptions"] = 0;

$tdatacables[".mainTableOwnerID"] = "";
$tdatacables[".entityType"] = 6;
$tdatacables[".connId"] = "isp_eisa_at_localhost";


$tdatacables[".strOriginalTableName"] = "Cables";

	



$tdatacables[".showAddInPopup"] = false;

$tdatacables[".showEditInPopup"] = false;

$tdatacables[".showViewInPopup"] = false;

$tdatacables[".listAjax"] = false;
//	temporary
//$tdatacables[".listAjax"] = false;

	$tdatacables[".audit"] = false;

	$tdatacables[".locking"] = false;


$pages = $tdatacables[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacables[".edit"] = true;
	$tdatacables[".afterEditAction"] = 1;
	$tdatacables[".closePopupAfterEdit"] = 1;
	$tdatacables[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacables[".add"] = true;
$tdatacables[".afterAddAction"] = 1;
$tdatacables[".closePopupAfterAdd"] = 1;
$tdatacables[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacables[".list"] = true;
}



$tdatacables[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacables[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacables[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacables[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacables[".printFriendly"] = true;
}



$tdatacables[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacables[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacables[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacables[".isUseAjaxSuggest"] = false;





$tdatacables[".ajaxCodeSnippetAdded"] = false;

$tdatacables[".buttonsAdded"] = false;

$tdatacables[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacables[".isUseTimeForSearch"] = false;


$tdatacables[".badgeColor"] = "CD853F";


$tdatacables[".allSearchFields"] = array();
$tdatacables[".filterFields"] = array();
$tdatacables[".requiredSearchFields"] = array();

$tdatacables[".googleLikeFields"] = array();
$tdatacables[".googleLikeFields"][] = "id_cables";
$tdatacables[".googleLikeFields"][] = "cable";
$tdatacables[".googleLikeFields"][] = "localidad";
$tdatacables[".googleLikeFields"][] = "id_localidad";




$tdatacables[".printerPageOrientation"] = 0;
$tdatacables[".nPrinterPageScale"] = 100;

$tdatacables[".nPrinterSplitRecords"] = 40;

$tdatacables[".geocodingEnabled"] = false;










$tdatacables[".pageSize"] = 20;

$tdatacables[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacables[".strOrderBy"] = $tstrOrderBy;

$tdatacables[".orderindexes"] = array();


$tdatacables[".sqlHead"] = "";
$tdatacables[".sqlFrom"] = "";
$tdatacables[".sqlWhereExpr"] = "";
$tdatacables[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacables[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacables[".arrGroupsPerPage"] = $arrGPP;

$tdatacables[".highlightSearchResults"] = true;

$tableKeyscables = array();
$tableKeyscables[] = "id_cables";
$tdatacables[".Keys"] = $tableKeyscables;


$tdatacables[".hideMobileList"] = array();




//	id_cables
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cables";
	$fdata["GoodName"] = "id_cables";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Cables","id_cables");
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


	$tdatacables["id_cables"] = $fdata;
		$tdatacables[".searchableFields"][] = "id_cables";
//	cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cable";
	$fdata["GoodName"] = "cable";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Cables","cable");
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


	$tdatacables["cable"] = $fdata;
		$tdatacables[".searchableFields"][] = "cable";
//	localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "localidad";
	$fdata["GoodName"] = "localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Cables","localidad");
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


	$tdatacables["localidad"] = $fdata;
		$tdatacables[".searchableFields"][] = "localidad";
//	id_localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_localidad";
	$fdata["GoodName"] = "id_localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Cables","id_localidad");
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


	$tdatacables["id_localidad"] = $fdata;
		$tdatacables[".searchableFields"][] = "id_localidad";


$tables_data["Cables"]=&$tdatacables;
$field_labels["Cables"] = &$fieldLabelscables;
$fieldToolTips["Cables"] = &$fieldToolTipscables;
$placeHolders["Cables"] = &$placeHolderscables;
$page_titles["Cables"] = &$pageTitlescables;


changeTextControlsToDate( "Cables" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Cables"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Cables"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/cables_ops.php" ) );



	
		;

				

$tdatacables[".sqlquery"] = $queryData_cables;



$tdatacables[".hasEvents"] = false;

?>