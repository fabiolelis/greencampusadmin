<?php
	require(__DATAGEN_CLASSES__ . '/EventGen.class.php');

	/**
	 * The Event class defined here contains any
	 * customized code for the Event class in the
	 * Object Relational Model.  It represents the "event" table 
	 * in the database, and extends from the code generated abstract EventGen
	 * class, which contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 * 
	 * @package My Application
	 * @subpackage DataObjects
	 * 
	 */
	class Event extends EventGen {
		/**
		 * Default "to string" handler
		 * Allows pages to _p()/echo()/print() this object, and to define the default
		 * way this object would be outputted.
		 *
		 * Can also be called directly via $objEvent->__toString().
		 *
		 * @return string a nicely formatted string representation of this object
		 */
		public function __toString() {
			return sprintf('Event Object %s',  $this->intIdevent);
		}

		public function getEventJson(){
			$str = "{";
				$str .= "\"event\": {";
					$str .= "\"id\" : ". $this->Idevent . ", ";

					$str .= "\"datetime\" : \"". $this->DateTime . "\", ";
					$str .= "\"location\" : \"". $this->Location . "\", ";
					$str .= "\"description\" : \"". $this->Description . "\", ";
					$str .= "\"images\" : \"". $this->Images . "\", ";
					$str .= "\"imagesweburl\" : \"". $this->ImageWebUrl() . "\", ";
					$str .= "\"videos\" : \"". $this->Videos . "\" ";


				$str .= "}";
			$str .= "}";
			return $str;
		}

		public static function getArrayEventJson($arrayEvents){

			//var_dump($arraySpecies);
			//die();
			$str = "{\"Events\":[";
			foreach($arrayEvents as $events){
				$str .= "{";
					$str .= "\"id\" : ". $events->Idevent . ", ";

					$str .= "\"datetime\" : \"". $events->DateTime . "\", ";
					$str .= "\"location\" : \"". $events->Location . "\", ";
					$str .= "\"description\" : \"". $events->Description . "\", ";
					$str .= "\"images\" : \"". $events->Images . "\", ";
					$str .= "\"imagesweburl\" : \"". $events->ImageWebUrl() . "\", ";
					$str .= "\"videos\" : \"". $events->Videos . "\" ";
				$str .= "},";

			}
			$str = substr_replace($str, "", -1);

			$str .= "]}";
			return $str;

		}

		public function ImageWebUrl() {
			
			// Now, we need to see if the file, itself, is actually in the docroot somewhere so that
			// it can be viewed, and if so, we need to return the web-based URL (relative to the docroot)
			$str = $this->Images;

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


		// Override or Create New Load/Count methods
		// (For obvious reasons, these methods are commented out...
		// but feel free to use these as a starting point)

		/**
		 * Load all Events
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Event[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Event::QueryArray to perform the LoadAll query
			try {
				return Event::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
/*
		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return an array of Event objects
			return Event::QueryArray(
				QQ::AndCondition(
					QQ::Equal(QQN::Event()->Param1, $strParam1),
					QQ::GreaterThan(QQN::Event()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a single Event object
			return Event::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Event()->Param1, $strParam1),
					QQ::GreaterThan(QQN::Event()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function CountBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a count of Event objects
			return Event::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Event()->Param1, $strParam1),
					QQ::Equal(QQN::Event()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses) {
			// Performing the load manually (instead of using Qcodo Query)

			// Get the Database Object for this Class
			$objDatabase = Event::GetDatabase();

			// Properly Escape All Input Parameters using Database->SqlVariable()
			$strParam1 = $objDatabase->SqlVariable($strParam1);
			$intParam2 = $objDatabase->SqlVariable($intParam2);

			// Setup the SQL Query
			$strQuery = sprintf('
				SELECT
					`event`.*
				FROM
					`event` AS `event`
				WHERE
					param_1 = %s AND
					param_2 < %s',
				$strParam1, $intParam2);

			// Perform the Query and Instantiate the Result
			$objDbResult = $objDatabase->Query($strQuery);
			return Event::InstantiateDbResult($objDbResult);
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