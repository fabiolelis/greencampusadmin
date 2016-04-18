<?php
	require(__DATAGEN_CLASSES__ . '/CharacteristicGen.class.php');

	/**
	 * The Characteristic class defined here contains any
	 * customized code for the Characteristic class in the
	 * Object Relational Model.  It represents the "characteristic" table 
	 * in the database, and extends from the code generated abstract CharacteristicGen
	 * class, which contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 * 
	 * @package My Application
	 * @subpackage DataObjects
	 * 
	 */
	class Characteristic extends CharacteristicGen {
		/**
		 * Default "to string" handler
		 * Allows pages to _p()/echo()/print() this object, and to define the default
		 * way this object would be outputted.
		 *
		 * Can also be called directly via $objCharacteristic->__toString().
		 *
		 * @return string a nicely formatted string representation of this object
		 */
		public function __toString() {
			return sprintf('Characteristic Object %s',  $this->intIdcharacteristic);
		}


		// Override or Create New Load/Count methods
		// (For obvious reasons, these methods are commented out...
		// but feel free to use these as a starting point)

		public static function LoadArrayBySpecies($intSpeciesid, $objOptionalClauses = null) {
			// This will return an array of Characteristic objects
			return Characteristic::QueryArray(
				QQ::Equal(QQN::Characteristic()->SpeciesIdspecies, $intSpeciesid),

				$objOptionalClauses
			);
		}


		public static function LoadArrayOfChildren($intIdcharacteristic){
			return Characteristic::QueryArray(
				QQ::Equal(QQN::Characteristic()->Parent->Idcharacteristic, $intIdcharacteristic),

				$objOptionalClauses
			);
		}

		public function getCharacsJson(){
			
			$parent = 0;

			if($this->CharacteristicIdcharacteristic != null)
				$parent = $this->CharacteristicIdcharacteristic;

			$str = "{";

				$str .= "\"id\" : ". $this->Idcharacteristic . ", ";
				$str .= "\"idspecies\" : ". $this->SpeciesIdspecies . ", ";
				$str .= "\"title\" : \"". $this->Title . "\", ";
				$str .= "\"description\" : \"". str_replace(array("\r", "\n"), '', $this->Description) . "\", ";
				
				//Replace os \
				$str .= "\"picturespath\" : \"". str_replace(array("\\", "\\\\"), '', $this->PicturesPath) . "\", ";
				$str .= "\"weburlimage\" : \"". $this->ImageWebUrl() . "\", ";
				$str .= "\"idparent\" : " . $parent . ", ";
				$str .= "\"identifier\" : \"" . $this->Identifier . "\ ";

			$str .= "}";
			return $str;
		}


		public function ImageWebUrl() {
			
			// Now, we need to see if the file, itself, is actually in the docroot somewhere so that
			// it can be viewed, and if so, we need to return the web-based URL (relative to the docroot)
			$str = $this->PicturesPath;

			if ($str) {

				// Normalize all backslashes to just plain slashes 

				$str = str_replace('\\', '/', substr($str, 0, strlen($str)));
				$strDocRoot = str_replace('\\', '/', __DOCROOT__ . __SUBDIRECTORY__);

				//if (contains($str,$strDocRoot)) {
					
					$strToReturn = __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ . '/' . substr_replace($str, "", 0, strlen($strDocRoot));

					// On Windows, we must replace all "\" with "/"
					if (substr(__DOCROOT__ . __SUBDIRECTORY__, 1, 2) == ':\\') {
						$strToReturn = str_replace('\\', '/', $strToReturn);
					}

					return $strToReturn;
			//	}
			}

			return null;
		}
/*
		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return an array of Characteristic objects
			return Characteristic::QueryArray(
				QQ::AndCondition(
					QQ::Equal(QQN::Characteristic()->Param1, $strParam1),
					QQ::GreaterThan(QQN::Characteristic()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a single Characteristic object
			return Characteristic::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Characteristic()->Param1, $strParam1),
					QQ::GreaterThan(QQN::Characteristic()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function CountBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a count of Characteristic objects
			return Characteristic::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Characteristic()->Param1, $strParam1),
					QQ::Equal(QQN::Characteristic()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses) {
			// Performing the load manually (instead of using Qcodo Query)

			// Get the Database Object for this Class
			$objDatabase = Characteristic::GetDatabase();

			// Properly Escape All Input Parameters using Database->SqlVariable()
			$strParam1 = $objDatabase->SqlVariable($strParam1);
			$intParam2 = $objDatabase->SqlVariable($intParam2);

			// Setup the SQL Query
			$strQuery = sprintf('
				SELECT
					`characteristic`.*
				FROM
					`characteristic` AS `characteristic`
				WHERE
					param_1 = %s AND
					param_2 < %s',
				$strParam1, $intParam2);

			// Perform the Query and Instantiate the Result
			$objDbResult = $objDatabase->Query($strQuery);
			return Characteristic::InstantiateDbResult($objDbResult);
		}
*/




		// Override or Create New Properties and Variables
		// For performance reasons, these variables and __set and __get override methods
		// are commented out.  But if you wish to implement or override any
		// of the data generated properties, please feel free to uncomment them.
/*
		protected $strSomeNewProperty;

		public function __get($strName) {
			switch ($strName) {
				case 'SomeNewProperty': return $this->strSomeNewProperty;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		public function __set($strName, $mixValue) {
			switch ($strName) {
				case 'SomeNewProperty':
					try {
						return ($this->strSomeNewProperty = QType::Cast($mixValue, QType::String));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				default:
					try {
						return (parent::__set($strName, $mixValue));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
*/
	}
?>