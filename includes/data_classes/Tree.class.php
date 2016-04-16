<?php
	require(__DATAGEN_CLASSES__ . '/TreeGen.class.php');

	/**
	 * The Tree class defined here contains any
	 * customized code for the Tree class in the
	 * Object Relational Model.  It represents the "tree" table 
	 * in the database, and extends from the code generated abstract TreeGen
	 * class, which contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 * 
	 * @package My Application
	 * @subpackage DataObjects
	 * 
	 */
	class Tree extends TreeGen {
		/**
		 * Default "to string" handler
		 * Allows pages to _p()/echo()/print() this object, and to define the default
		 * way this object would be outputted.
		 *
		 * Can also be called directly via $objTree->__toString().
		 *
		 * @return string a nicely formatted string representation of this object
		 */
		public function __toString() {
			return sprintf('Tree Object %s',  $this->intIdTree);
		}

		public function getTreeJson(){
			$str = "{";
				$str .= "\"tree\": {";
					$str .= "\"id\" : ". $this->Idtree . ", ";
						$str .= "\"age\" : ". $this->Age . ", ";
						$str .= "\"speciesid\" : ". $this->SpeciesIdspecies . ", ";

						$str .= "\"identifier\" : \"". $this->Identifier . "\", ";
						$str .= "\"latitude\" : \"". $this->Latitude . "\", ";
						$str .= "\"longitude\" : \"". $this->Longitude . "\", ";
						$str .= "\"speciesname\" : \"". $this->SpeciesName . "\" ";

				$str .= "}";
			$str .= "}";
			return $str;
		}

		public static function getArrayTreeJson($arrayTrees){

			//var_dump($arraySpecies);
			//die();
			$str = "{\"Trees\":[";
			foreach($arrayTrees as $tree){
				$str .= "{";
					$str .= "\"id\" : ". $tree->Idtree . ", ";
					$str .= "\"age\" : ". $tree->Age . ", ";
					$str .= "\"speciesid\" : ". $tree->SpeciesIdspecies . ", ";

					$str .= "\"identifier\" : \"". $tree->Identifier . "\", ";
					$str .= "\"latitude\" : \"". $tree->Latitude . "\", ";
					$str .= "\"longitude\" : \"". $tree->Longitude . "\", ";
					$str .= "\"speciesname\" : \"". $tree->SpeciesName . "\" ";
				$str .= "},";

			}
			$str = substr_replace($str, "", -1);

			$str .= "]}";
			return $str;

		}


		// Override or Create New Load/Count methods
		// (For obvious reasons, these methods are commented out...
		// but feel free to use these as a starting point)
/*
		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return an array of Tree objects
			return Tree::QueryArray(
				QQ::AndCondition(
					QQ::Equal(QQN::Tree()->Param1, $strParam1),
					QQ::GreaterThan(QQN::Tree()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a single Tree object
			return Tree::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Tree()->Param1, $strParam1),
					QQ::GreaterThan(QQN::Tree()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function CountBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a count of Tree objects
			return Tree::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Tree()->Param1, $strParam1),
					QQ::Equal(QQN::Tree()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses) {
			// Performing the load manually (instead of using Qcodo Query)

			// Get the Database Object for this Class
			$objDatabase = Tree::GetDatabase();

			// Properly Escape All Input Parameters using Database->SqlVariable()
			$strParam1 = $objDatabase->SqlVariable($strParam1);
			$intParam2 = $objDatabase->SqlVariable($intParam2);

			// Setup the SQL Query
			$strQuery = sprintf('
				SELECT
					`tree`.*
				FROM
					`tree` AS `tree`
				WHERE
					param_1 = %s AND
					param_2 < %s',
				$strParam1, $intParam2);

			// Perform the Query and Instantiate the Result
			$objDbResult = $objDatabase->Query($strQuery);
			return Tree::InstantiateDbResult($objDbResult);
		}
*/




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

				case 'SpeciesName':
					return $this->SpeciesIdspeciesObject->Name;

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
	}
?>