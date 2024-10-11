<?php
$tdatapuertos = array();
$tdatapuertos[".searchableFields"] = array();
$tdatapuertos[".ShortName"] = "puertos";
$tdatapuertos[".OwnerID"] = "";
$tdatapuertos[".OriginalTable"] = "puertos";


$tdatapuertos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapuertos[".originalPagesByType"] = $tdatapuertos[".pagesByType"];
$tdatapuertos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapuertos[".originalPages"] = $tdatapuertos[".pages"];
$tdatapuertos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatapuertos[".originalDefaultPages"] = $tdatapuertos[".defaultPages"];

//	field labels
$fieldLabelspuertos = array();
$fieldToolTipspuertos = array();
$pageTitlespuertos = array();
$placeHolderspuertos = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspuertos["English"] = array();
	$fieldToolTipspuertos["English"] = array();
	$placeHolderspuertos["English"] = array();
	$pageTitlespuertos["English"] = array();
	$fieldLabelspuertos["English"]["Id_puertos"] = "Id Puertos";
	$fieldToolTipspuertos["English"]["Id_puertos"] = "";
	$placeHolderspuertos["English"]["Id_puertos"] = "";
	$fieldLabelspuertos["English"]["Puerto"] = "Puerto";
	$fieldToolTipspuertos["English"]["Puerto"] = "";
	$placeHolderspuertos["English"]["Puerto"] = "";
	$fieldLabelspuertos["English"]["Cto"] = "Cto";
	$fieldToolTipspuertos["English"]["Cto"] = "";
	$placeHolderspuertos["English"]["Cto"] = "";
	$fieldLabelspuertos["English"]["Spliter"] = "Spliter";
	$fieldToolTipspuertos["English"]["Spliter"] = "";
	$placeHolderspuertos["English"]["Spliter"] = "";
	$fieldLabelspuertos["English"]["Cable"] = "Cable";
	$fieldToolTipspuertos["English"]["Cable"] = "";
	$placeHolderspuertos["English"]["Cable"] = "";
	$fieldLabelspuertos["English"]["Localidad"] = "Localidad";
	$fieldToolTipspuertos["English"]["Localidad"] = "";
	$placeHolderspuertos["English"]["Localidad"] = "";
	$fieldLabelspuertos["English"]["Cedula"] = "Cedula";
	$fieldToolTipspuertos["English"]["Cedula"] = "";
	$placeHolderspuertos["English"]["Cedula"] = "";
	$fieldLabelspuertos["English"]["Activo"] = "Activo";
	$fieldToolTipspuertos["English"]["Activo"] = "";
	$placeHolderspuertos["English"]["Activo"] = "";
	$fieldLabelspuertos["English"]["Ocupado"] = "Ocupado";
	$fieldToolTipspuertos["English"]["Ocupado"] = "";
	$placeHolderspuertos["English"]["Ocupado"] = "";
	if (count($fieldToolTipspuertos["English"]))
		$tdatapuertos[".isUseToolTips"] = true;
}


	$tdatapuertos[".NCSearch"] = true;



$tdatapuertos[".shortTableName"] = "puertos";
$tdatapuertos[".nSecOptions"] = 0;

$tdatapuertos[".mainTableOwnerID"] = "";
$tdatapuertos[".entityType"] = 6;
$tdatapuertos[".connId"] = "isp_eisa_at_localhost";


$tdatapuertos[".strOriginalTableName"] = "puertos";

	



$tdatapuertos[".showAddInPopup"] = false;

$tdatapuertos[".showEditInPopup"] = false;

$tdatapuertos[".showViewInPopup"] = false;

$tdatapuertos[".listAjax"] = false;
//	temporary
//$tdatapuertos[".listAjax"] = false;

	$tdatapuertos[".audit"] = false;

	$tdatapuertos[".locking"] = false;


$pages = $tdatapuertos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapuertos[".edit"] = true;
	$tdatapuertos[".afterEditAction"] = 1;
	$tdatapuertos[".closePopupAfterEdit"] = 1;
	$tdatapuertos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapuertos[".add"] = true;
$tdatapuertos[".afterAddAction"] = 1;
$tdatapuertos[".closePopupAfterAdd"] = 1;
$tdatapuertos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapuertos[".list"] = true;
}



$tdatapuertos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapuertos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapuertos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapuertos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapuertos[".printFriendly"] = true;
}



$tdatapuertos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapuertos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapuertos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapuertos[".isUseAjaxSuggest"] = false;





$tdatapuertos[".ajaxCodeSnippetAdded"] = false;

$tdatapuertos[".buttonsAdded"] = false;

$tdatapuertos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapuertos[".isUseTimeForSearch"] = false;


$tdatapuertos[".badgeColor"] = "CD5C5C";


