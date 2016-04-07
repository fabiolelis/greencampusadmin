<?php
	/**
	 * The abstract SpeciesHasCharacteristicGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the SpeciesHasCharacteristic subclass which
	 * extends this SpeciesHasCharacteristicGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the SpeciesHasCharacteristic class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $SpeciesIdspecies the value for intSpeciesIdspecies (PK)
	 * @property integer $CharacteristicIdcharacteristic the value for intCharacteristicIdcharacteristic (PK)
	 * @property Species $SpeciesIdspeciesObject the value for the Species object referenced by intSpeciesIdspecies (PK)
	 * @property Characteristic $CharacteristicIdcharacteristicObject the value for the Characteristic object referenced by intCharacteristicIdcharacteristic (PK)
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class SpeciesHasCharacteristicGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK column species_has_characteristic.species_idspecies
		 * @var integer intSpeciesIdspecies
		 */
		protected $intSpeciesIdspecies;
		const SpeciesIdspeciesDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intSpeciesIdspecies;
		 */
		protected $__intSpeciesIdspecies;

		/**
		 * Protected member variable that maps to the database PK column species_has_characteristic.characteristic_idcharacteristic
		 * @var integer intCharacteristicIdcharacteristic
		 */
		protected $intCharacteristicIdcharacteristic;
		const CharacteristicIdcharacteristicDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intCharacteristicIdcharacteristic;
		 */
		protected $__intCharacteristicIdcharacteristic;

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

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column species_has_characteristic.species_idspecies.
		 *
		 * NOTE: Always use the SpeciesIdspeciesObject property getter to correctly retrieve this Species object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Species objSpeciesIdspeciesObject
		 */
		protected $objSpeciesIdspeciesObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column species_has_characteristic.characteristic_idcharacteristic.
		 *
		 * NOTE: Always use the CharacteristicIdcharacteristicObject property getter to correctly retrieve this Characteristic object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Characteristic objCharacteristicIdcharacteristicObject
		 */
		protected $objCharacteristicIdcharacteristicObject;





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
		 * Load a SpeciesHasCharacteristic from PK Info
		 * @param integer $intSpeciesIdspecies
		 * @param integer $intCharacteristicIdcharacteristic
		 * @return SpeciesHasCharacteristic
		 */
		public static function Load($intSpeciesIdspecies, $intCharacteristicIdcharacteristic) {
			// Use QuerySingle to Perform the Query
			return SpeciesHasCharacteristic::QuerySingle(
				QQ::AndCondition(
				QQ::Equal(QQN::SpeciesHasCharacteristic()->SpeciesIdspecies, $intSpeciesIdspecies),
				QQ::Equal(QQN::SpeciesHasCharacteristic()->CharacteristicIdcharacteristic, $intCharacteristicIdcharacteristic)
				)
			);
		}

		/**
		 * Load all SpeciesHasCharacteristics
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return SpeciesHasCharacteristic[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call SpeciesHasCharacteristic::QueryArray to perform the LoadAll query
			try {
				return SpeciesHasCharacteristic::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all SpeciesHasCharacteristics
		 * @return int
		 */
		public static function CountAll() {
			// Call SpeciesHasCharacteristic::QueryCount to perform the CountAll query
			return SpeciesHasCharacteristic::QueryCount(QQ::All());
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
			$objDatabase = SpeciesHasCharacteristic::GetDatabase();

			// Create/Build out the QueryBuilder object with SpeciesHasCharacteristic-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'species_has_characteristic');
			SpeciesHasCharacteristic::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('species_has_characteristic');

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
		 * Static Qcodo Query method to query for a single SpeciesHasCharacteristic object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return SpeciesHasCharacteristic the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = SpeciesHasCharacteristic::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new SpeciesHasCharacteristic object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = SpeciesHasCharacteristic::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return SpeciesHasCharacteristic::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of SpeciesHasCharacteristic objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return SpeciesHasCharacteristic[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = SpeciesHasCharacteristic::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return SpeciesHasCharacteristic::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = SpeciesHasCharacteristic::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of SpeciesHasCharacteristic objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = SpeciesHasCharacteristic::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = SpeciesHasCharacteristic::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'species_has_characteristic_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with SpeciesHasCharacteristic-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				SpeciesHasCharacteristic::GetSelectFields($objQueryBuilder);
				SpeciesHasCharacteristic::GetFromFields($objQueryBuilder);

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
			return SpeciesHasCharacteristic::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this SpeciesHasCharacteristic
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'species_has_characteristic';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'species_idspecies', $strAliasPrefix . 'species_idspecies');
			$objBuilder->AddSelectItem($strTableName, 'characteristic_idcharacteristic', $strAliasPrefix . 'characteristic_idcharacteristic');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a SpeciesHasCharacteristic from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this SpeciesHasCharacteristic::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return SpeciesHasCharacteristic
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;


			// Create a new instance of the SpeciesHasCharacteristic object
			$objToReturn = new SpeciesHasCharacteristic();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'species_idspecies', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'species_idspecies'] : $strAliasPrefix . 'species_idspecies';
			$objToReturn->intSpeciesIdspecies = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intSpeciesIdspecies = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'characteristic_idcharacteristic', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'characteristic_idcharacteristic'] : $strAliasPrefix . 'characteristic_idcharacteristic';
			$objToReturn->intCharacteristicIdcharacteristic = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intCharacteristicIdcharacteristic = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'species_has_characteristic__';

			// Check for SpeciesIdspeciesObject Early Binding
			$strAlias = $strAliasPrefix . 'species_idspecies__idspecies';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSpeciesIdspeciesObject = Species::InstantiateDbRow($objDbRow, $strAliasPrefix . 'species_idspecies__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CharacteristicIdcharacteristicObject Early Binding
			$strAlias = $strAliasPrefix . 'characteristic_idcharacteristic__idcharacteristic';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCharacteristicIdcharacteristicObject = Characteristic::InstantiateDbRow($objDbRow, $strAliasPrefix . 'characteristic_idcharacteristic__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of SpeciesHasCharacteristics from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return SpeciesHasCharacteristic[]
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
					$objItem = SpeciesHasCharacteristic::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = SpeciesHasCharacteristic::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single SpeciesHasCharacteristic object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return SpeciesHasCharacteristic next row resulting from the query
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
			return SpeciesHasCharacteristic::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single SpeciesHasCharacteristic object,
		 * by SpeciesIdspecies, CharacteristicIdcharacteristic Index(es)
		 * @param integer $intSpeciesIdspecies
		 * @param integer $intCharacteristicIdcharacteristic
		 * @return SpeciesHasCharacteristic
		*/
		public static function LoadBySpeciesIdspeciesCharacteristicIdcharacteristic($intSpeciesIdspecies, $intCharacteristicIdcharacteristic, $objOptionalClauses = null) {
			return SpeciesHasCharacteristic::QuerySingle(
				QQ::AndCondition(
				QQ::Equal(QQN::SpeciesHasCharacteristic()->SpeciesIdspecies, $intSpeciesIdspecies),
				QQ::Equal(QQN::SpeciesHasCharacteristic()->CharacteristicIdcharacteristic, $intCharacteristicIdcharacteristic)
				)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of SpeciesHasCharacteristic objects,
		 * by CharacteristicIdcharacteristic Index(es)
		 * @param integer $intCharacteristicIdcharacteristic
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return SpeciesHasCharacteristic[]
		*/
		public static function LoadArrayByCharacteristicIdcharacteristic($intCharacteristicIdcharacteristic, $objOptionalClauses = null) {
			// Call SpeciesHasCharacteristic::QueryArray to perform the LoadArrayByCharacteristicIdcharacteristic query
			try {
				return SpeciesHasCharacteristic::QueryArray(
					QQ::Equal(QQN::SpeciesHasCharacteristic()->CharacteristicIdcharacteristic, $intCharacteristicIdcharacteristic),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count SpeciesHasCharacteristics
		 * by CharacteristicIdcharacteristic Index(es)
		 * @param integer $intCharacteristicIdcharacteristic
		 * @return int
		*/
		public static function CountByCharacteristicIdcharacteristic($intCharacteristicIdcharacteristic, $objOptionalClauses = null) {
			// Call SpeciesHasCharacteristic::QueryCount to perform the CountByCharacteristicIdcharacteristic query
			return SpeciesHasCharacteristic::QueryCount(
				QQ::Equal(QQN::SpeciesHasCharacteristic()->CharacteristicIdcharacteristic, $intCharacteristicIdcharacteristic)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of SpeciesHasCharacteristic objects,
		 * by SpeciesIdspecies Index(es)
		 * @param integer $intSpeciesIdspecies
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return SpeciesHasCharacteristic[]
		*/
		public static function LoadArrayBySpeciesIdspecies($intSpeciesIdspecies, $objOptionalClauses = null) {
			// Call SpeciesHasCharacteristic::QueryArray to perform the LoadArrayBySpeciesIdspecies query
			try {
				return SpeciesHasCharacteristic::QueryArray(
					QQ::Equal(QQN::SpeciesHasCharacteristic()->SpeciesIdspecies, $intSpeciesIdspecies),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count SpeciesHasCharacteristics
		 * by SpeciesIdspecies Index(es)
		 * @param integer $intSpeciesIdspecies
		 * @return int
		*/
		public static function CountBySpeciesIdspecies($intSpeciesIdspecies, $objOptionalClauses = null) {
			// Call SpeciesHasCharacteristic::QueryCount to perform the CountBySpeciesIdspecies query
			return SpeciesHasCharacteristic::QueryCount(
				QQ::Equal(QQN::SpeciesHasCharacteristic()->SpeciesIdspecies, $intSpeciesIdspecies)
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
		 * Save this SpeciesHasCharacteristic
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = SpeciesHasCharacteristic::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `species_has_characteristic` (
							`species_idspecies`,
							`characteristic_idcharacteristic`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intSpeciesIdspecies) . ',
							' . $objDatabase->SqlVariable($this->intCharacteristicIdcharacteristic) . '
						)
					');



					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`species_has_characteristic`
						SET
							`species_idspecies` = ' . $objDatabase->SqlVariable($this->intSpeciesIdspecies) . ',
							`characteristic_idcharacteristic` = ' . $objDatabase->SqlVariable($this->intCharacteristicIdcharacteristic) . '
						WHERE
							`species_idspecies` = ' . $objDatabase->SqlVariable($this->__intSpeciesIdspecies) . ' AND
							`characteristic_idcharacteristic` = ' . $objDatabase->SqlVariable($this->__intCharacteristicIdcharacteristic) . '
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
			$this->__intSpeciesIdspecies = $this->intSpeciesIdspecies;
			$this->__intCharacteristicIdcharacteristic = $this->intCharacteristicIdcharacteristic;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this SpeciesHasCharacteristic
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intSpeciesIdspecies)) || (is_null($this->intCharacteristicIdcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this SpeciesHasCharacteristic with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = SpeciesHasCharacteristic::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`species_has_characteristic`
				WHERE
					`species_idspecies` = ' . $objDatabase->SqlVariable($this->intSpeciesIdspecies) . ' AND
					`characteristic_idcharacteristic` = ' . $objDatabase->SqlVariable($this->intCharacteristicIdcharacteristic) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all SpeciesHasCharacteristics
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = SpeciesHasCharacteristic::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`species_has_characteristic`');
		}

		/**
		 * Truncate species_has_characteristic table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = SpeciesHasCharacteristic::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `species_has_characteristic`');
		}

		/**
		 * Reload this SpeciesHasCharacteristic from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved SpeciesHasCharacteristic object.');

			// Reload the Object
			$objReloaded = SpeciesHasCharacteristic::Load($this->intSpeciesIdspecies, $this->intCharacteristicIdcharacteristic);

			// Update $this's local variables to match
			$this->SpeciesIdspecies = $objReloaded->SpeciesIdspecies;
			$this->__intSpeciesIdspecies = $this->intSpeciesIdspecies;
			$this->CharacteristicIdcharacteristic = $objReloaded->CharacteristicIdcharacteristic;
			$this->__intCharacteristicIdcharacteristic = $this->intCharacteristicIdcharacteristic;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = SpeciesHasCharacteristic::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `species_has_characteristic` (
					`species_idspecies`,
					`characteristic_idcharacteristic`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intSpeciesIdspecies) . ',
					' . $objDatabase->SqlVariable($this->intCharacteristicIdcharacteristic) . ',
					' . (($objDatabase->JournaledById) ? $objDatabase->JournaledById : 'NULL') . ',
					' . $objDatabase->SqlVariable($strJournalCommand) . ',
					NOW()
				);
			');
		}

		/**
		 * Gets the historical journal for an object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @param integer intSpeciesIdspecies
		 * @return SpeciesHasCharacteristic[]
		 */
		public static function GetJournalForId($intSpeciesIdspecies) {
			$objDatabase = SpeciesHasCharacteristic::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM species_has_characteristic WHERE species_idspecies = ' .
				$objDatabase->SqlVariable($intSpeciesIdspecies) . ' ORDER BY __sys_date');

			return SpeciesHasCharacteristic::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return SpeciesHasCharacteristic[]
		 */
		public function GetJournal() {
			return SpeciesHasCharacteristic::GetJournalForId($this->intSpeciesIdspecies);
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
				case 'SpeciesIdspecies':
					// Gets the value for intSpeciesIdspecies (PK)
					// @return integer
					return $this->intSpeciesIdspecies;

				case 'CharacteristicIdcharacteristic':
					// Gets the value for intCharacteristicIdcharacteristic (PK)
					// @return integer
					return $this->intCharacteristicIdcharacteristic;


				///////////////////
				// Member Objects
				///////////////////
				case 'SpeciesIdspeciesObject':
					// Gets the value for the Species object referenced by intSpeciesIdspecies (PK)
					// @return Species
					try {
						if ((!$this->objSpeciesIdspeciesObject) && (!is_null($this->intSpeciesIdspecies)))
							$this->objSpeciesIdspeciesObject = Species::Load($this->intSpeciesIdspecies);
						return $this->objSpeciesIdspeciesObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CharacteristicIdcharacteristicObject':
					// Gets the value for the Characteristic object referenced by intCharacteristicIdcharacteristic (PK)
					// @return Characteristic
					try {
						if ((!$this->objCharacteristicIdcharacteristicObject) && (!is_null($this->intCharacteristicIdcharacteristic)))
							$this->objCharacteristicIdcharacteristicObject = Characteristic::Load($this->intCharacteristicIdcharacteristic);
						return $this->objCharacteristicIdcharacteristicObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////


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
				case 'SpeciesIdspecies':
					// Sets the value for intSpeciesIdspecies (PK)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objSpeciesIdspeciesObject = null;
						return ($this->intSpeciesIdspecies = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CharacteristicIdcharacteristic':
					// Sets the value for intCharacteristicIdcharacteristic (PK)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objCharacteristicIdcharacteristicObject = null;
						return ($this->intCharacteristicIdcharacteristic = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'SpeciesIdspeciesObject':
					// Sets the value for the Species object referenced by intSpeciesIdspecies (PK)
					// @param Species $mixValue
					// @return Species
					if (is_null($mixValue)) {
						$this->intSpeciesIdspecies = null;
						$this->objSpeciesIdspeciesObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Species object
						try {
							$mixValue = QType::Cast($mixValue, 'Species');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Species object
						if (is_null($mixValue->Idspecies))
							throw new QCallerException('Unable to set an unsaved SpeciesIdspeciesObject for this SpeciesHasCharacteristic');

						// Update Local Member Variables
						$this->objSpeciesIdspeciesObject = $mixValue;
						$this->intSpeciesIdspecies = $mixValue->Idspecies;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CharacteristicIdcharacteristicObject':
					// Sets the value for the Characteristic object referenced by intCharacteristicIdcharacteristic (PK)
					// @param Characteristic $mixValue
					// @return Characteristic
					if (is_null($mixValue)) {
						$this->intCharacteristicIdcharacteristic = null;
						$this->objCharacteristicIdcharacteristicObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Characteristic object
						try {
							$mixValue = QType::Cast($mixValue, 'Characteristic');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Characteristic object
						if (is_null($mixValue->Idcharacteristic))
							throw new QCallerException('Unable to set an unsaved CharacteristicIdcharacteristicObject for this SpeciesHasCharacteristic');

						// Update Local Member Variables
						$this->objCharacteristicIdcharacteristicObject = $mixValue;
						$this->intCharacteristicIdcharacteristic = $mixValue->Idcharacteristic;

						// Return $mixValue
						return $mixValue;
					}
					break;

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





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="SpeciesHasCharacteristic"><sequence>';
			$strToReturn .= '<element name="SpeciesIdspeciesObject" type="xsd1:Species"/>';
			$strToReturn .= '<element name="CharacteristicIdcharacteristicObject" type="xsd1:Characteristic"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('SpeciesHasCharacteristic', $strComplexTypeArray)) {
				$strComplexTypeArray['SpeciesHasCharacteristic'] = SpeciesHasCharacteristic::GetSoapComplexTypeXml();
				Species::AlterSoapComplexTypeArray($strComplexTypeArray);
				Characteristic::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, SpeciesHasCharacteristic::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new SpeciesHasCharacteristic();
			if ((property_exists($objSoapObject, 'SpeciesIdspeciesObject')) &&
				($objSoapObject->SpeciesIdspeciesObject))
				$objToReturn->SpeciesIdspeciesObject = Species::GetObjectFromSoapObject($objSoapObject->SpeciesIdspeciesObject);
			if ((property_exists($objSoapObject, 'CharacteristicIdcharacteristicObject')) &&
				($objSoapObject->CharacteristicIdcharacteristicObject))
				$objToReturn->CharacteristicIdcharacteristicObject = Characteristic::GetObjectFromSoapObject($objSoapObject->CharacteristicIdcharacteristicObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, SpeciesHasCharacteristic::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objSpeciesIdspeciesObject)
				$objObject->objSpeciesIdspeciesObject = Species::GetSoapObjectFromObject($objObject->objSpeciesIdspeciesObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSpeciesIdspecies = null;
			if ($objObject->objCharacteristicIdcharacteristicObject)
				$objObject->objCharacteristicIdcharacteristicObject = Characteristic::GetSoapObjectFromObject($objObject->objCharacteristicIdcharacteristicObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCharacteristicIdcharacteristic = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $SpeciesIdspecies
	 * @property-read QQNodeSpecies $SpeciesIdspeciesObject
	 * @property-read QQNode $CharacteristicIdcharacteristic
	 * @property-read QQNodeCharacteristic $CharacteristicIdcharacteristicObject
	 */
	class QQNodeSpeciesHasCharacteristic extends QQNode {
		protected $strTableName = 'species_has_characteristic';
		protected $strPrimaryKey = 'species_idspecies';
		protected $strClassName = 'SpeciesHasCharacteristic';
		public function __get($strName) {
			switch ($strName) {
				case 'SpeciesIdspecies':
					return new QQNode('species_idspecies', 'SpeciesIdspecies', 'integer', $this);
				case 'SpeciesIdspeciesObject':
					return new QQNodeSpecies('species_idspecies', 'SpeciesIdspeciesObject', 'integer', $this);
				case 'CharacteristicIdcharacteristic':
					return new QQNode('characteristic_idcharacteristic', 'CharacteristicIdcharacteristic', 'integer', $this);
				case 'CharacteristicIdcharacteristicObject':
					return new QQNodeCharacteristic('characteristic_idcharacteristic', 'CharacteristicIdcharacteristicObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNodeSpecies('species_idspecies', 'SpeciesIdspecies', 'integer', $this);
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
	 * @property-read QQNode $SpeciesIdspecies
	 * @property-read QQNodeSpecies $SpeciesIdspeciesObject
	 * @property-read QQNode $CharacteristicIdcharacteristic
	 * @property-read QQNodeCharacteristic $CharacteristicIdcharacteristicObject
	 * @property-read QQNodeSpecies $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeSpeciesHasCharacteristic extends QQReverseReferenceNode {
		protected $strTableName = 'species_has_characteristic';
		protected $strPrimaryKey = 'species_idspecies';
		protected $strClassName = 'SpeciesHasCharacteristic';
		public function __get($strName) {
			switch ($strName) {
				case 'SpeciesIdspecies':
					return new QQNode('species_idspecies', 'SpeciesIdspecies', 'integer', $this);
				case 'SpeciesIdspeciesObject':
					return new QQNodeSpecies('species_idspecies', 'SpeciesIdspeciesObject', 'integer', $this);
				case 'CharacteristicIdcharacteristic':
					return new QQNode('characteristic_idcharacteristic', 'CharacteristicIdcharacteristic', 'integer', $this);
				case 'CharacteristicIdcharacteristicObject':
					return new QQNodeCharacteristic('characteristic_idcharacteristic', 'CharacteristicIdcharacteristicObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNodeSpecies('species_idspecies', 'SpeciesIdspecies', 'integer', $this);
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