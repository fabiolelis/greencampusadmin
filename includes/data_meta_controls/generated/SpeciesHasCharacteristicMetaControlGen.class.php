<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the SpeciesHasCharacteristic class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single SpeciesHasCharacteristic object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a SpeciesHasCharacteristicMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read SpeciesHasCharacteristic $SpeciesHasCharacteristic the actual SpeciesHasCharacteristic data class being edited
	 * property QListBox $SpeciesIdspeciesControl
	 * property-read QLabel $SpeciesIdspeciesLabel
	 * property QListBox $CharacteristicIdcharacteristicControl
	 * property-read QLabel $CharacteristicIdcharacteristicLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class SpeciesHasCharacteristicMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var SpeciesHasCharacteristic objSpeciesHasCharacteristic
		 * @access protected
		 */
		protected $objSpeciesHasCharacteristic;

		/**
		 * @var QForm|QControl objParentObject
		 * @access protected
		 */
		protected $objParentObject;

		/**
		 * @var string  strTitleVerb
		 * @access protected
		 */
		protected $strTitleVerb;

		/**
		 * @var boolean blnEditMode
		 * @access protected
		 */
		protected $blnEditMode;

		// Controls that allow the editing of SpeciesHasCharacteristic's individual data fields
        /**
         * @var QListBox lstSpeciesIdspeciesObject;
         * @access protected
         */
		protected $lstSpeciesIdspeciesObject;

        /**
         * @var QListBox lstCharacteristicIdcharacteristicObject;
         * @access protected
         */
		protected $lstCharacteristicIdcharacteristicObject;


		// Controls that allow the viewing of SpeciesHasCharacteristic's individual data fields
        /**
         * @var QLabel lblSpeciesIdspecies
         * @access protected
         */
		protected $lblSpeciesIdspecies;

        /**
         * @var QLabel lblCharacteristicIdcharacteristic
         * @access protected
         */
		protected $lblCharacteristicIdcharacteristic;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * SpeciesHasCharacteristicMetaControl to edit a single SpeciesHasCharacteristic object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single SpeciesHasCharacteristic object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this SpeciesHasCharacteristicMetaControl
		 * @param SpeciesHasCharacteristic $objSpeciesHasCharacteristic new or existing SpeciesHasCharacteristic object
		 */
		 public function __construct($objParentObject, SpeciesHasCharacteristic $objSpeciesHasCharacteristic) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this SpeciesHasCharacteristicMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked SpeciesHasCharacteristic object
			$this->objSpeciesHasCharacteristic = $objSpeciesHasCharacteristic;

			// Figure out if we're Editing or Creating New
			if ($this->objSpeciesHasCharacteristic->__Restored) {
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			} else {
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
		 }

		/**
		 * Static Helper Method to Create using PK arguments
		 * You must pass in the PK arguments on an object to load, or leave it blank to create a new one.
		 * If you want to load via QueryString or PathInfo, use the CreateFromQueryString or CreateFromPathInfo
		 * static helper methods.  Finally, specify a CreateType to define whether or not we are only allowed to 
		 * edit, or if we are also allowed to create a new one, etc.
		 * 
		 * @param mixed $objParentObject QForm or QPanel which will be using this SpeciesHasCharacteristicMetaControl
		 * @param integer $intSpeciesIdspecies primary key value
		 * @param integer $intCharacteristicIdcharacteristic primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing SpeciesHasCharacteristic object creation - defaults to CreateOrEdit
 		 * @return SpeciesHasCharacteristicMetaControl
		 */
		public static function Create($objParentObject, $intSpeciesIdspecies = null, $intCharacteristicIdcharacteristic = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intSpeciesIdspecies) && strlen($intCharacteristicIdcharacteristic)) {
				$objSpeciesHasCharacteristic = SpeciesHasCharacteristic::Load($intSpeciesIdspecies, $intCharacteristicIdcharacteristic);

				// SpeciesHasCharacteristic was found -- return it!
				if ($objSpeciesHasCharacteristic)
					return new SpeciesHasCharacteristicMetaControl($objParentObject, $objSpeciesHasCharacteristic);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a SpeciesHasCharacteristic object with PK arguments: ' . $intSpeciesIdspecies . ', ' . $intCharacteristicIdcharacteristic);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new SpeciesHasCharacteristicMetaControl($objParentObject, new SpeciesHasCharacteristic());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this SpeciesHasCharacteristicMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing SpeciesHasCharacteristic object creation - defaults to CreateOrEdit
		 * @return SpeciesHasCharacteristicMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intSpeciesIdspecies = QApplication::PathInfo(0);
			$intCharacteristicIdcharacteristic = QApplication::PathInfo(1);
			return SpeciesHasCharacteristicMetaControl::Create($objParentObject, $intSpeciesIdspecies, $intCharacteristicIdcharacteristic, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this SpeciesHasCharacteristicMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing SpeciesHasCharacteristic object creation - defaults to CreateOrEdit
		 * @return SpeciesHasCharacteristicMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intSpeciesIdspecies = QApplication::QueryString('intSpeciesIdspecies');
			$intCharacteristicIdcharacteristic = QApplication::QueryString('intCharacteristicIdcharacteristic');
			return SpeciesHasCharacteristicMetaControl::Create($objParentObject, $intSpeciesIdspecies, $intCharacteristicIdcharacteristic, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QListBox lstSpeciesIdspeciesObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstSpeciesIdspeciesObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstSpeciesIdspeciesObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstSpeciesIdspeciesObject->Name = QApplication::Translate('Species');
			$this->lstSpeciesIdspeciesObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstSpeciesIdspeciesObject->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objSpeciesIdspeciesObjectCursor = Species::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objSpeciesIdspeciesObject = Species::InstantiateCursor($objSpeciesIdspeciesObjectCursor)) {
				$objListItem = new QListItem($objSpeciesIdspeciesObject->Name, $objSpeciesIdspeciesObject->Idspecies);
				if (($this->objSpeciesHasCharacteristic->SpeciesIdspeciesObject) && ($this->objSpeciesHasCharacteristic->SpeciesIdspeciesObject->Idspecies == $objSpeciesIdspeciesObject->Idspecies))
					$objListItem->Selected = true;
				$this->lstSpeciesIdspeciesObject->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstSpeciesIdspeciesObject;
		}

		/**
		 * Create and setup QLabel lblSpeciesIdspecies
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSpeciesIdspecies_Create($strControlId = null) {
			$this->lblSpeciesIdspecies = new QLabel($this->objParentObject, $strControlId);
			$this->lblSpeciesIdspecies->Name = QApplication::Translate('Species Idspecies Object');
			$this->lblSpeciesIdspecies->Text = ($this->objSpeciesHasCharacteristic->SpeciesIdspeciesObject) ? $this->objSpeciesHasCharacteristic->SpeciesIdspeciesObject->__toString() : null;
			$this->lblSpeciesIdspecies->Required = true;
			return $this->lblSpeciesIdspecies;
		}

		/**
		 * Create and setup QListBox lstCharacteristicIdcharacteristicObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstCharacteristicIdcharacteristicObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstCharacteristicIdcharacteristicObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstCharacteristicIdcharacteristicObject->Name = QApplication::Translate('Characteristic');
			$this->lstCharacteristicIdcharacteristicObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstCharacteristicIdcharacteristicObject->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objCharacteristicIdcharacteristicObjectCursor = Characteristic::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objCharacteristicIdcharacteristicObject = Characteristic::InstantiateCursor($objCharacteristicIdcharacteristicObjectCursor)) {
				$objListItem = new QListItem($objCharacteristicIdcharacteristicObject->Title, $objCharacteristicIdcharacteristicObject->Idcharacteristic);
				if (($this->objSpeciesHasCharacteristic->CharacteristicIdcharacteristicObject) && ($this->objSpeciesHasCharacteristic->CharacteristicIdcharacteristicObject->Idcharacteristic == $objCharacteristicIdcharacteristicObject->Idcharacteristic))
					$objListItem->Selected = true;
				$this->lstCharacteristicIdcharacteristicObject->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstCharacteristicIdcharacteristicObject;
		}

		/**
		 * Create and setup QLabel lblCharacteristicIdcharacteristic
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCharacteristicIdcharacteristic_Create($strControlId = null) {
			$this->lblCharacteristicIdcharacteristic = new QLabel($this->objParentObject, $strControlId);
			$this->lblCharacteristicIdcharacteristic->Name = QApplication::Translate('Characteristic');
			$this->lblCharacteristicIdcharacteristic->Text = ($this->objSpeciesHasCharacteristic->CharacteristicIdcharacteristicObject) ? $this->objSpeciesHasCharacteristic->CharacteristicIdcharacteristicObject->__toString() : null;
			$this->lblCharacteristicIdcharacteristic->Required = true;
			return $this->lblCharacteristicIdcharacteristic;
		}



		/**
		 * Refresh this MetaControl with Data from the local SpeciesHasCharacteristic object.
		 * @param boolean $blnReload reload SpeciesHasCharacteristic from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objSpeciesHasCharacteristic->Reload();

			if ($this->lstSpeciesIdspeciesObject) {
					$this->lstSpeciesIdspeciesObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstSpeciesIdspeciesObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objSpeciesIdspeciesObjectArray = Species::LoadAll();
				if ($objSpeciesIdspeciesObjectArray) foreach ($objSpeciesIdspeciesObjectArray as $objSpeciesIdspeciesObject) {
					$objListItem = new QListItem($objSpeciesIdspeciesObject->__toString(), $objSpeciesIdspeciesObject->Idspecies);
					if (($this->objSpeciesHasCharacteristic->SpeciesIdspeciesObject) && ($this->objSpeciesHasCharacteristic->SpeciesIdspeciesObject->Idspecies == $objSpeciesIdspeciesObject->Idspecies))
						$objListItem->Selected = true;
					$this->lstSpeciesIdspeciesObject->AddItem($objListItem);
				}
			}
			if ($this->lblSpeciesIdspecies) $this->lblSpeciesIdspecies->Text = ($this->objSpeciesHasCharacteristic->SpeciesIdspeciesObject) ? $this->objSpeciesHasCharacteristic->SpeciesIdspeciesObject->__toString() : null;

			if ($this->lstCharacteristicIdcharacteristicObject) {
					$this->lstCharacteristicIdcharacteristicObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstCharacteristicIdcharacteristicObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objCharacteristicIdcharacteristicObjectArray = Characteristic::LoadAll();
				if ($objCharacteristicIdcharacteristicObjectArray) foreach ($objCharacteristicIdcharacteristicObjectArray as $objCharacteristicIdcharacteristicObject) {
					$objListItem = new QListItem($objCharacteristicIdcharacteristicObject->__toString(), $objCharacteristicIdcharacteristicObject->Idcharacteristic);
					if (($this->objSpeciesHasCharacteristic->CharacteristicIdcharacteristicObject) && ($this->objSpeciesHasCharacteristic->CharacteristicIdcharacteristicObject->Idcharacteristic == $objCharacteristicIdcharacteristicObject->Idcharacteristic))
						$objListItem->Selected = true;
					$this->lstCharacteristicIdcharacteristicObject->AddItem($objListItem);
				}
			}
			if ($this->lblCharacteristicIdcharacteristic) $this->lblCharacteristicIdcharacteristic->Text = ($this->objSpeciesHasCharacteristic->CharacteristicIdcharacteristicObject) ? $this->objSpeciesHasCharacteristic->CharacteristicIdcharacteristicObject->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC SPECIESHASCHARACTERISTIC OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's SpeciesHasCharacteristic instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveSpeciesHasCharacteristic() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstSpeciesIdspeciesObject) $this->objSpeciesHasCharacteristic->SpeciesIdspecies = $this->lstSpeciesIdspeciesObject->SelectedValue;
				if ($this->lstCharacteristicIdcharacteristicObject) $this->objSpeciesHasCharacteristic->CharacteristicIdcharacteristic = $this->lstCharacteristicIdcharacteristicObject->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the SpeciesHasCharacteristic object
				$this->objSpeciesHasCharacteristic->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's SpeciesHasCharacteristic instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteSpeciesHasCharacteristic() {
			$this->objSpeciesHasCharacteristic->Delete();
		}		



		///////////////////////////////////////////////
		// PUBLIC GETTERS and SETTERS
		///////////////////////////////////////////////

		/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				// General MetaControlVariables
				case 'SpeciesHasCharacteristic': return $this->objSpeciesHasCharacteristic;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to SpeciesHasCharacteristic fields -- will be created dynamically if not yet created
				case 'SpeciesIdspeciesControl':
					if (!$this->lstSpeciesIdspeciesObject) return $this->lstSpeciesIdspeciesObject_Create();
					return $this->lstSpeciesIdspeciesObject;
				case 'SpeciesIdspeciesLabel':
					if (!$this->lblSpeciesIdspecies) return $this->lblSpeciesIdspecies_Create();
					return $this->lblSpeciesIdspecies;
				case 'CharacteristicIdcharacteristicControl':
					if (!$this->lstCharacteristicIdcharacteristicObject) return $this->lstCharacteristicIdcharacteristicObject_Create();
					return $this->lstCharacteristicIdcharacteristicObject;
				case 'CharacteristicIdcharacteristicLabel':
					if (!$this->lblCharacteristicIdcharacteristic) return $this->lblCharacteristicIdcharacteristic_Create();
					return $this->lblCharacteristicIdcharacteristic;
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
			try {
				switch ($strName) {
					// Controls that point to SpeciesHasCharacteristic fields
					case 'SpeciesIdspeciesControl':
						return ($this->lstSpeciesIdspeciesObject = QType::Cast($mixValue, 'QControl'));
					case 'CharacteristicIdcharacteristicControl':
						return ($this->lstCharacteristicIdcharacteristicObject = QType::Cast($mixValue, 'QControl'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}
?>