$tdatapuertos[".allSearchFields"] = array();
$tdatapuertos[".filterFields"] = array();
$tdatapuertos[".requiredSearchFields"] = array();

$tdatapuertos[".googleLikeFields"] = array();
$tdatapuertos[".googleLikeFields"][] = "Id_puertos";
$tdatapuertos[".googleLikeFields"][] = "Puerto";
$tdatapuertos[".googleLikeFields"][] = "Cto";
$tdatapuertos[".googleLikeFields"][] = "Spliter";
$tdatapuertos[".googleLikeFields"][] = "Cable";
$tdatapuertos[".googleLikeFields"][] = "Localidad";
$tdatapuertos[".googleLikeFields"][] = "Cedula";
$tdatapuertos[".googleLikeFields"][] = "Activo";
$tdatapuertos[".googleLikeFields"][] = "Ocupado";




$tdatapuertos[".printerPageOrientation"] = 0;
$tdatapuertos[".nPrinterPageScale"] = 100;

$tdatapuertos[".nPrinterSplitRecords"] = 40;

$tdatapuertos[".geocodingEnabled"] = false;










$tdatapuertos[".pageSize"] = 20;

$tdatapuertos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapuertos[".strOrderBy"] = $tstrOrderBy;

$tdatapuertos[".orderindexes"] = array();


$tdatapuertos[".sqlHead"] = "";
$tdatapuertos[".sqlFrom"] = "";
$tdatapuertos[".sqlWhereExpr"] = "";
$tdatapuertos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapuertos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapuertos[".arrGroupsPerPage"] = $arrGPP;

$tdatapuertos[".highlightSearchResults"] = true;

$tableKeyspuertos = array();
$tableKeyspuertos[] = "Id_puertos";
$tdatapuertos[".Keys"] = $tableKeyspuertos;


$tdatapuertos[".hideMobileList"] = array();




//	Id_puertos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id_puertos";
	$fdata["GoodName"] = "Id_puertos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puertos","Id_puertos");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Id_puertos";

	
		$fdata["FullName"] = "Id_puertos";

	
	
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


	$tdatapuertos["Id_puertos"] = $fdata;
		$tdatapuertos[".searchableFields"][] = "Id_puertos";
//	Puerto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Puerto";
	$fdata["GoodName"] = "Puerto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puertos","Puerto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Puerto";

	
		$fdata["FullName"] = "Puerto";

	
	
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


	$tdatapuertos["Puerto"] = $fdata;
		$tdatapuertos[".searchableFields"][] = "Puerto";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puertos","Cto");
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


	$tdatapuertos["Cto"] = $fdata;
		$tdatapuertos[".searchableFields"][] = "Cto";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puertos","Spliter");
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


	$tdatapuertos["Spliter"] = $fdata;
		$tdatapuertos[".searchableFields"][] = "Spliter";
//	Cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Cable";
	$fdata["GoodName"] = "Cable";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puertos","Cable");
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


	$tdatapuertos["Cable"] = $fdata;
		$tdatapuertos[".searchableFields"][] = "Cable";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puertos","Localidad");
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


	$tdatapuertos["Localidad"] = $fdata;
		$tdatapuertos[".searchableFields"][] = "Localidad";
//	Cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Cedula";
	$fdata["GoodName"] = "Cedula";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puertos","Cedula");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cedula";

	
		$fdata["FullName"] = "Cedula";

	
	
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


	$tdatapuertos["Cedula"] = $fdata;
		$tdatapuertos[".searchableFields"][] = "Cedula";
//	Activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Activo";
	$fdata["GoodName"] = "Activo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puertos","Activo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Activo";

	
		$fdata["FullName"] = "Activo";

	
	
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


	$tdatapuertos["Activo"] = $fdata;
		$tdatapuertos[".searchableFields"][] = "Activo";
//	Ocupado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Ocupado";
	$fdata["GoodName"] = "Ocupado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puertos","Ocupado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ocupado";

	
		$fdata["FullName"] = "Ocupado";

	
	
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


	$tdatapuertos["Ocupado"] = $fdata;
		$tdatapuertos[".searchableFields"][] = "Ocupado";


$tables_data["puertos"]=&$tdatapuertos;
$field_labels["puertos"] = &$fieldLabelspuertos;
$fieldToolTips["puertos"] = &$fieldToolTipspuertos;
$placeHolders["puertos"] = &$placeHolderspuertos;
$page_titles["puertos"] = &$pageTitlespuertos;


changeTextControlsToDate( "puertos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["puertos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["puertos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/puertos_ops.php" ) );



	
		;

									

$tdatapuertos[".sqlquery"] = $queryData_puertos;



$tdatapuertos[".hasEvents"] = false;

?>