<?php
	require(__DATAGEN_CLASSES__ . '/SpeciesGen.class.php');

	/**
	 * The Species class defined here contains any
	 * customized code for the Species class in the
	 * Object Relational Model.  It represents the "species" table 
	 * in the database, and extends from the code generated abstract SpeciesGen
	 * class, which contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 * 
	 * @package My Application
	 * @subpackage DataObjects
	 * 
	 */
	class Species extends SpeciesGen {
		/**
		 * Default "to string" handler
		 * Allows pages to _p()/echo()/print() this object, and to define the default
		 * way this object would be outputted.
		 *
		 * Can also be called directly via $objSpecies->__toString().
		 *
		 * @return string a nicely formatted string representation of this object
		 */
		public function __toString() {
			return sprintf('Species Object %s',  $this->intIdspecies);
		}


		public function getSpeciesJson(){
			$mainImg = $this->MainImageUrl();

			if ($mainImg == null || $mainImg == ""){
				$mainImg = __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ . '/assets/images/trees/phpPryDbG1677.png';
				//var_dump($mainImg);
			}

			$str = "{";
				$str .= "\"species\": {";
					$str .= "\"id\" : ". $this->Idspecies . ", ";
					$str .= "\"name\" : \"". $this->Name . "\", ";
					$str .= "\"latinname\" : \"". $this->LatinName . "\", ";
					$str .= "\"irishname\" : \"". $this->Irishname . "\", ";
					$str .= "\"mainimage\" : \"". $mainImg  . "\", ";
					$str .= "\"description\" : \"". str_replace(array("\r", "\n"), '', $this->Description) . "\" ";
					
					//$str .= "\"description\" : \"". $this->Description . "\" ";

				$str .= "}";
			$str .= "}";
			return $str;
		}

		public function getSpeciesJsonWithCharacs(){
			$mainImg = $this->MainImageUrl();

			if ($mainImg == null || $mainImg == ""){
				$mainImg = __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ . '/assets/images/trees/phpPryDbG1677.png';
				//var_dump($mainImg);
			}

			$str = "{";
				$str .= "\"species\": {";
					$str .= "\"id\" : ". $this->Idspecies . ", ";
					$str .= "\"name\" : \"". $this->Name . "\", ";
					$str .= "\"latinname\" : \"". $this->LatinName . "\", ";
					$str .= "\"irishname\" : \"". $this->Irishname . "\", ";
					$str .= "\"mainimage\" : \"". $mainImg  . "\", ";
					$str .= "\"description\" : \"". str_replace(array("\r", "\n"), '', $this->Description) . "\", ";
					
					
					$str .= $this->getArrayCharacsJson();
					

				$str .= "}";
			$str .= "}";
			return $str;
		}

		public function getArrayCharacsJson(){

			$characsArray = Characteristic::LoadArrayBySpecies($this->Idspecies);
			$str = "\"characteristics\" : [";
			
			foreach ($characsArray as $charac) {
				$str .= $charac->getCharacsJson();
				$str .= ",";
			}
			
			$str = substr_replace($str, "", -1);
			$str .= "]";
			return $str;

		}


		public static function getArraySpeciesJson($arraySpecies){

			
			$str = "{\"Species\":[";
			foreach($arraySpecies as $species){

				$mainImg = $species->MainImageUrl();

				if ($mainImg == null || $mainImg == "")
					$mainImg = __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ . '/assets/images/trees/phpPryDbG1677.png';	

				$str .= "{";
					$str .= "\"id\" : ". $species->Idspecies . ", ";
					$str .= "\"name\" : \"". $species->Name . "\", ";
					$str .= "\"latinname\" : \"". $species->LatinName . "\", ";
					$str .= "\"irishname\" : \"". $species->Irishname . "\", ";
					$str .= "\"mainimage\" : \"". $mainImg. "\", ";
					$str .= "\"description\" : \"". str_replace(array("\r", "\n"), '', $species->Description) . "\" ";
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
			// This will return an array of Species objects
			return Species::QueryArray(
				QQ::AndCondition(
					QQ::Equal(QQN::Species()->Param1, $strParam1),
					QQ::GreaterThan(QQN::Species()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a single Species object
			return Species::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Species()->Param1, $strParam1),
					QQ::GreaterThan(QQN::Species()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function CountBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a count of Species objects
			return Species::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Species()->Param1, $strParam1),
					QQ::Equal(QQN::Species()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses) {
			// Performing the load manually (instead of using Qcodo Query)

			// Get the Database Object for this Class
			$objDatabase = Species::GetDatabase();

			// Properly Escape All Input Parameters using Database->SqlVariable()
			$strParam1 = $objDatabase->SqlVariable($strParam1);
			$intParam2 = $objDatabase->SqlVariable($intParam2);

			// Setup the SQL Query
			$strQuery = sprintf('
				SELECT
					`species`.*
				FROM
					`species` AS `species`
				WHERE
					param_1 = %s AND
					param_2 < %s',
				$strParam1, $intParam2);

			// Perform the Query and Instantiate the Result
			$objDbResult = $objDatabase->Query($strQuery);
			return Species::InstantiateDbResult($objDbResult);
		}
*/




		// Override or Create New Properties and Variables
		// For performance reasons, these variables and __set and __get override methods
		// are commented out.  But if you wish to implement or override any
		// of the data generated properties, please feel free to uncomment them.

		/*
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

		public function MainImageUrl(){
			$arrayCharac = Characteristic::LoadArrayBySpecies($this->Idspecies);

			foreach ($arrayCharac as $charac) {
				if($charac->PicturesPath != null && $charac->PicturesPath != "")
					//var_dump($charac->PicturesPath);
					return Species::ImageWebUrl($charac->PicturesPath);
					//return $charac->PicturesPath;
			}
		}

		public function ImageWebUrl($str) {
			
			// Now, we need to see if the file, itself, is actually in the docroot somewhere so that
			// it can be viewed, and if so, we need to return the web-based URL (relative to the docroot)			

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

	}
?>