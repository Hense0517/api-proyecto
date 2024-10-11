<?php
$tdataspliter = array();
$tdataspliter[".searchableFields"] = array();
$tdataspliter[".ShortName"] = "spliter";
$tdataspliter[".OwnerID"] = "";
$tdataspliter[".OriginalTable"] = "spliter";


$tdataspliter[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataspliter[".originalPagesByType"] = $tdataspliter[".pagesByType"];
$tdataspliter[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataspliter[".originalPages"] = $tdataspliter[".pages"];
$tdataspliter[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataspliter[".originalDefaultPages"] = $tdataspliter[".defaultPages"];

//	field labels
$fieldLabelsspliter = array();
$fieldToolTipsspliter = array();
$pageTitlesspliter = array();
$placeHoldersspliter = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsspliter["English"] = array();
	$fieldToolTipsspliter["English"] = array();
	$placeHoldersspliter["English"] = array();
	$pageTitlesspliter["English"] = array();
	$fieldLabelsspliter["English"]["id_spliters"] = "Id Spliters";
	$fieldToolTipsspliter["English"]["id_spliters"] = "";
	$placeHoldersspliter["English"]["id_spliters"] = "";
	$fieldLabelsspliter["English"]["spliter"] = "Spliter";
	$fieldToolTipsspliter["English"]["spliter"] = "";
	$placeHoldersspliter["English"]["spliter"] = "";
	$fieldLabelsspliter["English"]["cable"] = "Cable";
	$fieldToolTipsspliter["English"]["cable"] = "";
	$placeHoldersspliter["English"]["cable"] = "";
	$fieldLabelsspliter["English"]["localidad"] = "Localidad";
	$fieldToolTipsspliter["English"]["localidad"] = "";
	$placeHoldersspliter["English"]["localidad"] = "";
	$fieldLabelsspliter["English"]["id_cable"] = "Id Cable";
	$fieldToolTipsspliter["English"]["id_cable"] = "";
	$placeHoldersspliter["English"]["id_cable"] = "";
	if (count($fieldToolTipsspliter["English"]))
		$tdataspliter[".isUseToolTips"] = true;
}


	$tdataspliter[".NCSearch"] = true;



$tdataspliter[".shortTableName"] = "spliter";
$tdataspliter[".nSecOptions"] = 0;

$tdataspliter[".mainTableOwnerID"] = "";
$tdataspliter[".entityType"] = 6;
$tdataspliter[".connId"] = "isp_eisa_at_localhost";


$tdataspliter[".strOriginalTableName"] = "spliter";

	



$tdataspliter[".showAddInPopup"] = false;

$tdataspliter[".showEditInPopup"] = false;

$tdataspliter[".showViewInPopup"] = false;

$tdataspliter[".listAjax"] = false;
//	temporary
//$tdataspliter[".listAjax"] = false;

	$tdataspliter[".audit"] = false;

	$tdataspliter[".locking"] = false;


$pages = $tdataspliter[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataspliter[".edit"] = true;
	$tdataspliter[".afterEditAction"] = 1;
	$tdataspliter[".closePopupAfterEdit"] = 1;
	$tdataspliter[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataspliter[".add"] = true;
$tdataspliter[".afterAddAction"] = 1;
$tdataspliter[".closePopupAfterAdd"] = 1;
$tdataspliter[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataspliter[".list"] = true;
}



$tdataspliter[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataspliter[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataspliter[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataspliter[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataspliter[".printFriendly"] = true;
}



$tdataspliter[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataspliter[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataspliter[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataspliter[".isUseAjaxSuggest"] = false;





$tdataspliter[".ajaxCodeSnippetAdded"] = false;

$tdataspliter[".buttonsAdded"] = false;

$tdataspliter[".addPageEvents"] = false;

// use timepicker for search panel
$tdataspliter[".isUseTimeForSearch"] = false;


$tdataspliter[".badgeColor"] = "1E90FF";


$tdataspliter[".allSearchFields"] = array();
$tdataspliter[".filterFields"] = array();
$tdataspliter[".requiredSearchFields"] = array();

$tdataspliter[".googleLikeFields"] = array();
$tdataspliter[".googleLikeFields"][] = "id_spliters";
$tdataspliter[".googleLikeFields"][] = "spliter";
$tdataspliter[".googleLikeFields"][] = "cable";
$tdataspliter[".googleLikeFields"][] = "localidad";
$tdataspliter[".googleLikeFields"][] = "id_cable";




$tdataspliter[".printerPageOrientation"] = 0;
$tdataspliter[".nPrinterPageScale"] = 100;

$tdataspliter[".nPrinterSplitRecords"] = 40;

$tdataspliter[".geocodingEnabled"] = false;










$tdataspliter[".pageSize"] = 20;

$tdataspliter[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataspliter[".strOrderBy"] = $tstrOrderBy;

$tdataspliter[".orderindexes"] = array();


$tdataspliter[".sqlHead"] = "";
$tdataspliter[".sqlFrom"] = "";
$tdataspliter[".sqlWhereExpr"] = "";
$tdataspliter[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataspliter[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataspliter[".arrGroupsPerPage"] = $arrGPP;

$tdataspliter[".highlightSearchResults"] = true;

$tableKeysspliter = array();
$tableKeysspliter[] = "id_spliters";
$tdataspliter[".Keys"] = $tableKeysspliter;


$tdataspliter[".hideMobileList"] = array();




//	id_spliters
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_spliters";
	$fdata["GoodName"] = "id_spliters";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("spliter","id_spliters");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_spliters";

	
		$fdata["FullName"] = "id_spliters";

	
	
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


	$tdataspliter["id_spliters"] = $fdata;
		$tdataspliter[".searchableFields"][] = "id_spliters";
//	spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "spliter";
	$fdata["GoodName"] = "spliter";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("spliter","spliter");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "spliter";

	
		$fdata["FullName"] = "spliter";

	
	
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


	$tdataspliter["spliter"] = $fdata;
		$tdataspliter[".searchableFields"][] = "spliter";
//	cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cable";
	$fdata["GoodName"] = "cable";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("spliter","cable");
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


	$tdataspliter["cable"] = $fdata;
		$tdataspliter[".searchableFields"][] = "cable";
//	localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "localidad";
	$fdata["GoodName"] = "localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("spliter","localidad");
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


	$tdataspliter["localidad"] = $fdata;
		$tdataspliter[".searchableFields"][] = "localidad";
//	id_cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id_cable";
	$fdata["GoodName"] = "id_cable";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("spliter","id_cable");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_cable";

	
		$fdata["FullName"] = "id_cable";

	
	
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


	$tdataspliter["id_cable"] = $fdata;
		$tdataspliter[".searchableFields"][] = "id_cable";


$tables_data["spliter"]=&$tdataspliter;
$field_labels["spliter"] = &$fieldLabelsspliter;
$fieldToolTips["spliter"] = &$fieldToolTipsspliter;
$placeHolders["spliter"] = &$placeHoldersspliter;
$page_titles["spliter"] = &$pageTitlesspliter;


changeTextControlsToDate( "spliter" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["spliter"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["spliter"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/spliter_ops.php" ) );



	
		;

					

$tdataspliter[".sqlquery"] = $queryData_spliter;



$tdataspliter[".hasEvents"] = false;

?>