<?php
	/**
	 * The abstract SpeciesGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Species subclass which
	 * extends this SpeciesGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Species class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Idspecies the value for intIdspecies (Read-Only PK)
	 * @property string $Name the value for strName (Not Null)
	 * @property string $Irishname the value for strIrishname 
	 * @property string $LatinName the value for strLatinName 
	 * @property string $Description the value for strDescription 
	 * @property Characteristic $_CharacteristicAsId the value for the private _objCharacteristicAsId (Read-Only) if set due to an expansion on the characteristic.species_idspecies reverse relationship
	 * @property Characteristic[] $_CharacteristicAsIdArray the value for the private _objCharacteristicAsIdArray (Read-Only) if set due to an ExpandAsArray on the characteristic.species_idspecies reverse relationship
	 * @property Tree $_TreeAsId the value for the private _objTreeAsId (Read-Only) if set due to an expansion on the tree.species_idspecies reverse relationship
	 * @property Tree[] $_TreeAsIdArray the value for the private _objTreeAsIdArray (Read-Only) if set due to an ExpandAsArray on the tree.species_idspecies reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class SpeciesGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column species.idspecies
		 * @var integer intIdspecies
		 */
		protected $intIdspecies;
		const IdspeciesDefault = null;


		/**
		 * Protected member variable that maps to the database column species.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 45;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column species.irishname
		 * @var string strIrishname
		 */
		protected $strIrishname;
		const IrishnameMaxLength = 45;
		const IrishnameDefault = null;


		/**
		 * Protected member variable that maps to the database column species.latin_name
		 * @var string strLatinName
		 */
		protected $strLatinName;
		const LatinNameMaxLength = 45;
		const LatinNameDefault = null;


		/**
		 * Protected member variable that maps to the database column species.description
		 * @var string strDescription
		 */
		protected $strDescription;
		const DescriptionMaxLength = 2000;
		const DescriptionDefault = null;


		/**
		 * Private member variable that stores a reference to a single CharacteristicAsId object
		 * (of type Characteristic), if this Species object was restored with
		 * an expansion on the characteristic association table.
		 * @var Characteristic _objCharacteristicAsId;
		 */
		private $_objCharacteristicAsId;

		/**
		 * Private member variable that stores a reference to an array of CharacteristicAsId objects
		 * (of type Characteristic[]), if this Species object was restored with
		 * an ExpandAsArray on the characteristic association table.
		 * @var Characteristic[] _objCharacteristicAsIdArray;
		 */
		private $_objCharacteristicAsIdArray = array();

		/**
		 * Private member variable that stores a reference to a single TreeAsId object
		 * (of type Tree), if this Species object was restored with
		 * an expansion on the tree association table.
		 * @var Tree _objTreeAsId;
		 */
		private $_objTreeAsId;

		/**
		 * Private member variable that stores a reference to an array of TreeAsId objects
		 * (of type Tree[]), if this Species object was restored with
		 * an ExpandAsArray on the tree association table.
		 * @var Tree[] _objTreeAsIdArray;
		 */
		private $_objTreeAsIdArray = array();

		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////





		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a Species from PK Info
		 * @param integer $intIdspecies
		 * @return Species
		 */
		public static function Load($intIdspecies) {
			// Use QuerySingle to Perform the Query
			return Species::QuerySingle(
				QQ::Equal(QQN::Species()->Idspecies, $intIdspecies)
			);
		}

		/**
		 * Load all Specieses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Species[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Species::QueryArray to perform the LoadAll query
			try {
				return Species::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Specieses
		 * @return int
		 */
		public static function CountAll() {
			// Call Species::QueryCount to perform the CountAll query
			return Species::QueryCount(QQ::All());
		}




		///////////////////////////////
		// QCODO QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Internally called method to assist with calling Qcodo Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = Species::GetDatabase();

			// Create/Build out the QueryBuilder object with Species-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'species');
			Species::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('species');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				try {
					$objConditions->UpdateQueryBuilder($objQueryBuilder);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if ($objOptionalClauses instanceof QQClause)
					$objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
				else if (is_array($objOptionalClauses))
					foreach ($objOptionalClauses as $objClause)
						$objClause->UpdateQueryBuilder($objQueryBuilder);
				else
					throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
			}

			// Get the SQL Statement
			$strQuery = $objQueryBuilder->GetStatement();

			// Prepare the Statement with the Query Parameters (if applicable)
			if ($mixParameterArray) {
				if (is_array($mixParameterArray)) {
					if (count($mixParameterArray))
						$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

					// Ensure that there are no other Unresolved Named Parameters
					if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
						throw new QCallerException('Unresolved named parameters in the query');
				} else
					throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
			}

			// Return the Objects
			return $strQuery;
		}

		/**
		 * Static Qcodo Query method to query for a single Species object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Species the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Species::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Species object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Species::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem) $objToReturn[] = $objItem;
				}

				if (count($objToReturn)) {
					// Since we only want the object to return, lets return the object and not the array.
					return $objToReturn[0];
				} else {
					return null;
				}
			} else {
				// No expands just return the first row
				$objDbRow = $objDbResult->GetNextRow();
				if (is_null($objDbRow)) return null;
				return Species::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Species objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Species[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Species::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Species::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcodo query method to issue a query and get a cursor to progressively fetch its results.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return QDatabaseResultBase the cursor resource instance
		 */
		public static function QueryCursor(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the query statement
			try {
				$strQuery = Species::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
		
			// Return the results cursor
			$objDbResult->QueryBuilder = $objQueryBuilder;
			return $objDbResult;
		}

		/**
		 * Static Qcodo Query method to query for a count of Species objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Species::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and return the row_count
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Figure out if the query is using GroupBy
			$blnGrouped = false;

			if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
				if ($objClause instanceof QQGroupBy) {
					$blnGrouped = true;
					break;
				}
			}

			if ($blnGrouped)
				// Groups in this query - return the count of Groups (which is the count of all rows)
				return $objDbResult->CountRows();
			else {
				// No Groups - return the sql-calculated count(*) value
				$strDbRow = $objDbResult->FetchRow();
				return QType::Cast($strDbRow[0], QType::Integer);
			}
		}

/*		public static function QueryArrayCached($strConditions, $mixParameterArray = null) {
			// Get the Database Object for this Class
			$objDatabase = Species::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'species_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Species-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Species::GetSelectFields($objQueryBuilder);
				Species::GetFromFields($objQueryBuilder);

				// Ensure the Passed-in Conditions is a string
				try {
					$strConditions = QType::Cast($strConditions, QType::String);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

				// Create the Conditions object, and apply it
				$objConditions = eval('return ' . $strConditions . ';');

				// Apply Any Conditions
				if ($objConditions)
					$objConditions->UpdateQueryBuilder($objQueryBuilder);

				// Get the SQL Statement
				$strQuery = $objQueryBuilder->GetStatement();

				// Save the SQL Statement in the Cache
				$objCache->SaveData($strQuery);
			}

			// Prepare the Statement with the Parameters
			if ($mixParameterArray)
				$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objDatabase->Query($strQuery);
			return Species::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Species
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'species';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'idspecies', $strAliasPrefix . 'idspecies');
			$objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			$objBuilder->AddSelectItem($strTableName, 'irishname', $strAliasPrefix . 'irishname');
			$objBuilder->AddSelectItem($strTableName, 'latin_name', $strAliasPrefix . 'latin_name');
			$objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Species from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Species::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Species
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idspecies';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intIdspecies == $objDbRow->GetColumn($strAliasName, 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'species__';


				$strAlias = $strAliasPrefix . 'characteristicasid__idcharacteristic';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objCharacteristicAsIdArray)) {
						$objPreviousChildItem = $objPreviousItem->_objCharacteristicAsIdArray[$intPreviousChildItemCount - 1];
						$objChildItem = Characteristic::InstantiateDbRow($objDbRow, $strAliasPrefix . 'characteristicasid__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objCharacteristicAsIdArray[] = $objChildItem;
					} else
						$objPreviousItem->_objCharacteristicAsIdArray[] = Characteristic::InstantiateDbRow($objDbRow, $strAliasPrefix . 'characteristicasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				$strAlias = $strAliasPrefix . 'treeasid__idtree';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objTreeAsIdArray)) {
						$objPreviousChildItem = $objPreviousItem->_objTreeAsIdArray[$intPreviousChildItemCount - 1];
						$objChildItem = Tree::InstantiateDbRow($objDbRow, $strAliasPrefix . 'treeasid__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objTreeAsIdArray[] = $objChildItem;
					} else
						$objPreviousItem->_objTreeAsIdArray[] = Tree::InstantiateDbRow($objDbRow, $strAliasPrefix . 'treeasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'species__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Species object
			$objToReturn = new Species();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'idspecies', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'idspecies'] : $strAliasPrefix . 'idspecies';
			$objToReturn->intIdspecies = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name'] : $strAliasPrefix . 'name';
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'irishname', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'irishname'] : $strAliasPrefix . 'irishname';
			$objToReturn->strIrishname = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'latin_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'latin_name'] : $strAliasPrefix . 'latin_name';
			$objToReturn->strLatinName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'description', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'description'] : $strAliasPrefix . 'description';
			$objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'VarChar');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'species__';




			// Check for CharacteristicAsId Virtual Binding
			$strAlias = $strAliasPrefix . 'characteristicasid__idcharacteristic';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objCharacteristicAsIdArray[] = Characteristic::InstantiateDbRow($objDbRow, $strAliasPrefix . 'characteristicasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCharacteristicAsId = Characteristic::InstantiateDbRow($objDbRow, $strAliasPrefix . 'characteristicasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for TreeAsId Virtual Binding
			$strAlias = $strAliasPrefix . 'treeasid__idtree';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objTreeAsIdArray[] = Tree::InstantiateDbRow($objDbRow, $strAliasPrefix . 'treeasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTreeAsId = Tree::InstantiateDbRow($objDbRow, $strAliasPrefix . 'treeasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Specieses from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Species[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
			$objToReturn = array();
			
			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objLastRowItem = null;
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Species::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Species::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Species object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Species next row resulting from the query
		 */
		public static function InstantiateCursor(QDatabaseResultBase $objDbResult) {
			// If blank resultset, then return empty result
			if (!$objDbResult) return null;

			// If empty resultset, then return empty result
			$objDbRow = $objDbResult->GetNextRow();
			if (!$objDbRow) return null;

			// We need the Column Aliases
			$strColumnAliasArray = $objDbResult->QueryBuilder->ColumnAliasArray;
			if (!$strColumnAliasArray) $strColumnAliasArray = array();

			// Pull Expansions (if applicable)
			$strExpandAsArrayNodes = $objDbResult->QueryBuilder->ExpandAsArrayNodes;

			// Load up the return result with a row and return it
			return Species::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Species object,
		 * by Idspecies Index(es)
		 * @param integer $intIdspecies
		 * @return Species
		*/
		public static function LoadByIdspecies($intIdspecies, $objOptionalClauses = null) {
			return Species::QuerySingle(
				QQ::Equal(QQN::Species()->Idspecies, $intIdspecies)
			, $objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD and JOURNALING
		//////////////////////////////////////

		/**
		 * Save this Species
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Species::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `species` (
							`name`,
							`irishname`,
							`latin_name`,
							`description`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strIrishname) . ',
							' . $objDatabase->SqlVariable($this->strLatinName) . ',
							' . $objDatabase->SqlVariable($this->strDescription) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdspecies = $objDatabase->InsertId('species', 'idspecies');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`species`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`irishname` = ' . $objDatabase->SqlVariable($this->strIrishname) . ',
							`latin_name` = ' . $objDatabase->SqlVariable($this->strLatinName) . ',
							`description` = ' . $objDatabase->SqlVariable($this->strDescription) . '
						WHERE
							`idspecies` = ' . $objDatabase->SqlVariable($this->intIdspecies) . '
					');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('UPDATE');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this Species
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdspecies)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Species with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Species::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`species`
				WHERE
					`idspecies` = ' . $objDatabase->SqlVariable($this->intIdspecies) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Specieses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Species::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`species`');
		}

		/**
		 * Truncate species table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Species::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `species`');
		}

		/**
		 * Reload this Species from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Species object.');

			// Reload the Object
			$objReloaded = Species::Load($this->intIdspecies);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->strIrishname = $objReloaded->strIrishname;
			$this->strLatinName = $objReloaded->strLatinName;
			$this->strDescription = $objReloaded->strDescription;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Species::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `species` (
					`idspecies`,
					`name`,
					`irishname`,
					`latin_name`,
					`description`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intIdspecies) . ',
					' . $objDatabase->SqlVariable($this->strName) . ',
					' . $objDatabase->SqlVariable($this->strIrishname) . ',
					' . $objDatabase->SqlVariable($this->strLatinName) . ',
					' . $objDatabase->SqlVariable($this->strDescription) . ',
					' . (($objDatabase->JournaledById) ? $objDatabase->JournaledById : 'NULL') . ',
					' . $objDatabase->SqlVariable($strJournalCommand) . ',
					NOW()
				);
			');
		}

		/**
		 * Gets the historical journal for an object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @param integer intIdspecies
		 * @return Species[]
		 */
		public static function GetJournalForId($intIdspecies) {
			$objDatabase = Species::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM species WHERE idspecies = ' .
				$objDatabase->SqlVariable($intIdspecies) . ' ORDER BY __sys_date');

			return Species::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Species[]
		 */
		public function GetJournal() {
			return Species::GetJournalForId($this->intIdspecies);
		}




		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Idspecies':
					// Gets the value for intIdspecies (Read-Only PK)
					// @return integer
					return $this->intIdspecies;

				case 'Name':
					// Gets the value for strName (Not Null)
					// @return string
					return $this->strName;

				case 'Irishname':
					// Gets the value for strIrishname 
					// @return string
					return $this->strIrishname;

				case 'LatinName':
					// Gets the value for strLatinName 
					// @return string
					return $this->strLatinName;

				case 'Description':
					// Gets the value for strDescription 
					// @return string
					return $this->strDescription;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_CharacteristicAsId':
					// Gets the value for the private _objCharacteristicAsId (Read-Only)
					// if set due to an expansion on the characteristic.species_idspecies reverse relationship
					// @return Characteristic
					return $this->_objCharacteristicAsId;

				case '_CharacteristicAsIdArray':
					// Gets the value for the private _objCharacteristicAsIdArray (Read-Only)
					// if set due to an ExpandAsArray on the characteristic.species_idspecies reverse relationship
					// @return Characteristic[]
					return (array) $this->_objCharacteristicAsIdArray;

				case '_TreeAsId':
					// Gets the value for the private _objTreeAsId (Read-Only)
					// if set due to an expansion on the tree.species_idspecies reverse relationship
					// @return Tree
					return $this->_objTreeAsId;

				case '_TreeAsIdArray':
					// Gets the value for the private _objTreeAsIdArray (Read-Only)
					// if set due to an ExpandAsArray on the tree.species_idspecies reverse relationship
					// @return Tree[]
					return (array) $this->_objTreeAsIdArray;


				case '__Restored':
					return $this->__blnRestored;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

				/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Name':
					// Sets the value for strName (Not Null)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Irishname':
					// Sets the value for strIrishname 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strIrishname = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LatinName':
					// Sets the value for strLatinName 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strLatinName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Description':
					// Sets the value for strDescription 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strDescription = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string
		 */
		public function GetVirtualAttribute($strName) {
			if (array_key_exists($strName, $this->__strVirtualAttributeArray))
				return $this->__strVirtualAttributeArray[$strName];
			return null;
		}



		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////

			
		
		// Related Objects' Methods for CharacteristicAsId
		//-------------------------------------------------------------------

		/**
		 * Gets all associated CharacteristicsAsId as an array of Characteristic objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Characteristic[]
		*/ 
		public function GetCharacteristicAsIdArray($objOptionalClauses = null) {
			if ((is_null($this->intIdspecies)))
				return array();

			try {
				return Characteristic::LoadArrayBySpeciesIdspecies($this->intIdspecies, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated CharacteristicsAsId
		 * @return int
		*/ 
		public function CountCharacteristicsAsId() {
			if ((is_null($this->intIdspecies)))
				return 0;

			return Characteristic::CountBySpeciesIdspecies($this->intIdspecies);
		}

		/**
		 * Associates a CharacteristicAsId
		 * @param Characteristic $objCharacteristic
		 * @return void
		*/ 
		public function AssociateCharacteristicAsId(Characteristic $objCharacteristic) {
			if ((is_null($this->intIdspecies)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCharacteristicAsId on this unsaved Species.');
			if ((is_null($objCharacteristic->Idcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCharacteristicAsId on this Species with an unsaved Characteristic.');

			// Get the Database Object for this Class
			$objDatabase = Species::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`characteristic`
				SET
					`species_idspecies` = ' . $objDatabase->SqlVariable($this->intIdspecies) . '
				WHERE
					`idcharacteristic` = ' . $objDatabase->SqlVariable($objCharacteristic->Idcharacteristic) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objCharacteristic->SpeciesIdspecies = $this->intIdspecies;
				$objCharacteristic->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a CharacteristicAsId
		 * @param Characteristic $objCharacteristic
		 * @return void
		*/ 
		public function UnassociateCharacteristicAsId(Characteristic $objCharacteristic) {
			if ((is_null($this->intIdspecies)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCharacteristicAsId on this unsaved Species.');
			if ((is_null($objCharacteristic->Idcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCharacteristicAsId on this Species with an unsaved Characteristic.');

			// Get the Database Object for this Class
			$objDatabase = Species::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`characteristic`
				SET
					`species_idspecies` = null
				WHERE
					`idcharacteristic` = ' . $objDatabase->SqlVariable($objCharacteristic->Idcharacteristic) . ' AND
					`species_idspecies` = ' . $objDatabase->SqlVariable($this->intIdspecies) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objCharacteristic->SpeciesIdspecies = null;
				$objCharacteristic->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all CharacteristicsAsId
		 * @return void
		*/ 
		public function UnassociateAllCharacteristicsAsId() {
			if ((is_null($this->intIdspecies)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCharacteristicAsId on this unsaved Species.');

			// Get the Database Object for this Class
			$objDatabase = Species::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Characteristic::LoadArrayBySpeciesIdspecies($this->intIdspecies) as $objCharacteristic) {
					$objCharacteristic->SpeciesIdspecies = null;
					$objCharacteristic->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`characteristic`
				SET
					`species_idspecies` = null
				WHERE
					`species_idspecies` = ' . $objDatabase->SqlVariable($this->intIdspecies) . '
			');
		}

		/**
		 * Deletes an associated CharacteristicAsId
		 * @param Characteristic $objCharacteristic
		 * @return void
		*/ 
		public function DeleteAssociatedCharacteristicAsId(Characteristic $objCharacteristic) {
			if ((is_null($this->intIdspecies)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCharacteristicAsId on this unsaved Species.');
			if ((is_null($objCharacteristic->Idcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCharacteristicAsId on this Species with an unsaved Characteristic.');

			// Get the Database Object for this Class
			$objDatabase = Species::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`characteristic`
				WHERE
					`idcharacteristic` = ' . $objDatabase->SqlVariable($objCharacteristic->Idcharacteristic) . ' AND
					`species_idspecies` = ' . $objDatabase->SqlVariable($this->intIdspecies) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objCharacteristic->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated CharacteristicsAsId
		 * @return void
		*/ 
		public function DeleteAllCharacteristicsAsId() {
			if ((is_null($this->intIdspecies)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCharacteristicAsId on this unsaved Species.');

			// Get the Database Object for this Class
			$objDatabase = Species::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Characteristic::LoadArrayBySpeciesIdspecies($this->intIdspecies) as $objCharacteristic) {
					$objCharacteristic->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`characteristic`
				WHERE
					`species_idspecies` = ' . $objDatabase->SqlVariable($this->intIdspecies) . '
			');
		}

			
		
		// Related Objects' Methods for TreeAsId
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TreesAsId as an array of Tree objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Tree[]
		*/ 
		public function GetTreeAsIdArray($objOptionalClauses = null) {
			if ((is_null($this->intIdspecies)))
				return array();

			try {
				return Tree::LoadArrayBySpeciesIdspecies($this->intIdspecies, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TreesAsId
		 * @return int
		*/ 
		public function CountTreesAsId() {
			if ((is_null($this->intIdspecies)))
				return 0;

			return Tree::CountBySpeciesIdspecies($this->intIdspecies);
		}

		/**
		 * Associates a TreeAsId
		 * @param Tree $objTree
		 * @return void
		*/ 
		public function AssociateTreeAsId(Tree $objTree) {
			if ((is_null($this->intIdspecies)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTreeAsId on this unsaved Species.');
			if ((is_null($objTree->Idtree)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTreeAsId on this Species with an unsaved Tree.');

			// Get the Database Object for this Class
			$objDatabase = Species::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`tree`
				SET
					`species_idspecies` = ' . $objDatabase->SqlVariable($this->intIdspecies) . '
				WHERE
					`idtree` = ' . $objDatabase->SqlVariable($objTree->Idtree) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objTree->SpeciesIdspecies = $this->intIdspecies;
				$objTree->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a TreeAsId
		 * @param Tree $objTree
		 * @return void
		*/ 
		public function UnassociateTreeAsId(Tree $objTree) {
			if ((is_null($this->intIdspecies)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTreeAsId on this unsaved Species.');
			if ((is_null($objTree->Idtree)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTreeAsId on this Species with an unsaved Tree.');

			// Get the Database Object for this Class
			$objDatabase = Species::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`tree`
				SET
					`species_idspecies` = null
				WHERE
					`idtree` = ' . $objDatabase->SqlVariable($objTree->Idtree) . ' AND
					`species_idspecies` = ' . $objDatabase->SqlVariable($this->intIdspecies) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objTree->SpeciesIdspecies = null;
				$objTree->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all TreesAsId
		 * @return void
		*/ 
		public function UnassociateAllTreesAsId() {
			if ((is_null($this->intIdspecies)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTreeAsId on this unsaved Species.');

			// Get the Database Object for this Class
			$objDatabase = Species::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Tree::LoadArrayBySpeciesIdspecies($this->intIdspecies) as $objTree) {
					$objTree->SpeciesIdspecies = null;
					$objTree->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`tree`
				SET
					`species_idspecies` = null
				WHERE
					`species_idspecies` = ' . $objDatabase->SqlVariable($this->intIdspecies) . '
			');
		}

		/**
		 * Deletes an associated TreeAsId
		 * @param Tree $objTree
		 * @return void
		*/ 
		public function DeleteAssociatedTreeAsId(Tree $objTree) {
			if ((is_null($this->intIdspecies)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTreeAsId on this unsaved Species.');
			if ((is_null($objTree->Idtree)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTreeAsId on this Species with an unsaved Tree.');

			// Get the Database Object for this Class
			$objDatabase = Species::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tree`
				WHERE
					`idtree` = ' . $objDatabase->SqlVariable($objTree->Idtree) . ' AND
					`species_idspecies` = ' . $objDatabase->SqlVariable($this->intIdspecies) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objTree->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated TreesAsId
		 * @return void
		*/ 
		public function DeleteAllTreesAsId() {
			if ((is_null($this->intIdspecies)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTreeAsId on this unsaved Species.');

			// Get the Database Object for this Class
			$objDatabase = Species::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Tree::LoadArrayBySpeciesIdspecies($this->intIdspecies) as $objTree) {
					$objTree->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tree`
				WHERE
					`species_idspecies` = ' . $objDatabase->SqlVariable($this->intIdspecies) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Species"><sequence>';
			$strToReturn .= '<element name="Idspecies" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="Irishname" type="xsd:string"/>';
			$strToReturn .= '<element name="LatinName" type="xsd:string"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Species', $strComplexTypeArray)) {
				$strComplexTypeArray['Species'] = Species::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Species::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Species();
			if (property_exists($objSoapObject, 'Idspecies'))
				$objToReturn->intIdspecies = $objSoapObject->Idspecies;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'Irishname'))
				$objToReturn->strIrishname = $objSoapObject->Irishname;
			if (property_exists($objSoapObject, 'LatinName'))
				$objToReturn->strLatinName = $objSoapObject->LatinName;
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Species::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Idspecies
	 * @property-read QQNode $Name
	 * @property-read QQNode $Irishname
	 * @property-read QQNode $LatinName
	 * @property-read QQNode $Description
	 * @property-read QQReverseReferenceNodeCharacteristic $CharacteristicAsId
	 * @property-read QQReverseReferenceNodeTree $TreeAsId
	 */
	class QQNodeSpecies extends QQNode {
		protected $strTableName = 'species';
		protected $strPrimaryKey = 'idspecies';
		protected $strClassName = 'Species';
		public function __get($strName) {
			switch ($strName) {
				case 'Idspecies':
					return new QQNode('idspecies', 'Idspecies', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Irishname':
					return new QQNode('irishname', 'Irishname', 'string', $this);
				case 'LatinName':
					return new QQNode('latin_name', 'LatinName', 'string', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'CharacteristicAsId':
					return new QQReverseReferenceNodeCharacteristic($this, 'characteristicasid', 'reverse_reference', 'species_idspecies');
				case 'TreeAsId':
					return new QQReverseReferenceNodeTree($this, 'treeasid', 'reverse_reference', 'species_idspecies');

				case '_PrimaryKeyNode':
					return new QQNode('idspecies', 'Idspecies', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}
	
	/**
	 * @property-read QQNode $Idspecies
	 * @property-read QQNode $Name
	 * @property-read QQNode $Irishname
	 * @property-read QQNode $LatinName
	 * @property-read QQNode $Description
	 * @property-read QQReverseReferenceNodeCharacteristic $CharacteristicAsId
	 * @property-read QQReverseReferenceNodeTree $TreeAsId
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeSpecies extends QQReverseReferenceNode {
		protected $strTableName = 'species';
		protected $strPrimaryKey = 'idspecies';
		protected $strClassName = 'Species';
		public function __get($strName) {
			switch ($strName) {
				case 'Idspecies':
					return new QQNode('idspecies', 'Idspecies', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Irishname':
					return new QQNode('irishname', 'Irishname', 'string', $this);
				case 'LatinName':
					return new QQNode('latin_name', 'LatinName', 'string', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'CharacteristicAsId':
					return new QQReverseReferenceNodeCharacteristic($this, 'characteristicasid', 'reverse_reference', 'species_idspecies');
				case 'TreeAsId':
					return new QQReverseReferenceNodeTree($this, 'treeasid', 'reverse_reference', 'species_idspecies');

				case '_PrimaryKeyNode':
					return new QQNode('idspecies', 'Idspecies', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>