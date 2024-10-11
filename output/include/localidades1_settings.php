<?php
$tdatalocalidades1 = array();
$tdatalocalidades1[".searchableFields"] = array();
$tdatalocalidades1[".ShortName"] = "localidades1";
$tdatalocalidades1[".OwnerID"] = "";
$tdatalocalidades1[".OriginalTable"] = "Localidades";


$tdatalocalidades1[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatalocalidades1[".originalPagesByType"] = $tdatalocalidades1[".pagesByType"];
$tdatalocalidades1[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatalocalidades1[".originalPages"] = $tdatalocalidades1[".pages"];
$tdatalocalidades1[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatalocalidades1[".originalDefaultPages"] = $tdatalocalidades1[".defaultPages"];

//	field labels
$fieldLabelslocalidades1 = array();
$fieldToolTipslocalidades1 = array();
$pageTitleslocalidades1 = array();
$placeHolderslocalidades1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslocalidades1["English"] = array();
	$fieldToolTipslocalidades1["English"] = array();
	$placeHolderslocalidades1["English"] = array();
	$pageTitleslocalidades1["English"] = array();
	$fieldLabelslocalidades1["English"]["Localidad"] = "Localidad";
	$fieldToolTipslocalidades1["English"]["Localidad"] = "";
	$placeHolderslocalidades1["English"]["Localidad"] = "";
	$fieldLabelslocalidades1["English"]["Id_localidad"] = "Id Localidad";
	$fieldToolTipslocalidades1["English"]["Id_localidad"] = "";
	$placeHolderslocalidades1["English"]["Id_localidad"] = "";
	if (count($fieldToolTipslocalidades1["English"]))
		$tdatalocalidades1[".isUseToolTips"] = true;
}


	$tdatalocalidades1[".NCSearch"] = true;



$tdatalocalidades1[".shortTableName"] = "localidades1";
$tdatalocalidades1[".nSecOptions"] = 0;

$tdatalocalidades1[".mainTableOwnerID"] = "";
$tdatalocalidades1[".entityType"] = 6;
$tdatalocalidades1[".connId"] = "isp_eisa_at_localhost";


$tdatalocalidades1[".strOriginalTableName"] = "Localidades";

	



$tdatalocalidades1[".showAddInPopup"] = false;

$tdatalocalidades1[".showEditInPopup"] = false;

$tdatalocalidades1[".showViewInPopup"] = false;

$tdatalocalidades1[".listAjax"] = false;
//	temporary
//$tdatalocalidades1[".listAjax"] = false;

	$tdatalocalidades1[".audit"] = false;

	$tdatalocalidades1[".locking"] = false;


$pages = $tdatalocalidades1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalocalidades1[".edit"] = true;
	$tdatalocalidades1[".afterEditAction"] = 1;
	$tdatalocalidades1[".closePopupAfterEdit"] = 1;
	$tdatalocalidades1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalocalidades1[".add"] = true;
$tdatalocalidades1[".afterAddAction"] = 1;
$tdatalocalidades1[".closePopupAfterAdd"] = 1;
$tdatalocalidades1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalocalidades1[".list"] = true;
}



$tdatalocalidades1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalocalidades1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalocalidades1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalocalidades1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalocalidades1[".printFriendly"] = true;
}



$tdatalocalidades1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalocalidades1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalocalidades1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalocalidades1[".isUseAjaxSuggest"] = false;





$tdatalocalidades1[".ajaxCodeSnippetAdded"] = false;

$tdatalocalidades1[".buttonsAdded"] = false;

$tdatalocalidades1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalocalidades1[".isUseTimeForSearch"] = false;


$tdatalocalidades1[".badgeColor"] = "1E90FF";


$tdatalocalidades1[".allSearchFields"] = array();
$tdatalocalidades1[".filterFields"] = array();
$tdatalocalidades1[".requiredSearchFields"] = array();

$tdatalocalidades1[".googleLikeFields"] = array();
$tdatalocalidades1[".googleLikeFields"][] = "Id_localidad";
$tdatalocalidades1[".googleLikeFields"][] = "Localidad";




$tdatalocalidades1[".printerPageOrientation"] = 0;
$tdatalocalidades1[".nPrinterPageScale"] = 100;

$tdatalocalidades1[".nPrinterSplitRecords"] = 40;

$tdatalocalidades1[".geocodingEnabled"] = false;










$tdatalocalidades1[".pageSize"] = 20;

$tdatalocalidades1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalocalidades1[".strOrderBy"] = $tstrOrderBy;

$tdatalocalidades1[".orderindexes"] = array();


$tdatalocalidades1[".sqlHead"] = "";
$tdatalocalidades1[".sqlFrom"] = "";
$tdatalocalidades1[".sqlWhereExpr"] = "";
$tdatalocalidades1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalocalidades1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalocalidades1[".arrGroupsPerPage"] = $arrGPP;

$tdatalocalidades1[".highlightSearchResults"] = true;

$tableKeyslocalidades1 = array();
$tableKeyslocalidades1[] = "id_localidad";
$tdatalocalidades1[".Keys"] = $tableKeyslocalidades1;


$tdatalocalidades1[".hideMobileList"] = array();




//	Id_localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id_localidad";
	$fdata["GoodName"] = "Id_localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Localidades","Id_localidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Id_localidad";

	
		$fdata["FullName"] = "Id_localidad";

	
	
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


	$tdatalocalidades1["Id_localidad"] = $fdata;
		$tdatalocalidades1[".searchableFields"][] = "Id_localidad";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Localidades","Localidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Localidad";

	
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


	$tdatalocalidades1["Localidad"] = $fdata;
		$tdatalocalidades1[".searchableFields"][] = "Localidad";


$tables_data["Localidades"]=&$tdatalocalidades1;
$field_labels["Localidades"] = &$fieldLabelslocalidades1;
$fieldToolTips["Localidades"] = &$fieldToolTipslocalidades1;
$placeHolders["Localidades"] = &$placeHolderslocalidades1;
$page_titles["Localidades"] = &$pageTitleslocalidades1;


changeTextControlsToDate( "Localidades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Localidades"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Localidades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/localidades1_ops.php" ) );



	
		;

		

$tdatalocalidades1[".sqlquery"] = $queryData_localidades1;



$tdatalocalidades1[".hasEvents"] = false;

?>