<?php
$tdatactos = array();
$tdatactos[".searchableFields"] = array();
$tdatactos[".ShortName"] = "ctos";
$tdatactos[".OwnerID"] = "";
$tdatactos[".OriginalTable"] = "ctos";


$tdatactos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatactos[".originalPagesByType"] = $tdatactos[".pagesByType"];
$tdatactos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatactos[".originalPages"] = $tdatactos[".pages"];
$tdatactos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatactos[".originalDefaultPages"] = $tdatactos[".defaultPages"];

//	field labels
$fieldLabelsctos = array();
$fieldToolTipsctos = array();
$pageTitlesctos = array();
$placeHoldersctos = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsctos["English"] = array();
	$fieldToolTipsctos["English"] = array();
	$placeHoldersctos["English"] = array();
	$pageTitlesctos["English"] = array();
	$fieldLabelsctos["English"]["id_Ctos"] = "Id Ctos";
	$fieldToolTipsctos["English"]["id_Ctos"] = "";
	$placeHoldersctos["English"]["id_Ctos"] = "";
	$fieldLabelsctos["English"]["Cto"] = "Cto";
	$fieldToolTipsctos["English"]["Cto"] = "";
	$placeHoldersctos["English"]["Cto"] = "";
	$fieldLabelsctos["English"]["Spliter"] = "Spliter";
	$fieldToolTipsctos["English"]["Spliter"] = "";
	$placeHoldersctos["English"]["Spliter"] = "";
	$fieldLabelsctos["English"]["Cable"] = "Cable";
	$fieldToolTipsctos["English"]["Cable"] = "";
	$placeHoldersctos["English"]["Cable"] = "";
	$fieldLabelsctos["English"]["Localidad"] = "Localidad";
	$fieldToolTipsctos["English"]["Localidad"] = "";
	$placeHoldersctos["English"]["Localidad"] = "";
	$fieldLabelsctos["English"]["id_spliter"] = "Id Spliter";
	$fieldToolTipsctos["English"]["id_spliter"] = "";
	$placeHoldersctos["English"]["id_spliter"] = "";
	if (count($fieldToolTipsctos["English"]))
		$tdatactos[".isUseToolTips"] = true;
}


	$tdatactos[".NCSearch"] = true;



$tdatactos[".shortTableName"] = "ctos";
$tdatactos[".nSecOptions"] = 0;

$tdatactos[".mainTableOwnerID"] = "";
$tdatactos[".entityType"] = 6;
$tdatactos[".connId"] = "isp_eisa_at_localhost";


$tdatactos[".strOriginalTableName"] = "ctos";

	



$tdatactos[".showAddInPopup"] = false;

$tdatactos[".showEditInPopup"] = false;

$tdatactos[".showViewInPopup"] = false;

$tdatactos[".listAjax"] = false;
//	temporary
//$tdatactos[".listAjax"] = false;

	$tdatactos[".audit"] = false;

	$tdatactos[".locking"] = false;


$pages = $tdatactos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatactos[".edit"] = true;
	$tdatactos[".afterEditAction"] = 1;
	$tdatactos[".closePopupAfterEdit"] = 1;
	$tdatactos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatactos[".add"] = true;
$tdatactos[".afterAddAction"] = 1;
$tdatactos[".closePopupAfterAdd"] = 1;
$tdatactos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatactos[".list"] = true;
}



$tdatactos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatactos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatactos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatactos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatactos[".printFriendly"] = true;
}



$tdatactos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatactos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatactos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatactos[".isUseAjaxSuggest"] = false;





$tdatactos[".ajaxCodeSnippetAdded"] = false;

$tdatactos[".buttonsAdded"] = false;

$tdatactos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatactos[".isUseTimeForSearch"] = false;


$tdatactos[".badgeColor"] = "2F4F4F";


$tdatactos[".allSearchFields"] = array();
$tdatactos[".filterFields"] = array();
$tdatactos[".requiredSearchFields"] = array();

$tdatactos[".googleLikeFields"] = array();
$tdatactos[".googleLikeFields"][] = "id_Ctos";
$tdatactos[".googleLikeFields"][] = "Cto";
$tdatactos[".googleLikeFields"][] = "id_spliter";
$tdatactos[".googleLikeFields"][] = "Spliter";
$tdatactos[".googleLikeFields"][] = "Cable";
$tdatactos[".googleLikeFields"][] = "Localidad";




$tdatactos[".printerPageOrientation"] = 0;
$tdatactos[".nPrinterPageScale"] = 100;

$tdatactos[".nPrinterSplitRecords"] = 40;

$tdatactos[".geocodingEnabled"] = false;










$tdatactos[".pageSize"] = 20;

$tdatactos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatactos[".strOrderBy"] = $tstrOrderBy;

$tdatactos[".orderindexes"] = array();


$tdatactos[".sqlHead"] = "";
$tdatactos[".sqlFrom"] = "";
$tdatactos[".sqlWhereExpr"] = "";
$tdatactos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatactos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatactos[".arrGroupsPerPage"] = $arrGPP;

$tdatactos[".highlightSearchResults"] = true;

$tableKeysctos = array();
$tableKeysctos[] = "id_Ctos";
$tdatactos[".Keys"] = $tableKeysctos;


$tdatactos[".hideMobileList"] = array();




//	id_Ctos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Ctos";
	$fdata["GoodName"] = "id_Ctos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ctos","id_Ctos");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_Ctos";

	
		$fdata["FullName"] = "id_Ctos";

	
	
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


	$tdatactos["id_Ctos"] = $fdata;
		$tdatactos[".searchableFields"][] = "id_Ctos";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ctos","Cto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cto";

	
		$fdata["FullName"] = "Cto";

	
	
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


	$tdatactos["Cto"] = $fdata;
		$tdatactos[".searchableFields"][] = "Cto";
//	id_spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_spliter";
	$fdata["GoodName"] = "id_spliter";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ctos","id_spliter");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_spliter";

	
		$fdata["FullName"] = "id_spliter";

	
	
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


	$tdatactos["id_spliter"] = $fdata;
		$tdatactos[".searchableFields"][] = "id_spliter";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ctos","Spliter");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Spliter";

	
		$fdata["FullName"] = "Spliter";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatactos["Spliter"] = $fdata;
		$tdatactos[".searchableFields"][] = "Spliter";
//	Cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Cable";
	$fdata["GoodName"] = "Cable";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ctos","Cable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cable";

	
		$fdata["FullName"] = "Cable";

	
	
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


	$tdatactos["Cable"] = $fdata;
		$tdatactos[".searchableFields"][] = "Cable";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ctos","Localidad");
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


	$tdatactos["Localidad"] = $fdata;
		$tdatactos[".searchableFields"][] = "Localidad";


$tables_data["ctos"]=&$tdatactos;
$field_labels["ctos"] = &$fieldLabelsctos;
$fieldToolTips["ctos"] = &$fieldToolTipsctos;
$placeHolders["ctos"] = &$placeHoldersctos;
$page_titles["ctos"] = &$pageTitlesctos;


changeTextControlsToDate( "ctos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ctos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ctos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/ctos_ops.php" ) );



	
		;

						

$tdatactos[".sqlquery"] = $queryData_ctos;



$tdatactos[".hasEvents"] = false;

?>