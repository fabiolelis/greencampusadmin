<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Characteristic class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Characteristic object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a CharacteristicMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Characteristic $Characteristic the actual Characteristic data class being edited
	 * property QLabel $IdcharacteristicControl
	 * property-read QLabel $IdcharacteristicLabel
	 * property QTextBox $TitleControl
	 * property-read QLabel $TitleLabel
	 * property QTextBox $DescriptionControl
	 * property-read QLabel $DescriptionLabel
	 * property QTextBox $PicturesPathControl
	 * property-read QLabel $PicturesPathLabel
	 * property QListBox $CharacteristicIdcharacteristicControl
	 * property-read QLabel $CharacteristicIdcharacteristicLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class CharacteristicMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Characteristic objCharacteristic
		 * @access protected
		 */
		protected $objCharacteristic;

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

		// Controls that allow the editing of Characteristic's individual data fields
        /**
         * @var QLabel lblIdcharacteristic;
         * @access protected
         */
		protected $lblIdcharacteristic;

        /**
         * @var QTextBox txtTitle;
         * @access protected
         */
		protected $txtTitle;

        /**
         * @var QTextBox txtDescription;
         * @access protected
         */
		protected $txtDescription;

        /**
         * @var QTextBox txtPicturesPath;
         * @access protected
         */
		protected $txtPicturesPath;

        /**
         * @var QListBox lstCharacteristicIdcharacteristicObject;
         * @access protected
         */
		protected $lstCharacteristicIdcharacteristicObject;


		// Controls that allow the viewing of Characteristic's individual data fields
        /**
         * @var QLabel lblTitle
         * @access protected
         */
		protected $lblTitle;

        /**
         * @var QLabel lblDescription
         * @access protected
         */
		protected $lblDescription;

        /**
         * @var QLabel lblPicturesPath
         * @access protected
         */
		protected $lblPicturesPath;

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
		 * CharacteristicMetaControl to edit a single Characteristic object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Characteristic object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CharacteristicMetaControl
		 * @param Characteristic $objCharacteristic new or existing Characteristic object
		 */
		 public function __construct($objParentObject, Characteristic $objCharacteristic) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this CharacteristicMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Characteristic object
			$this->objCharacteristic = $objCharacteristic;

			// Figure out if we're Editing or Creating New
			if ($this->objCharacteristic->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this CharacteristicMetaControl
		 * @param integer $intIdcharacteristic primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Characteristic object creation - defaults to CreateOrEdit
 		 * @return CharacteristicMetaControl
		 */
		public static function Create($objParentObject, $intIdcharacteristic = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdcharacteristic)) {
				$objCharacteristic = Characteristic::Load($intIdcharacteristic);

				// Characteristic was found -- return it!
				if ($objCharacteristic)
					return new CharacteristicMetaControl($objParentObject, $objCharacteristic);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Characteristic object with PK arguments: ' . $intIdcharacteristic);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new CharacteristicMetaControl($objParentObject, new Characteristic());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CharacteristicMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Characteristic object creation - defaults to CreateOrEdit
		 * @return CharacteristicMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdcharacteristic = QApplication::PathInfo(0);
			return CharacteristicMetaControl::Create($objParentObject, $intIdcharacteristic, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CharacteristicMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Characteristic object creation - defaults to CreateOrEdit
		 * @return CharacteristicMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdcharacteristic = QApplication::QueryString('intIdcharacteristic');
			return CharacteristicMetaControl::Create($objParentObject, $intIdcharacteristic, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdcharacteristic
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdcharacteristic_Create($strControlId = null) {
			$this->lblIdcharacteristic = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdcharacteristic->Name = QApplication::Translate('Idcharacteristic');
			if ($this->blnEditMode)
				$this->lblIdcharacteristic->Text = $this->objCharacteristic->Idcharacteristic;
			else
				$this->lblIdcharacteristic->Text = 'N/A';
			return $this->lblIdcharacteristic;
		}

		/**
		 * Create and setup QTextBox txtTitle
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTitle_Create($strControlId = null) {
			$this->txtTitle = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTitle->Name = QApplication::Translate('Title');
			$this->txtTitle->Text = $this->objCharacteristic->Title;
			$this->txtTitle->MaxLength = Characteristic::TitleMaxLength;
			return $this->txtTitle;
		}

		/**
		 * Create and setup QLabel lblTitle
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTitle_Create($strControlId = null) {
			$this->lblTitle = new QLabel($this->objParentObject, $strControlId);
			$this->lblTitle->Name = QApplication::Translate('Title');
			$this->lblTitle->Text = $this->objCharacteristic->Title;
			return $this->lblTitle;
		}

		/**
		 * Create and setup QTextBox txtDescription
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDescription_Create($strControlId = null) {
			$this->txtDescription = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDescription->Name = QApplication::Translate('Description');
			$this->txtDescription->Text = $this->objCharacteristic->Description;
			$this->txtDescription->MaxLength = Characteristic::DescriptionMaxLength;
			return $this->txtDescription;
		}

		/**
		 * Create and setup QLabel lblDescription
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDescription_Create($strControlId = null) {
			$this->lblDescription = new QLabel($this->objParentObject, $strControlId);
			$this->lblDescription->Name = QApplication::Translate('Description');
			$this->lblDescription->Text = $this->objCharacteristic->Description;
			return $this->lblDescription;
		}

		/**
		 * Create and setup QTextBox txtPicturesPath
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPicturesPath_Create($strControlId = null) {
			$this->txtPicturesPath = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPicturesPath->Name = QApplication::Translate('Pictures Path');
			$this->txtPicturesPath->Text = $this->objCharacteristic->PicturesPath;
			$this->txtPicturesPath->MaxLength = Characteristic::PicturesPathMaxLength;
			return $this->txtPicturesPath;
		}

		/**
		 * Create and setup QLabel lblPicturesPath
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPicturesPath_Create($strControlId = null) {
			$this->lblPicturesPath = new QLabel($this->objParentObject, $strControlId);
			$this->lblPicturesPath->Name = QApplication::Translate('Pictures Path');
			$this->lblPicturesPath->Text = $this->objCharacteristic->PicturesPath;
			return $this->lblPicturesPath;
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
			$this->lstCharacteristicIdcharacteristicObject->Name = QApplication::Translate('Parent characteristic');
			$this->lstCharacteristicIdcharacteristicObject->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objCharacteristicIdcharacteristicObjectCursor = Characteristic::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objCharacteristicIdcharacteristicObject = Characteristic::InstantiateCursor($objCharacteristicIdcharacteristicObjectCursor)) {
				$objListItem = new QListItem($objCharacteristicIdcharacteristicObject->Title, $objCharacteristicIdcharacteristicObject->Idcharacteristic);
				if (($this->objCharacteristic->CharacteristicIdcharacteristicObject) && ($this->objCharacteristic->CharacteristicIdcharacteristicObject->Idcharacteristic == $objCharacteristicIdcharacteristicObject->Idcharacteristic))
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
			$this->lblCharacteristicIdcharacteristic->Name = QApplication::Translate('Characteristic Idcharacteristic Object');
			$this->lblCharacteristicIdcharacteristic->Text = ($this->objCharacteristic->CharacteristicIdcharacteristicObject) ? $this->objCharacteristic->CharacteristicIdcharacteristicObject->__toString() : null;
			return $this->lblCharacteristicIdcharacteristic;
		}



		/**
		 * Refresh this MetaControl with Data from the local Characteristic object.
		 * @param boolean $blnReload reload Characteristic from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objCharacteristic->Reload();

			if ($this->lblIdcharacteristic) if ($this->blnEditMode) $this->lblIdcharacteristic->Text = $this->objCharacteristic->Idcharacteristic;

			if ($this->txtTitle) $this->txtTitle->Text = $this->objCharacteristic->Title;
			if ($this->lblTitle) $this->lblTitle->Text = $this->objCharacteristic->Title;

			if ($this->txtDescription) $this->txtDescription->Text = $this->objCharacteristic->Description;
			if ($this->lblDescription) $this->lblDescription->Text = $this->objCharacteristic->Description;

			if ($this->txtPicturesPath) $this->txtPicturesPath->Text = $this->objCharacteristic->PicturesPath;
			if ($this->lblPicturesPath) $this->lblPicturesPath->Text = $this->objCharacteristic->PicturesPath;

			if ($this->lstCharacteristicIdcharacteristicObject) {
					$this->lstCharacteristicIdcharacteristicObject->RemoveAllItems();
				$this->lstCharacteristicIdcharacteristicObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objCharacteristicIdcharacteristicObjectArray = Characteristic::LoadAll();
				if ($objCharacteristicIdcharacteristicObjectArray) foreach ($objCharacteristicIdcharacteristicObjectArray as $objCharacteristicIdcharacteristicObject) {
					$objListItem = new QListItem($objCharacteristicIdcharacteristicObject->__toString(), $objCharacteristicIdcharacteristicObject->Idcharacteristic);
					if (($this->objCharacteristic->CharacteristicIdcharacteristicObject) && ($this->objCharacteristic->CharacteristicIdcharacteristicObject->Idcharacteristic == $objCharacteristicIdcharacteristicObject->Idcharacteristic))
						$objListItem->Selected = true;
					$this->lstCharacteristicIdcharacteristicObject->AddItem($objListItem);
				}
			}
			if ($this->lblCharacteristicIdcharacteristic) $this->lblCharacteristicIdcharacteristic->Text = ($this->objCharacteristic->CharacteristicIdcharacteristicObject) ? $this->objCharacteristic->CharacteristicIdcharacteristicObject->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC CHARACTERISTIC OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Characteristic instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveCharacteristic() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtTitle) $this->objCharacteristic->Title = $this->txtTitle->Text;
				if ($this->txtDescription) $this->objCharacteristic->Description = $this->txtDescription->Text;
				if ($this->txtPicturesPath) $this->objCharacteristic->PicturesPath = $this->txtPicturesPath->Text;
				if ($this->lstCharacteristicIdcharacteristicObject) $this->objCharacteristic->CharacteristicIdcharacteristic = $this->lstCharacteristicIdcharacteristicObject->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Characteristic object
				$this->objCharacteristic->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Characteristic instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteCharacteristic() {
			$this->objCharacteristic->Delete();
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
				case 'Characteristic': return $this->objCharacteristic;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Characteristic fields -- will be created dynamically if not yet created
				case 'IdcharacteristicControl':
					if (!$this->lblIdcharacteristic) return $this->lblIdcharacteristic_Create();
					return $this->lblIdcharacteristic;
				case 'IdcharacteristicLabel':
					if (!$this->lblIdcharacteristic) return $this->lblIdcharacteristic_Create();
					return $this->lblIdcharacteristic;
				case 'TitleControl':
					if (!$this->txtTitle) return $this->txtTitle_Create();
					return $this->txtTitle;
				case 'TitleLabel':
					if (!$this->lblTitle) return $this->lblTitle_Create();
					return $this->lblTitle;
				case 'DescriptionControl':
					if (!$this->txtDescription) return $this->txtDescription_Create();
					return $this->txtDescription;
				case 'DescriptionLabel':
					if (!$this->lblDescription) return $this->lblDescription_Create();
					return $this->lblDescription;
				case 'PicturesPathControl':
					if (!$this->txtPicturesPath) return $this->txtPicturesPath_Create();
					return $this->txtPicturesPath;
				case 'PicturesPathLabel':
					if (!$this->lblPicturesPath) return $this->lblPicturesPath_Create();
					return $this->lblPicturesPath;
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
					// Controls that point to Characteristic fields
					case 'IdcharacteristicControl':
						return ($this->lblIdcharacteristic = QType::Cast($mixValue, 'QControl'));
					case 'TitleControl':
						return ($this->txtTitle = QType::Cast($mixValue, 'QControl'));
					case 'DescriptionControl':
						return ($this->txtDescription = QType::Cast($mixValue, 'QControl'));
					case 'PicturesPathControl':
						return ($this->txtPicturesPath = QType::Cast($mixValue, 'QControl'));
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