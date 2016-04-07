<?php
	/**
	 * The abstract CharacteristicGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Characteristic subclass which
	 * extends this CharacteristicGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Characteristic class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Idcharacteristic the value for intIdcharacteristic (Read-Only PK)
	 * @property string $Title the value for strTitle 
	 * @property string $Description the value for strDescription 
	 * @property string $PicturesPath the value for strPicturesPath 
	 * @property integer $CharacteristicIdcharacteristic the value for intCharacteristicIdcharacteristic 
	 * @property Characteristic $CharacteristicIdcharacteristicObject the value for the Characteristic object referenced by intCharacteristicIdcharacteristic 
	 * @property Characteristic $_CharacteristicAsId the value for the private _objCharacteristicAsId (Read-Only) if set due to an expansion on the characteristic.characteristic_idcharacteristic reverse relationship
	 * @property Characteristic[] $_CharacteristicAsIdArray the value for the private _objCharacteristicAsIdArray (Read-Only) if set due to an ExpandAsArray on the characteristic.characteristic_idcharacteristic reverse relationship
	 * @property SpeciesHasCharacteristic $_SpeciesHasCharacteristicAsId the value for the private _objSpeciesHasCharacteristicAsId (Read-Only) if set due to an expansion on the species_has_characteristic.characteristic_idcharacteristic reverse relationship
	 * @property SpeciesHasCharacteristic[] $_SpeciesHasCharacteristicAsIdArray the value for the private _objSpeciesHasCharacteristicAsIdArray (Read-Only) if set due to an ExpandAsArray on the species_has_characteristic.characteristic_idcharacteristic reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class CharacteristicGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column characteristic.idcharacteristic
		 * @var integer intIdcharacteristic
		 */
		protected $intIdcharacteristic;
		const IdcharacteristicDefault = null;


		/**
		 * Protected member variable that maps to the database column characteristic.title
		 * @var string strTitle
		 */
		protected $strTitle;
		const TitleMaxLength = 45;
		const TitleDefault = null;


		/**
		 * Protected member variable that maps to the database column characteristic.description
		 * @var string strDescription
		 */
		protected $strDescription;
		const DescriptionMaxLength = 45;
		const DescriptionDefault = null;


		/**
		 * Protected member variable that maps to the database column characteristic.pictures_path
		 * @var string strPicturesPath
		 */
		protected $strPicturesPath;
		const PicturesPathMaxLength = 45;
		const PicturesPathDefault = null;


		/**
		 * Protected member variable that maps to the database column characteristic.characteristic_idcharacteristic
		 * @var integer intCharacteristicIdcharacteristic
		 */
		protected $intCharacteristicIdcharacteristic;
		const CharacteristicIdcharacteristicDefault = null;


		/**
		 * Private member variable that stores a reference to a single CharacteristicAsId object
		 * (of type Characteristic), if this Characteristic object was restored with
		 * an expansion on the characteristic association table.
		 * @var Characteristic _objCharacteristicAsId;
		 */
		private $_objCharacteristicAsId;

		/**
		 * Private member variable that stores a reference to an array of CharacteristicAsId objects
		 * (of type Characteristic[]), if this Characteristic object was restored with
		 * an ExpandAsArray on the characteristic association table.
		 * @var Characteristic[] _objCharacteristicAsIdArray;
		 */
		private $_objCharacteristicAsIdArray = array();

		/**
		 * Private member variable that stores a reference to a single SpeciesHasCharacteristicAsId object
		 * (of type SpeciesHasCharacteristic), if this Characteristic object was restored with
		 * an expansion on the species_has_characteristic association table.
		 * @var SpeciesHasCharacteristic _objSpeciesHasCharacteristicAsId;
		 */
		private $_objSpeciesHasCharacteristicAsId;

		/**
		 * Private member variable that stores a reference to an array of SpeciesHasCharacteristicAsId objects
		 * (of type SpeciesHasCharacteristic[]), if this Characteristic object was restored with
		 * an ExpandAsArray on the species_has_characteristic association table.
		 * @var SpeciesHasCharacteristic[] _objSpeciesHasCharacteristicAsIdArray;
		 */
		private $_objSpeciesHasCharacteristicAsIdArray = array();

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
		 * in the database column characteristic.characteristic_idcharacteristic.
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
		 * Load a Characteristic from PK Info
		 * @param integer $intIdcharacteristic
		 * @return Characteristic
		 */
		public static function Load($intIdcharacteristic) {
			// Use QuerySingle to Perform the Query
			return Characteristic::QuerySingle(
				QQ::Equal(QQN::Characteristic()->Idcharacteristic, $intIdcharacteristic)
			);
		}

		/**
		 * Load all Characteristics
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Characteristic[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Characteristic::QueryArray to perform the LoadAll query
			try {
				return Characteristic::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Characteristics
		 * @return int
		 */
		public static function CountAll() {
			// Call Characteristic::QueryCount to perform the CountAll query
			return Characteristic::QueryCount(QQ::All());
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
			$objDatabase = Characteristic::GetDatabase();

			// Create/Build out the QueryBuilder object with Characteristic-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'characteristic');
			Characteristic::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('characteristic');

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
		 * Static Qcodo Query method to query for a single Characteristic object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Characteristic the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Characteristic::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Characteristic object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Characteristic::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Characteristic::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Characteristic objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Characteristic[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Characteristic::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Characteristic::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Characteristic::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Characteristic objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Characteristic::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Characteristic::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'characteristic_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Characteristic-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Characteristic::GetSelectFields($objQueryBuilder);
				Characteristic::GetFromFields($objQueryBuilder);

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
			return Characteristic::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Characteristic
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'characteristic';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'idcharacteristic', $strAliasPrefix . 'idcharacteristic');
			$objBuilder->AddSelectItem($strTableName, 'title', $strAliasPrefix . 'title');
			$objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
			$objBuilder->AddSelectItem($strTableName, 'pictures_path', $strAliasPrefix . 'pictures_path');
			$objBuilder->AddSelectItem($strTableName, 'characteristic_idcharacteristic', $strAliasPrefix . 'characteristic_idcharacteristic');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Characteristic from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Characteristic::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Characteristic
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idcharacteristic';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intIdcharacteristic == $objDbRow->GetColumn($strAliasName, 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'characteristic__';


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

				$strAlias = $strAliasPrefix . 'specieshascharacteristicasid__species_idspecies';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objSpeciesHasCharacteristicAsIdArray)) {
						$objPreviousChildItem = $objPreviousItem->_objSpeciesHasCharacteristicAsIdArray[$intPreviousChildItemCount - 1];
						$objChildItem = SpeciesHasCharacteristic::InstantiateDbRow($objDbRow, $strAliasPrefix . 'specieshascharacteristicasid__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objSpeciesHasCharacteristicAsIdArray[] = $objChildItem;
					} else
						$objPreviousItem->_objSpeciesHasCharacteristicAsIdArray[] = SpeciesHasCharacteristic::InstantiateDbRow($objDbRow, $strAliasPrefix . 'specieshascharacteristicasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'characteristic__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Characteristic object
			$objToReturn = new Characteristic();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'idcharacteristic', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'idcharacteristic'] : $strAliasPrefix . 'idcharacteristic';
			$objToReturn->intIdcharacteristic = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'title', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'title'] : $strAliasPrefix . 'title';
			$objToReturn->strTitle = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'description', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'description'] : $strAliasPrefix . 'description';
			$objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'pictures_path', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'pictures_path'] : $strAliasPrefix . 'pictures_path';
			$objToReturn->strPicturesPath = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'characteristic_idcharacteristic', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'characteristic_idcharacteristic'] : $strAliasPrefix . 'characteristic_idcharacteristic';
			$objToReturn->intCharacteristicIdcharacteristic = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'characteristic__';

			// Check for CharacteristicIdcharacteristicObject Early Binding
			$strAlias = $strAliasPrefix . 'characteristic_idcharacteristic__idcharacteristic';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCharacteristicIdcharacteristicObject = Characteristic::InstantiateDbRow($objDbRow, $strAliasPrefix . 'characteristic_idcharacteristic__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for CharacteristicAsId Virtual Binding
			$strAlias = $strAliasPrefix . 'characteristicasid__idcharacteristic';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objCharacteristicAsIdArray[] = Characteristic::InstantiateDbRow($objDbRow, $strAliasPrefix . 'characteristicasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCharacteristicAsId = Characteristic::InstantiateDbRow($objDbRow, $strAliasPrefix . 'characteristicasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for SpeciesHasCharacteristicAsId Virtual Binding
			$strAlias = $strAliasPrefix . 'specieshascharacteristicasid__species_idspecies';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objSpeciesHasCharacteristicAsIdArray[] = SpeciesHasCharacteristic::InstantiateDbRow($objDbRow, $strAliasPrefix . 'specieshascharacteristicasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objSpeciesHasCharacteristicAsId = SpeciesHasCharacteristic::InstantiateDbRow($objDbRow, $strAliasPrefix . 'specieshascharacteristicasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Characteristics from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Characteristic[]
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
					$objItem = Characteristic::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Characteristic::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Characteristic object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Characteristic next row resulting from the query
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
			return Characteristic::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Characteristic object,
		 * by Idcharacteristic Index(es)
		 * @param integer $intIdcharacteristic
		 * @return Characteristic
		*/
		public static function LoadByIdcharacteristic($intIdcharacteristic, $objOptionalClauses = null) {
			return Characteristic::QuerySingle(
				QQ::Equal(QQN::Characteristic()->Idcharacteristic, $intIdcharacteristic)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Characteristic objects,
		 * by CharacteristicIdcharacteristic Index(es)
		 * @param integer $intCharacteristicIdcharacteristic
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Characteristic[]
		*/
		public static function LoadArrayByCharacteristicIdcharacteristic($intCharacteristicIdcharacteristic, $objOptionalClauses = null) {
			// Call Characteristic::QueryArray to perform the LoadArrayByCharacteristicIdcharacteristic query
			try {
				return Characteristic::QueryArray(
					QQ::Equal(QQN::Characteristic()->CharacteristicIdcharacteristic, $intCharacteristicIdcharacteristic),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Characteristics
		 * by CharacteristicIdcharacteristic Index(es)
		 * @param integer $intCharacteristicIdcharacteristic
		 * @return int
		*/
		public static function CountByCharacteristicIdcharacteristic($intCharacteristicIdcharacteristic, $objOptionalClauses = null) {
			// Call Characteristic::QueryCount to perform the CountByCharacteristicIdcharacteristic query
			return Characteristic::QueryCount(
				QQ::Equal(QQN::Characteristic()->CharacteristicIdcharacteristic, $intCharacteristicIdcharacteristic)
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
		 * Save this Characteristic
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Characteristic::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `characteristic` (
							`title`,
							`description`,
							`pictures_path`,
							`characteristic_idcharacteristic`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strTitle) . ',
							' . $objDatabase->SqlVariable($this->strDescription) . ',
							' . $objDatabase->SqlVariable($this->strPicturesPath) . ',
							' . $objDatabase->SqlVariable($this->intCharacteristicIdcharacteristic) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdcharacteristic = $objDatabase->InsertId('characteristic', 'idcharacteristic');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`characteristic`
						SET
							`title` = ' . $objDatabase->SqlVariable($this->strTitle) . ',
							`description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
							`pictures_path` = ' . $objDatabase->SqlVariable($this->strPicturesPath) . ',
							`characteristic_idcharacteristic` = ' . $objDatabase->SqlVariable($this->intCharacteristicIdcharacteristic) . '
						WHERE
							`idcharacteristic` = ' . $objDatabase->SqlVariable($this->intIdcharacteristic) . '
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
		 * Delete this Characteristic
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Characteristic with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Characteristic::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`characteristic`
				WHERE
					`idcharacteristic` = ' . $objDatabase->SqlVariable($this->intIdcharacteristic) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Characteristics
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Characteristic::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`characteristic`');
		}

		/**
		 * Truncate characteristic table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Characteristic::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `characteristic`');
		}

		/**
		 * Reload this Characteristic from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Characteristic object.');

			// Reload the Object
			$objReloaded = Characteristic::Load($this->intIdcharacteristic);

			// Update $this's local variables to match
			$this->strTitle = $objReloaded->strTitle;
			$this->strDescription = $objReloaded->strDescription;
			$this->strPicturesPath = $objReloaded->strPicturesPath;
			$this->CharacteristicIdcharacteristic = $objReloaded->CharacteristicIdcharacteristic;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Characteristic::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `characteristic` (
					`idcharacteristic`,
					`title`,
					`description`,
					`pictures_path`,
					`characteristic_idcharacteristic`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intIdcharacteristic) . ',
					' . $objDatabase->SqlVariable($this->strTitle) . ',
					' . $objDatabase->SqlVariable($this->strDescription) . ',
					' . $objDatabase->SqlVariable($this->strPicturesPath) . ',
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
		 * @param integer intIdcharacteristic
		 * @return Characteristic[]
		 */
		public static function GetJournalForId($intIdcharacteristic) {
			$objDatabase = Characteristic::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM characteristic WHERE idcharacteristic = ' .
				$objDatabase->SqlVariable($intIdcharacteristic) . ' ORDER BY __sys_date');

			return Characteristic::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Characteristic[]
		 */
		public function GetJournal() {
			return Characteristic::GetJournalForId($this->intIdcharacteristic);
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
				case 'Idcharacteristic':
					// Gets the value for intIdcharacteristic (Read-Only PK)
					// @return integer
					return $this->intIdcharacteristic;

				case 'Title':
					// Gets the value for strTitle 
					// @return string
					return $this->strTitle;

				case 'Description':
					// Gets the value for strDescription 
					// @return string
					return $this->strDescription;

				case 'PicturesPath':
					// Gets the value for strPicturesPath 
					// @return string
					return $this->strPicturesPath;

				case 'CharacteristicIdcharacteristic':
					// Gets the value for intCharacteristicIdcharacteristic 
					// @return integer
					return $this->intCharacteristicIdcharacteristic;


				///////////////////
				// Member Objects
				///////////////////
				case 'CharacteristicIdcharacteristicObject':
					// Gets the value for the Characteristic object referenced by intCharacteristicIdcharacteristic 
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

				case '_CharacteristicAsId':
					// Gets the value for the private _objCharacteristicAsId (Read-Only)
					// if set due to an expansion on the characteristic.characteristic_idcharacteristic reverse relationship
					// @return Characteristic
					return $this->_objCharacteristicAsId;

				case '_CharacteristicAsIdArray':
					// Gets the value for the private _objCharacteristicAsIdArray (Read-Only)
					// if set due to an ExpandAsArray on the characteristic.characteristic_idcharacteristic reverse relationship
					// @return Characteristic[]
					return (array) $this->_objCharacteristicAsIdArray;

				case '_SpeciesHasCharacteristicAsId':
					// Gets the value for the private _objSpeciesHasCharacteristicAsId (Read-Only)
					// if set due to an expansion on the species_has_characteristic.characteristic_idcharacteristic reverse relationship
					// @return SpeciesHasCharacteristic
					return $this->_objSpeciesHasCharacteristicAsId;

				case '_SpeciesHasCharacteristicAsIdArray':
					// Gets the value for the private _objSpeciesHasCharacteristicAsIdArray (Read-Only)
					// if set due to an ExpandAsArray on the species_has_characteristic.characteristic_idcharacteristic reverse relationship
					// @return SpeciesHasCharacteristic[]
					return (array) $this->_objSpeciesHasCharacteristicAsIdArray;


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
				case 'Title':
					// Sets the value for strTitle 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strTitle = QType::Cast($mixValue, QType::String));
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

				case 'PicturesPath':
					// Sets the value for strPicturesPath 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strPicturesPath = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CharacteristicIdcharacteristic':
					// Sets the value for intCharacteristicIdcharacteristic 
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
				case 'CharacteristicIdcharacteristicObject':
					// Sets the value for the Characteristic object referenced by intCharacteristicIdcharacteristic 
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
							throw new QCallerException('Unable to set an unsaved CharacteristicIdcharacteristicObject for this Characteristic');

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

			
		
		// Related Objects' Methods for CharacteristicAsId
		//-------------------------------------------------------------------

		/**
		 * Gets all associated CharacteristicsAsId as an array of Characteristic objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Characteristic[]
		*/ 
		public function GetCharacteristicAsIdArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcharacteristic)))
				return array();

			try {
				return Characteristic::LoadArrayByCharacteristicIdcharacteristic($this->intIdcharacteristic, $objOptionalClauses);
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
			if ((is_null($this->intIdcharacteristic)))
				return 0;

			return Characteristic::CountByCharacteristicIdcharacteristic($this->intIdcharacteristic);
		}

		/**
		 * Associates a CharacteristicAsId
		 * @param Characteristic $objCharacteristic
		 * @return void
		*/ 
		public function AssociateCharacteristicAsId(Characteristic $objCharacteristic) {
			if ((is_null($this->intIdcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCharacteristicAsId on this unsaved Characteristic.');
			if ((is_null($objCharacteristic->Idcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCharacteristicAsId on this Characteristic with an unsaved Characteristic.');

			// Get the Database Object for this Class
			$objDatabase = Characteristic::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`characteristic`
				SET
					`characteristic_idcharacteristic` = ' . $objDatabase->SqlVariable($this->intIdcharacteristic) . '
				WHERE
					`idcharacteristic` = ' . $objDatabase->SqlVariable($objCharacteristic->Idcharacteristic) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objCharacteristic->CharacteristicIdcharacteristic = $this->intIdcharacteristic;
				$objCharacteristic->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a CharacteristicAsId
		 * @param Characteristic $objCharacteristic
		 * @return void
		*/ 
		public function UnassociateCharacteristicAsId(Characteristic $objCharacteristic) {
			if ((is_null($this->intIdcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCharacteristicAsId on this unsaved Characteristic.');
			if ((is_null($objCharacteristic->Idcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCharacteristicAsId on this Characteristic with an unsaved Characteristic.');

			// Get the Database Object for this Class
			$objDatabase = Characteristic::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`characteristic`
				SET
					`characteristic_idcharacteristic` = null
				WHERE
					`idcharacteristic` = ' . $objDatabase->SqlVariable($objCharacteristic->Idcharacteristic) . ' AND
					`characteristic_idcharacteristic` = ' . $objDatabase->SqlVariable($this->intIdcharacteristic) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objCharacteristic->CharacteristicIdcharacteristic = null;
				$objCharacteristic->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all CharacteristicsAsId
		 * @return void
		*/ 
		public function UnassociateAllCharacteristicsAsId() {
			if ((is_null($this->intIdcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCharacteristicAsId on this unsaved Characteristic.');

			// Get the Database Object for this Class
			$objDatabase = Characteristic::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Characteristic::LoadArrayByCharacteristicIdcharacteristic($this->intIdcharacteristic) as $objCharacteristic) {
					$objCharacteristic->CharacteristicIdcharacteristic = null;
					$objCharacteristic->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`characteristic`
				SET
					`characteristic_idcharacteristic` = null
				WHERE
					`characteristic_idcharacteristic` = ' . $objDatabase->SqlVariable($this->intIdcharacteristic) . '
			');
		}

		/**
		 * Deletes an associated CharacteristicAsId
		 * @param Characteristic $objCharacteristic
		 * @return void
		*/ 
		public function DeleteAssociatedCharacteristicAsId(Characteristic $objCharacteristic) {
			if ((is_null($this->intIdcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCharacteristicAsId on this unsaved Characteristic.');
			if ((is_null($objCharacteristic->Idcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCharacteristicAsId on this Characteristic with an unsaved Characteristic.');

			// Get the Database Object for this Class
			$objDatabase = Characteristic::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`characteristic`
				WHERE
					`idcharacteristic` = ' . $objDatabase->SqlVariable($objCharacteristic->Idcharacteristic) . ' AND
					`characteristic_idcharacteristic` = ' . $objDatabase->SqlVariable($this->intIdcharacteristic) . '
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
			if ((is_null($this->intIdcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCharacteristicAsId on this unsaved Characteristic.');

			// Get the Database Object for this Class
			$objDatabase = Characteristic::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Characteristic::LoadArrayByCharacteristicIdcharacteristic($this->intIdcharacteristic) as $objCharacteristic) {
					$objCharacteristic->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`characteristic`
				WHERE
					`characteristic_idcharacteristic` = ' . $objDatabase->SqlVariable($this->intIdcharacteristic) . '
			');
		}

			
		
		// Related Objects' Methods for SpeciesHasCharacteristicAsId
		//-------------------------------------------------------------------

		/**
		 * Gets all associated SpeciesHasCharacteristicsAsId as an array of SpeciesHasCharacteristic objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return SpeciesHasCharacteristic[]
		*/ 
		public function GetSpeciesHasCharacteristicAsIdArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcharacteristic)))
				return array();

			try {
				return SpeciesHasCharacteristic::LoadArrayByCharacteristicIdcharacteristic($this->intIdcharacteristic, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated SpeciesHasCharacteristicsAsId
		 * @return int
		*/ 
		public function CountSpeciesHasCharacteristicsAsId() {
			if ((is_null($this->intIdcharacteristic)))
				return 0;

			return SpeciesHasCharacteristic::CountByCharacteristicIdcharacteristic($this->intIdcharacteristic);
		}

		/**
		 * Associates a SpeciesHasCharacteristicAsId
		 * @param SpeciesHasCharacteristic $objSpeciesHasCharacteristic
		 * @return void
		*/ 
		public function AssociateSpeciesHasCharacteristicAsId(SpeciesHasCharacteristic $objSpeciesHasCharacteristic) {
			if ((is_null($this->intIdcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSpeciesHasCharacteristicAsId on this unsaved Characteristic.');
			if ((is_null($objSpeciesHasCharacteristic->SpeciesIdspecies)) || (is_null($objSpeciesHasCharacteristic->CharacteristicIdcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSpeciesHasCharacteristicAsId on this Characteristic with an unsaved SpeciesHasCharacteristic.');

			// Get the Database Object for this Class
			$objDatabase = Characteristic::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`species_has_characteristic`
				SET
					`characteristic_idcharacteristic` = ' . $objDatabase->SqlVariable($this->intIdcharacteristic) . '
				WHERE
					`species_idspecies` = ' . $objDatabase->SqlVariable($objSpeciesHasCharacteristic->SpeciesIdspecies) . ' AND
					`characteristic_idcharacteristic` = ' . $objDatabase->SqlVariable($objSpeciesHasCharacteristic->CharacteristicIdcharacteristic) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objSpeciesHasCharacteristic->CharacteristicIdcharacteristic = $this->intIdcharacteristic;
				$objSpeciesHasCharacteristic->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a SpeciesHasCharacteristicAsId
		 * @param SpeciesHasCharacteristic $objSpeciesHasCharacteristic
		 * @return void
		*/ 
		public function UnassociateSpeciesHasCharacteristicAsId(SpeciesHasCharacteristic $objSpeciesHasCharacteristic) {
			if ((is_null($this->intIdcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSpeciesHasCharacteristicAsId on this unsaved Characteristic.');
			if ((is_null($objSpeciesHasCharacteristic->SpeciesIdspecies)) || (is_null($objSpeciesHasCharacteristic->CharacteristicIdcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSpeciesHasCharacteristicAsId on this Characteristic with an unsaved SpeciesHasCharacteristic.');

			// Get the Database Object for this Class
			$objDatabase = Characteristic::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`species_has_characteristic`
				SET
					`characteristic_idcharacteristic` = null
				WHERE
					`species_idspecies` = ' . $objDatabase->SqlVariable($objSpeciesHasCharacteristic->SpeciesIdspecies) . ' AND
					`characteristic_idcharacteristic` = ' . $objDatabase->SqlVariable($objSpeciesHasCharacteristic->CharacteristicIdcharacteristic) . ' AND
					`characteristic_idcharacteristic` = ' . $objDatabase->SqlVariable($this->intIdcharacteristic) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objSpeciesHasCharacteristic->CharacteristicIdcharacteristic = null;
				$objSpeciesHasCharacteristic->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all SpeciesHasCharacteristicsAsId
		 * @return void
		*/ 
		public function UnassociateAllSpeciesHasCharacteristicsAsId() {
			if ((is_null($this->intIdcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSpeciesHasCharacteristicAsId on this unsaved Characteristic.');

			// Get the Database Object for this Class
			$objDatabase = Characteristic::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (SpeciesHasCharacteristic::LoadArrayByCharacteristicIdcharacteristic($this->intIdcharacteristic) as $objSpeciesHasCharacteristic) {
					$objSpeciesHasCharacteristic->CharacteristicIdcharacteristic = null;
					$objSpeciesHasCharacteristic->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`species_has_characteristic`
				SET
					`characteristic_idcharacteristic` = null
				WHERE
					`characteristic_idcharacteristic` = ' . $objDatabase->SqlVariable($this->intIdcharacteristic) . '
			');
		}

		/**
		 * Deletes an associated SpeciesHasCharacteristicAsId
		 * @param SpeciesHasCharacteristic $objSpeciesHasCharacteristic
		 * @return void
		*/ 
		public function DeleteAssociatedSpeciesHasCharacteristicAsId(SpeciesHasCharacteristic $objSpeciesHasCharacteristic) {
			if ((is_null($this->intIdcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSpeciesHasCharacteristicAsId on this unsaved Characteristic.');
			if ((is_null($objSpeciesHasCharacteristic->SpeciesIdspecies)) || (is_null($objSpeciesHasCharacteristic->CharacteristicIdcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSpeciesHasCharacteristicAsId on this Characteristic with an unsaved SpeciesHasCharacteristic.');

			// Get the Database Object for this Class
			$objDatabase = Characteristic::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`species_has_characteristic`
				WHERE
					`species_idspecies` = ' . $objDatabase->SqlVariable($objSpeciesHasCharacteristic->SpeciesIdspecies) . ' AND
					`characteristic_idcharacteristic` = ' . $objDatabase->SqlVariable($objSpeciesHasCharacteristic->CharacteristicIdcharacteristic) . ' AND
					`characteristic_idcharacteristic` = ' . $objDatabase->SqlVariable($this->intIdcharacteristic) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objSpeciesHasCharacteristic->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated SpeciesHasCharacteristicsAsId
		 * @return void
		*/ 
		public function DeleteAllSpeciesHasCharacteristicsAsId() {
			if ((is_null($this->intIdcharacteristic)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSpeciesHasCharacteristicAsId on this unsaved Characteristic.');

			// Get the Database Object for this Class
			$objDatabase = Characteristic::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (SpeciesHasCharacteristic::LoadArrayByCharacteristicIdcharacteristic($this->intIdcharacteristic) as $objSpeciesHasCharacteristic) {
					$objSpeciesHasCharacteristic->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`species_has_characteristic`
				WHERE
					`characteristic_idcharacteristic` = ' . $objDatabase->SqlVariable($this->intIdcharacteristic) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Characteristic"><sequence>';
			$strToReturn .= '<element name="Idcharacteristic" type="xsd:int"/>';
			$strToReturn .= '<element name="Title" type="xsd:string"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="PicturesPath" type="xsd:string"/>';
			$strToReturn .= '<element name="CharacteristicIdcharacteristicObject" type="xsd1:Characteristic"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Characteristic', $strComplexTypeArray)) {
				$strComplexTypeArray['Characteristic'] = Characteristic::GetSoapComplexTypeXml();
				Characteristic::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Characteristic::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Characteristic();
			if (property_exists($objSoapObject, 'Idcharacteristic'))
				$objToReturn->intIdcharacteristic = $objSoapObject->Idcharacteristic;
			if (property_exists($objSoapObject, 'Title'))
				$objToReturn->strTitle = $objSoapObject->Title;
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if (property_exists($objSoapObject, 'PicturesPath'))
				$objToReturn->strPicturesPath = $objSoapObject->PicturesPath;
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
				array_push($objArrayToReturn, Characteristic::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
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
	 * @property-read QQNode $Idcharacteristic
	 * @property-read QQNode $Title
	 * @property-read QQNode $Description
	 * @property-read QQNode $PicturesPath
	 * @property-read QQNode $CharacteristicIdcharacteristic
	 * @property-read QQNodeCharacteristic $CharacteristicIdcharacteristicObject
	 * @property-read QQReverseReferenceNodeCharacteristic $CharacteristicAsId
	 * @property-read QQReverseReferenceNodeSpeciesHasCharacteristic $SpeciesHasCharacteristicAsId
	 */
	class QQNodeCharacteristic extends QQNode {
		protected $strTableName = 'characteristic';
		protected $strPrimaryKey = 'idcharacteristic';
		protected $strClassName = 'Characteristic';
		public function __get($strName) {
			switch ($strName) {
				case 'Idcharacteristic':
					return new QQNode('idcharacteristic', 'Idcharacteristic', 'integer', $this);
				case 'Title':
					return new QQNode('title', 'Title', 'string', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'PicturesPath':
					return new QQNode('pictures_path', 'PicturesPath', 'string', $this);
				case 'CharacteristicIdcharacteristic':
					return new QQNode('characteristic_idcharacteristic', 'CharacteristicIdcharacteristic', 'integer', $this);
				case 'CharacteristicIdcharacteristicObject':
					return new QQNodeCharacteristic('characteristic_idcharacteristic', 'CharacteristicIdcharacteristicObject', 'integer', $this);
				case 'CharacteristicAsId':
					return new QQReverseReferenceNodeCharacteristic($this, 'characteristicasid', 'reverse_reference', 'characteristic_idcharacteristic');
				case 'SpeciesHasCharacteristicAsId':
					return new QQReverseReferenceNodeSpeciesHasCharacteristic($this, 'specieshascharacteristicasid', 'reverse_reference', 'characteristic_idcharacteristic');

				case '_PrimaryKeyNode':
					return new QQNode('idcharacteristic', 'Idcharacteristic', 'integer', $this);
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
	 * @property-read QQNode $Idcharacteristic
	 * @property-read QQNode $Title
	 * @property-read QQNode $Description
	 * @property-read QQNode $PicturesPath
	 * @property-read QQNode $CharacteristicIdcharacteristic
	 * @property-read QQNodeCharacteristic $CharacteristicIdcharacteristicObject
	 * @property-read QQReverseReferenceNodeCharacteristic $CharacteristicAsId
	 * @property-read QQReverseReferenceNodeSpeciesHasCharacteristic $SpeciesHasCharacteristicAsId
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeCharacteristic extends QQReverseReferenceNode {
		protected $strTableName = 'characteristic';
		protected $strPrimaryKey = 'idcharacteristic';
		protected $strClassName = 'Characteristic';
		public function __get($strName) {
			switch ($strName) {
				case 'Idcharacteristic':
					return new QQNode('idcharacteristic', 'Idcharacteristic', 'integer', $this);
				case 'Title':
					return new QQNode('title', 'Title', 'string', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'PicturesPath':
					return new QQNode('pictures_path', 'PicturesPath', 'string', $this);
				case 'CharacteristicIdcharacteristic':
					return new QQNode('characteristic_idcharacteristic', 'CharacteristicIdcharacteristic', 'integer', $this);
				case 'CharacteristicIdcharacteristicObject':
					return new QQNodeCharacteristic('characteristic_idcharacteristic', 'CharacteristicIdcharacteristicObject', 'integer', $this);
				case 'CharacteristicAsId':
					return new QQReverseReferenceNodeCharacteristic($this, 'characteristicasid', 'reverse_reference', 'characteristic_idcharacteristic');
				case 'SpeciesHasCharacteristicAsId':
					return new QQReverseReferenceNodeSpeciesHasCharacteristic($this, 'specieshascharacteristicasid', 'reverse_reference', 'characteristic_idcharacteristic');

				case '_PrimaryKeyNode':
					return new QQNode('idcharacteristic', 'Idcharacteristic', 'integer', $this);
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