<?php
$tdataadmin_users = array();
$tdataadmin_users[".searchableFields"] = array();
$tdataadmin_users[".ShortName"] = "admin_users";
$tdataadmin_users[".OwnerID"] = "";
$tdataadmin_users[".OriginalTable"] = "usuarios";


$tdataadmin_users[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadmin_users[".originalPagesByType"] = $tdataadmin_users[".pagesByType"];
$tdataadmin_users[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadmin_users[".originalPages"] = $tdataadmin_users[".pages"];
$tdataadmin_users[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadmin_users[".originalDefaultPages"] = $tdataadmin_users[".defaultPages"];

//	field labels
$fieldLabelsadmin_users = array();
$fieldToolTipsadmin_users = array();
$pageTitlesadmin_users = array();
$placeHoldersadmin_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_users["English"] = array();
	$fieldToolTipsadmin_users["English"] = array();
	$placeHoldersadmin_users["English"] = array();
	$pageTitlesadmin_users["English"] = array();
	$fieldLabelsadmin_users["English"]["Id"] = "Id";
	$fieldToolTipsadmin_users["English"]["Id"] = "";
	$placeHoldersadmin_users["English"]["Id"] = "";
	$fieldLabelsadmin_users["English"]["Nombre"] = "Nombre";
	$fieldToolTipsadmin_users["English"]["Nombre"] = "";
	$placeHoldersadmin_users["English"]["Nombre"] = "";
	$fieldLabelsadmin_users["English"]["Perfil"] = "Perfil";
	$fieldToolTipsadmin_users["English"]["Perfil"] = "";
	$placeHoldersadmin_users["English"]["Perfil"] = "";
	$fieldLabelsadmin_users["English"]["Clave"] = "Clave";
	$fieldToolTipsadmin_users["English"]["Clave"] = "";
	$placeHoldersadmin_users["English"]["Clave"] = "";
	$fieldLabelsadmin_users["English"]["apikey"] = "Apikey";
	$fieldToolTipsadmin_users["English"]["apikey"] = "";
	$placeHoldersadmin_users["English"]["apikey"] = "";
	if (count($fieldToolTipsadmin_users["English"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}


	$tdataadmin_users[".NCSearch"] = true;



$tdataadmin_users[".shortTableName"] = "admin_users";
$tdataadmin_users[".nSecOptions"] = 0;

$tdataadmin_users[".mainTableOwnerID"] = "";
$tdataadmin_users[".entityType"] = 1;
$tdataadmin_users[".connId"] = "isp_eisa_at_localhost";


$tdataadmin_users[".strOriginalTableName"] = "usuarios";

	



$tdataadmin_users[".showAddInPopup"] = false;

$tdataadmin_users[".showEditInPopup"] = false;

$tdataadmin_users[".showViewInPopup"] = false;

$tdataadmin_users[".listAjax"] = false;
//	temporary
//$tdataadmin_users[".listAjax"] = false;

	$tdataadmin_users[".audit"] = false;

	$tdataadmin_users[".locking"] = false;


$pages = $tdataadmin_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadmin_users[".edit"] = true;
	$tdataadmin_users[".afterEditAction"] = 1;
	$tdataadmin_users[".closePopupAfterEdit"] = 1;
	$tdataadmin_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadmin_users[".add"] = true;
$tdataadmin_users[".afterAddAction"] = 1;
$tdataadmin_users[".closePopupAfterAdd"] = 1;
$tdataadmin_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadmin_users[".list"] = true;
}



$tdataadmin_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadmin_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadmin_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadmin_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadmin_users[".printFriendly"] = true;
}



$tdataadmin_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadmin_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadmin_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadmin_users[".isUseAjaxSuggest"] = true;





$tdataadmin_users[".ajaxCodeSnippetAdded"] = false;

$tdataadmin_users[".buttonsAdded"] = false;

$tdataadmin_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_users[".isUseTimeForSearch"] = false;


$tdataadmin_users[".badgeColor"] = "4682B4";


$tdataadmin_users[".allSearchFields"] = array();
$tdataadmin_users[".filterFields"] = array();
$tdataadmin_users[".requiredSearchFields"] = array();

$tdataadmin_users[".googleLikeFields"] = array();
$tdataadmin_users[".googleLikeFields"][] = "Id";
$tdataadmin_users[".googleLikeFields"][] = "Nombre";
$tdataadmin_users[".googleLikeFields"][] = "Perfil";
$tdataadmin_users[".googleLikeFields"][] = "Clave";
$tdataadmin_users[".googleLikeFields"][] = "apikey";



$tdataadmin_users[".tableType"] = "list";

$tdataadmin_users[".printerPageOrientation"] = 0;
$tdataadmin_users[".nPrinterPageScale"] = 100;

$tdataadmin_users[".nPrinterSplitRecords"] = 40;

$tdataadmin_users[".geocodingEnabled"] = false;










$tdataadmin_users[".pageSize"] = 20;

$tdataadmin_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataadmin_users[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_users[".orderindexes"] = array();


$tdataadmin_users[".sqlHead"] = "SELECT `Id`,  	`Nombre`,  	`Perfil`,  	`Clave`,  	`apikey`";
$tdataadmin_users[".sqlFrom"] = "FROM `usuarios`";
$tdataadmin_users[".sqlWhereExpr"] = "";
$tdataadmin_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_users[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_users[".highlightSearchResults"] = true;

$tableKeysadmin_users = array();
$tableKeysadmin_users[] = "Id";
$tdataadmin_users[".Keys"] = $tableKeysadmin_users;


$tdataadmin_users[".hideMobileList"] = array();




//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("admin_users","Id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id";

		$fdata["sourceSingle"] = "Id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Id`";

	
	
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


	$tdataadmin_users["Id"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "Id";
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("admin_users","Nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre";

		$fdata["sourceSingle"] = "Nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Nombre`";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataadmin_users["Nombre"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "Nombre";
//	Perfil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Perfil";
	$fdata["GoodName"] = "Perfil";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("admin_users","Perfil");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Perfil";

		$fdata["sourceSingle"] = "Perfil";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Perfil`";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataadmin_users["Perfil"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "Perfil";
//	Clave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Clave";
	$fdata["GoodName"] = "Clave";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("admin_users","Clave");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Clave";

		$fdata["sourceSingle"] = "Clave";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Clave`";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataadmin_users["Clave"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "Clave";
//	apikey
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "apikey";
	$fdata["GoodName"] = "apikey";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("admin_users","apikey");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "apikey";

		$fdata["sourceSingle"] = "apikey";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`apikey`";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdataadmin_users["apikey"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "apikey";


$tables_data["admin_users"]=&$tdataadmin_users;
$field_labels["admin_users"] = &$fieldLabelsadmin_users;
$fieldToolTips["admin_users"] = &$fieldToolTipsadmin_users;
$placeHolders["admin_users"] = &$placeHoldersadmin_users;
$page_titles["admin_users"] = &$pageTitlesadmin_users;


changeTextControlsToDate( "admin_users" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["admin_users"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["admin_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_admin_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Id`,  	`Nombre`,  	`Perfil`,  	`Clave`,  	`apikey`";
$proto0["m_strFrom"] = "FROM `usuarios`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "Id",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "admin_users"
));

$proto6["m_sql"] = "`Id`";
$proto6["m_srcTableName"] = "admin_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "admin_users"
));

$proto8["m_sql"] = "`Nombre`";
$proto8["m_srcTableName"] = "admin_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Perfil",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "admin_users"
));

$proto10["m_sql"] = "`Perfil`";
$proto10["m_srcTableName"] = "admin_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Clave",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "admin_users"
));

$proto12["m_sql"] = "`Clave`";
$proto12["m_srcTableName"] = "admin_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "apikey",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "admin_users"
));

$proto14["m_sql"] = "`apikey`";
$proto14["m_srcTableName"] = "admin_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "usuarios";
$proto17["m_srcTableName"] = "admin_users";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "Id";
$proto17["m_columns"][] = "Nombre";
$proto17["m_columns"][] = "Perfil";
$proto17["m_columns"][] = "Clave";
$proto17["m_columns"][] = "apikey";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "`usuarios`";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "admin_users";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="admin_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_users = createSqlQuery_admin_users();


	
		;

															

$tdataadmin_users[".sqlquery"] = $queryData_admin_users;



$tdataadmin_users[".hasEvents"] = false;

?>