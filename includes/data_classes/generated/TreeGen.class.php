<?php
	/**
	 * The abstract TreeGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Tree subclass which
	 * extends this TreeGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Tree class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Idtree the value for intIdtree (Read-Only PK)
	 * @property integer $SpeciesIdspecies the value for intSpeciesIdspecies (Not Null)
	 * @property string $Longitude the value for strLongitude 
	 * @property string $Latitude the value for strLatitude 
	 * @property integer $Age the value for intAge 
	 * @property string $Identifier the value for strIdentifier 
	 * @property Species $SpeciesIdspeciesObject the value for the Species object referenced by intSpeciesIdspecies (Not Null)
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class TreeGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column tree.idtree
		 * @var integer intIdtree
		 */
		protected $intIdtree;
		const IdtreeDefault = null;


		/**
		 * Protected member variable that maps to the database column tree.species_idspecies
		 * @var integer intSpeciesIdspecies
		 */
		protected $intSpeciesIdspecies;
		const SpeciesIdspeciesDefault = null;


		/**
		 * Protected member variable that maps to the database column tree.longitude
		 * @var string strLongitude
		 */
		protected $strLongitude;
		const LongitudeMaxLength = 45;
		const LongitudeDefault = null;


		/**
		 * Protected member variable that maps to the database column tree.latitude
		 * @var string strLatitude
		 */
		protected $strLatitude;
		const LatitudeMaxLength = 45;
		const LatitudeDefault = null;


		/**
		 * Protected member variable that maps to the database column tree.age
		 * @var integer intAge
		 */
		protected $intAge;
		const AgeDefault = null;


		/**
		 * Protected member variable that maps to the database column tree.identifier
		 * @var string strIdentifier
		 */
		protected $strIdentifier;
		const IdentifierMaxLength = 45;
		const IdentifierDefault = null;


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
		 * in the database column tree.species_idspecies.
		 *
		 * NOTE: Always use the SpeciesIdspeciesObject property getter to correctly retrieve this Species object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Species objSpeciesIdspeciesObject
		 */
		protected $objSpeciesIdspeciesObject;





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
		 * Load a Tree from PK Info
		 * @param integer $intIdtree
		 * @return Tree
		 */
		public static function Load($intIdtree) {
			// Use QuerySingle to Perform the Query
			return Tree::QuerySingle(
				QQ::Equal(QQN::Tree()->Idtree, $intIdtree)
			);
		}

		/**
		 * Load all Trees
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Tree[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Tree::QueryArray to perform the LoadAll query
			try {
				return Tree::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Trees
		 * @return int
		 */
		public static function CountAll() {
			// Call Tree::QueryCount to perform the CountAll query
			return Tree::QueryCount(QQ::All());
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
			$objDatabase = Tree::GetDatabase();

			// Create/Build out the QueryBuilder object with Tree-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'tree');
			Tree::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('tree');

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
		 * Static Qcodo Query method to query for a single Tree object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Tree the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Tree::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Tree object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Tree::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Tree::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Tree objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Tree[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Tree::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Tree::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Tree::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Tree objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Tree::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Tree::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'tree_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Tree-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Tree::GetSelectFields($objQueryBuilder);
				Tree::GetFromFields($objQueryBuilder);

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
			return Tree::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Tree
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'tree';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'idtree', $strAliasPrefix . 'idtree');
			$objBuilder->AddSelectItem($strTableName, 'species_idspecies', $strAliasPrefix . 'species_idspecies');
			$objBuilder->AddSelectItem($strTableName, 'longitude', $strAliasPrefix . 'longitude');
			$objBuilder->AddSelectItem($strTableName, 'latitude', $strAliasPrefix . 'latitude');
			$objBuilder->AddSelectItem($strTableName, 'age', $strAliasPrefix . 'age');
			$objBuilder->AddSelectItem($strTableName, 'identifier', $strAliasPrefix . 'identifier');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Tree from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Tree::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Tree
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;


			// Create a new instance of the Tree object
			$objToReturn = new Tree();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'idtree', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'idtree'] : $strAliasPrefix . 'idtree';
			$objToReturn->intIdtree = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'species_idspecies', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'species_idspecies'] : $strAliasPrefix . 'species_idspecies';
			$objToReturn->intSpeciesIdspecies = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'longitude', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'longitude'] : $strAliasPrefix . 'longitude';
			$objToReturn->strLongitude = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'latitude', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'latitude'] : $strAliasPrefix . 'latitude';
			$objToReturn->strLatitude = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'age', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'age'] : $strAliasPrefix . 'age';
			$objToReturn->intAge = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'identifier', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'identifier'] : $strAliasPrefix . 'identifier';
			$objToReturn->strIdentifier = $objDbRow->GetColumn($strAliasName, 'VarChar');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'tree__';

			// Check for SpeciesIdspeciesObject Early Binding
			$strAlias = $strAliasPrefix . 'species_idspecies__idspecies';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSpeciesIdspeciesObject = Species::InstantiateDbRow($objDbRow, $strAliasPrefix . 'species_idspecies__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Trees from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Tree[]
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
					$objItem = Tree::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Tree::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Tree object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Tree next row resulting from the query
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
			return Tree::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Tree object,
		 * by Idtree Index(es)
		 * @param integer $intIdtree
		 * @return Tree
		*/
		public static function LoadByIdtree($intIdtree, $objOptionalClauses = null) {
			return Tree::QuerySingle(
				QQ::Equal(QQN::Tree()->Idtree, $intIdtree)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Tree objects,
		 * by SpeciesIdspecies Index(es)
		 * @param integer $intSpeciesIdspecies
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Tree[]
		*/
		public static function LoadArrayBySpeciesIdspecies($intSpeciesIdspecies, $objOptionalClauses = null) {
			// Call Tree::QueryArray to perform the LoadArrayBySpeciesIdspecies query
			try {
				return Tree::QueryArray(
					QQ::Equal(QQN::Tree()->SpeciesIdspecies, $intSpeciesIdspecies),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Trees
		 * by SpeciesIdspecies Index(es)
		 * @param integer $intSpeciesIdspecies
		 * @return int
		*/
		public static function CountBySpeciesIdspecies($intSpeciesIdspecies, $objOptionalClauses = null) {
			// Call Tree::QueryCount to perform the CountBySpeciesIdspecies query
			return Tree::QueryCount(
				QQ::Equal(QQN::Tree()->SpeciesIdspecies, $intSpeciesIdspecies)
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
		 * Save this Tree
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Tree::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `tree` (
							`species_idspecies`,
							`longitude`,
							`latitude`,
							`age`,
							`identifier`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intSpeciesIdspecies) . ',
							' . $objDatabase->SqlVariable($this->strLongitude) . ',
							' . $objDatabase->SqlVariable($this->strLatitude) . ',
							' . $objDatabase->SqlVariable($this->intAge) . ',
							' . $objDatabase->SqlVariable($this->strIdentifier) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdtree = $objDatabase->InsertId('tree', 'idtree');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`tree`
						SET
							`species_idspecies` = ' . $objDatabase->SqlVariable($this->intSpeciesIdspecies) . ',
							`longitude` = ' . $objDatabase->SqlVariable($this->strLongitude) . ',
							`latitude` = ' . $objDatabase->SqlVariable($this->strLatitude) . ',
							`age` = ' . $objDatabase->SqlVariable($this->intAge) . ',
							`identifier` = ' . $objDatabase->SqlVariable($this->strIdentifier) . '
						WHERE
							`idtree` = ' . $objDatabase->SqlVariable($this->intIdtree) . '
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
		 * Delete this Tree
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdtree)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Tree with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Tree::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tree`
				WHERE
					`idtree` = ' . $objDatabase->SqlVariable($this->intIdtree) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Trees
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Tree::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`tree`');
		}

		/**
		 * Truncate tree table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Tree::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `tree`');
		}

		/**
		 * Reload this Tree from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Tree object.');

			// Reload the Object
			$objReloaded = Tree::Load($this->intIdtree);

			// Update $this's local variables to match
			$this->SpeciesIdspecies = $objReloaded->SpeciesIdspecies;
			$this->strLongitude = $objReloaded->strLongitude;
			$this->strLatitude = $objReloaded->strLatitude;
			$this->intAge = $objReloaded->intAge;
			$this->strIdentifier = $objReloaded->strIdentifier;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Tree::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `tree` (
					`idtree`,
					`species_idspecies`,
					`longitude`,
					`latitude`,
					`age`,
					`identifier`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intIdtree) . ',
					' . $objDatabase->SqlVariable($this->intSpeciesIdspecies) . ',
					' . $objDatabase->SqlVariable($this->strLongitude) . ',
					' . $objDatabase->SqlVariable($this->strLatitude) . ',
					' . $objDatabase->SqlVariable($this->intAge) . ',
					' . $objDatabase->SqlVariable($this->strIdentifier) . ',
					' . (($objDatabase->JournaledById) ? $objDatabase->JournaledById : 'NULL') . ',
					' . $objDatabase->SqlVariable($strJournalCommand) . ',
					NOW()
				);
			');
		}

		/**
		 * Gets the historical journal for an object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @param integer intIdtree
		 * @return Tree[]
		 */
		public static function GetJournalForId($intIdtree) {
			$objDatabase = Tree::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM tree WHERE idtree = ' .
				$objDatabase->SqlVariable($intIdtree) . ' ORDER BY __sys_date');

			return Tree::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Tree[]
		 */
		public function GetJournal() {
			return Tree::GetJournalForId($this->intIdtree);
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
				case 'Idtree':
					// Gets the value for intIdtree (Read-Only PK)
					// @return integer
					return $this->intIdtree;

				case 'SpeciesIdspecies':
					// Gets the value for intSpeciesIdspecies (Not Null)
					// @return integer
					return $this->intSpeciesIdspecies;

				case 'Longitude':
					// Gets the value for strLongitude 
					// @return string
					return $this->strLongitude;

				case 'Latitude':
					// Gets the value for strLatitude 
					// @return string
					return $this->strLatitude;

				case 'Age':
					// Gets the value for intAge 
					// @return integer
					return $this->intAge;

				case 'Identifier':
					// Gets the value for strIdentifier 
					// @return string
					return $this->strIdentifier;


				///////////////////
				// Member Objects
				///////////////////
				case 'SpeciesIdspeciesObject':
					// Gets the value for the Species object referenced by intSpeciesIdspecies (Not Null)
					// @return Species
					try {
						if ((!$this->objSpeciesIdspeciesObject) && (!is_null($this->intSpeciesIdspecies)))
							$this->objSpeciesIdspeciesObject = Species::Load($this->intSpeciesIdspecies);
						return $this->objSpeciesIdspeciesObject;
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
					// Sets the value for intSpeciesIdspecies (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objSpeciesIdspeciesObject = null;
						return ($this->intSpeciesIdspecies = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Longitude':
					// Sets the value for strLongitude 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strLongitude = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Latitude':
					// Sets the value for strLatitude 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strLatitude = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Age':
					// Sets the value for intAge 
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intAge = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Identifier':
					// Sets the value for strIdentifier 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strIdentifier = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'SpeciesIdspeciesObject':
					// Sets the value for the Species object referenced by intSpeciesIdspecies (Not Null)
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
							throw new QCallerException('Unable to set an unsaved SpeciesIdspeciesObject for this Tree');

						// Update Local Member Variables
						$this->objSpeciesIdspeciesObject = $mixValue;
						$this->intSpeciesIdspecies = $mixValue->Idspecies;

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
			$strToReturn = '<complexType name="Tree"><sequence>';
			$strToReturn .= '<element name="Idtree" type="xsd:int"/>';
			$strToReturn .= '<element name="SpeciesIdspeciesObject" type="xsd1:Species"/>';
			$strToReturn .= '<element name="Longitude" type="xsd:string"/>';
			$strToReturn .= '<element name="Latitude" type="xsd:string"/>';
			$strToReturn .= '<element name="Age" type="xsd:int"/>';
			$strToReturn .= '<element name="Identifier" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Tree', $strComplexTypeArray)) {
				$strComplexTypeArray['Tree'] = Tree::GetSoapComplexTypeXml();
				Species::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Tree::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Tree();
			if (property_exists($objSoapObject, 'Idtree'))
				$objToReturn->intIdtree = $objSoapObject->Idtree;
			if ((property_exists($objSoapObject, 'SpeciesIdspeciesObject')) &&
				($objSoapObject->SpeciesIdspeciesObject))
				$objToReturn->SpeciesIdspeciesObject = Species::GetObjectFromSoapObject($objSoapObject->SpeciesIdspeciesObject);
			if (property_exists($objSoapObject, 'Longitude'))
				$objToReturn->strLongitude = $objSoapObject->Longitude;
			if (property_exists($objSoapObject, 'Latitude'))
				$objToReturn->strLatitude = $objSoapObject->Latitude;
			if (property_exists($objSoapObject, 'Age'))
				$objToReturn->intAge = $objSoapObject->Age;
			if (property_exists($objSoapObject, 'Identifier'))
				$objToReturn->strIdentifier = $objSoapObject->Identifier;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Tree::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objSpeciesIdspeciesObject)
				$objObject->objSpeciesIdspeciesObject = Species::GetSoapObjectFromObject($objObject->objSpeciesIdspeciesObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSpeciesIdspecies = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Idtree
	 * @property-read QQNode $SpeciesIdspecies
	 * @property-read QQNodeSpecies $SpeciesIdspeciesObject
	 * @property-read QQNode $Longitude
	 * @property-read QQNode $Latitude
	 * @property-read QQNode $Age
	 * @property-read QQNode $Identifier
	 */
	class QQNodeTree extends QQNode {
		protected $strTableName = 'tree';
		protected $strPrimaryKey = 'idtree';
		protected $strClassName = 'Tree';
		public function __get($strName) {
			switch ($strName) {
				case 'Idtree':
					return new QQNode('idtree', 'Idtree', 'integer', $this);
				case 'SpeciesIdspecies':
					return new QQNode('species_idspecies', 'SpeciesIdspecies', 'integer', $this);
				case 'SpeciesIdspeciesObject':
					return new QQNodeSpecies('species_idspecies', 'SpeciesIdspeciesObject', 'integer', $this);
				case 'Longitude':
					return new QQNode('longitude', 'Longitude', 'string', $this);
				case 'Latitude':
					return new QQNode('latitude', 'Latitude', 'string', $this);
				case 'Age':
					return new QQNode('age', 'Age', 'integer', $this);
				case 'Identifier':
					return new QQNode('identifier', 'Identifier', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idtree', 'Idtree', 'integer', $this);
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
	 * @property-read QQNode $Idtree
	 * @property-read QQNode $SpeciesIdspecies
	 * @property-read QQNodeSpecies $SpeciesIdspeciesObject
	 * @property-read QQNode $Longitude
	 * @property-read QQNode $Latitude
	 * @property-read QQNode $Age
	 * @property-read QQNode $Identifier
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeTree extends QQReverseReferenceNode {
		protected $strTableName = 'tree';
		protected $strPrimaryKey = 'idtree';
		protected $strClassName = 'Tree';
		public function __get($strName) {
			switch ($strName) {
				case 'Idtree':
					return new QQNode('idtree', 'Idtree', 'integer', $this);
				case 'SpeciesIdspecies':
					return new QQNode('species_idspecies', 'SpeciesIdspecies', 'integer', $this);
				case 'SpeciesIdspeciesObject':
					return new QQNodeSpecies('species_idspecies', 'SpeciesIdspeciesObject', 'integer', $this);
				case 'Longitude':
					return new QQNode('longitude', 'Longitude', 'string', $this);
				case 'Latitude':
					return new QQNode('latitude', 'Latitude', 'string', $this);
				case 'Age':
					return new QQNode('age', 'Age', 'integer', $this);
				case 'Identifier':
					return new QQNode('identifier', 'Identifier', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idtree', 'Idtree', 'integer', $this);
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