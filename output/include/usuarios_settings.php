<?php
$tdatausuarios = array();
$tdatausuarios[".searchableFields"] = array();
$tdatausuarios[".ShortName"] = "usuarios";
$tdatausuarios[".OwnerID"] = "";
$tdatausuarios[".OriginalTable"] = "usuarios";


$tdatausuarios[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatausuarios[".originalPagesByType"] = $tdatausuarios[".pagesByType"];
$tdatausuarios[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatausuarios[".originalPages"] = $tdatausuarios[".pages"];
$tdatausuarios[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatausuarios[".originalDefaultPages"] = $tdatausuarios[".defaultPages"];

//	field labels
$fieldLabelsusuarios = array();
$fieldToolTipsusuarios = array();
$pageTitlesusuarios = array();
$placeHoldersusuarios = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsusuarios["English"] = array();
	$fieldToolTipsusuarios["English"] = array();
	$placeHoldersusuarios["English"] = array();
	$pageTitlesusuarios["English"] = array();
	$fieldLabelsusuarios["English"]["Id"] = "Id";
	$fieldToolTipsusuarios["English"]["Id"] = "";
	$placeHoldersusuarios["English"]["Id"] = "";
	$fieldLabelsusuarios["English"]["Nombre"] = "Nombre";
	$fieldToolTipsusuarios["English"]["Nombre"] = "";
	$placeHoldersusuarios["English"]["Nombre"] = "";
	$fieldLabelsusuarios["English"]["Perfil"] = "Perfil";
	$fieldToolTipsusuarios["English"]["Perfil"] = "";
	$placeHoldersusuarios["English"]["Perfil"] = "";
	$fieldLabelsusuarios["English"]["Clave"] = "Clave";
	$fieldToolTipsusuarios["English"]["Clave"] = "";
	$placeHoldersusuarios["English"]["Clave"] = "";
	$fieldLabelsusuarios["English"]["apikey"] = "Apikey";
	$fieldToolTipsusuarios["English"]["apikey"] = "";
	$placeHoldersusuarios["English"]["apikey"] = "";
	if (count($fieldToolTipsusuarios["English"]))
		$tdatausuarios[".isUseToolTips"] = true;
}


	$tdatausuarios[".NCSearch"] = true;



$tdatausuarios[".shortTableName"] = "usuarios";
$tdatausuarios[".nSecOptions"] = 0;

$tdatausuarios[".mainTableOwnerID"] = "";
$tdatausuarios[".entityType"] = 0;
$tdatausuarios[".connId"] = "isp_eisa_at_localhost";


$tdatausuarios[".strOriginalTableName"] = "usuarios";

	



$tdatausuarios[".showAddInPopup"] = false;

$tdatausuarios[".showEditInPopup"] = false;

$tdatausuarios[".showViewInPopup"] = false;

$tdatausuarios[".listAjax"] = false;
//	temporary
//$tdatausuarios[".listAjax"] = false;

	$tdatausuarios[".audit"] = false;

	$tdatausuarios[".locking"] = false;


$pages = $tdatausuarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausuarios[".edit"] = true;
	$tdatausuarios[".afterEditAction"] = 1;
	$tdatausuarios[".closePopupAfterEdit"] = 1;
	$tdatausuarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatausuarios[".add"] = true;
$tdatausuarios[".afterAddAction"] = 1;
$tdatausuarios[".closePopupAfterAdd"] = 1;
$tdatausuarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausuarios[".list"] = true;
}



$tdatausuarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausuarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausuarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausuarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausuarios[".printFriendly"] = true;
}



$tdatausuarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausuarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausuarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausuarios[".isUseAjaxSuggest"] = true;





$tdatausuarios[".ajaxCodeSnippetAdded"] = false;

$tdatausuarios[".buttonsAdded"] = false;

$tdatausuarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausuarios[".isUseTimeForSearch"] = false;


$tdatausuarios[".badgeColor"] = "CD5C5C";


$tdatausuarios[".allSearchFields"] = array();
$tdatausuarios[".filterFields"] = array();
$tdatausuarios[".requiredSearchFields"] = array();

$tdatausuarios[".googleLikeFields"] = array();
$tdatausuarios[".googleLikeFields"][] = "Id";
$tdatausuarios[".googleLikeFields"][] = "Nombre";
$tdatausuarios[".googleLikeFields"][] = "Perfil";
$tdatausuarios[".googleLikeFields"][] = "Clave";
$tdatausuarios[".googleLikeFields"][] = "apikey";



$tdatausuarios[".tableType"] = "list";

$tdatausuarios[".printerPageOrientation"] = 0;
$tdatausuarios[".nPrinterPageScale"] = 100;

$tdatausuarios[".nPrinterSplitRecords"] = 40;

$tdatausuarios[".geocodingEnabled"] = false;










$tdatausuarios[".pageSize"] = 20;

$tdatausuarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatausuarios[".strOrderBy"] = $tstrOrderBy;

$tdatausuarios[".orderindexes"] = array();


$tdatausuarios[".sqlHead"] = "SELECT `Id`,  	`Nombre`,  	`Perfil`,  	`Clave`,  	`apikey`";
$tdatausuarios[".sqlFrom"] = "FROM `usuarios`";
$tdatausuarios[".sqlWhereExpr"] = "";
$tdatausuarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausuarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausuarios[".arrGroupsPerPage"] = $arrGPP;

$tdatausuarios[".highlightSearchResults"] = true;

$tableKeysusuarios = array();
$tableKeysusuarios[] = "Id";
$tdatausuarios[".Keys"] = $tableKeysusuarios;


$tdatausuarios[".hideMobileList"] = array();




//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","Id");
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


	$tdatausuarios["Id"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "Id";
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","Nombre");
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


	$tdatausuarios["Nombre"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "Nombre";
//	Perfil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Perfil";
	$fdata["GoodName"] = "Perfil";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","Perfil");
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


	$tdatausuarios["Perfil"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "Perfil";
//	Clave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Clave";
	$fdata["GoodName"] = "Clave";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","Clave");
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
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


	$tdatausuarios["Clave"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "Clave";
//	apikey
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "apikey";
	$fdata["GoodName"] = "apikey";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","apikey");
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


	$tdatausuarios["apikey"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "apikey";


$tables_data["usuarios"]=&$tdatausuarios;
$field_labels["usuarios"] = &$fieldLabelsusuarios;
$fieldToolTips["usuarios"] = &$fieldToolTipsusuarios;
$placeHolders["usuarios"] = &$placeHoldersusuarios;
$page_titles["usuarios"] = &$pageTitlesusuarios;


changeTextControlsToDate( "usuarios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["usuarios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["usuarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_usuarios()
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
	"m_srcTableName" => "usuarios"
));

$proto6["m_sql"] = "`Id`";
$proto6["m_srcTableName"] = "usuarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto8["m_sql"] = "`Nombre`";
$proto8["m_srcTableName"] = "usuarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Perfil",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto10["m_sql"] = "`Perfil`";
$proto10["m_srcTableName"] = "usuarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Clave",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto12["m_sql"] = "`Clave`";
$proto12["m_srcTableName"] = "usuarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "apikey",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto14["m_sql"] = "`apikey`";
$proto14["m_srcTableName"] = "usuarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "usuarios";
$proto17["m_srcTableName"] = "usuarios";
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
$proto16["m_srcTableName"] = "usuarios";
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
$proto0["m_srcTableName"]="usuarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usuarios = createSqlQuery_usuarios();


	
		;

					

$tdatausuarios[".sqlquery"] = $queryData_usuarios;



$tdatausuarios[".hasEvents"] = false;

?>