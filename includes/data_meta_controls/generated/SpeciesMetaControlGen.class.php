<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Species class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Species object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a SpeciesMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Species $Species the actual Species data class being edited
	 * property QLabel $IdspeciesControl
	 * property-read QLabel $IdspeciesLabel
	 * property QTextBox $NameControl
	 * property-read QLabel $NameLabel
	 * property QTextBox $IrishnameControl
	 * property-read QLabel $IrishnameLabel
	 * property QTextBox $LatinNameControl
	 * property-read QLabel $LatinNameLabel
	 * property QTextBox $DescriptionControl
	 * property-read QLabel $DescriptionLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class SpeciesMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Species objSpecies
		 * @access protected
		 */
		protected $objSpecies;

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

		// Controls that allow the editing of Species's individual data fields
        /**
         * @var QLabel lblIdspecies;
         * @access protected
         */
		protected $lblIdspecies;

        /**
         * @var QTextBox txtName;
         * @access protected
         */
		protected $txtName;

        /**
         * @var QTextBox txtIrishname;
         * @access protected
         */
		protected $txtIrishname;

        /**
         * @var QTextBox txtLatinName;
         * @access protected
         */
		protected $txtLatinName;

        /**
         * @var QTextBox txtDescription;
         * @access protected
         */
		protected $txtDescription;


		// Controls that allow the viewing of Species's individual data fields
        /**
         * @var QLabel lblName
         * @access protected
         */
		protected $lblName;

        /**
         * @var QLabel lblIrishname
         * @access protected
         */
		protected $lblIrishname;

        /**
         * @var QLabel lblLatinName
         * @access protected
         */
		protected $lblLatinName;

        /**
         * @var QLabel lblDescription
         * @access protected
         */
		protected $lblDescription;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * SpeciesMetaControl to edit a single Species object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Species object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this SpeciesMetaControl
		 * @param Species $objSpecies new or existing Species object
		 */
		 public function __construct($objParentObject, Species $objSpecies) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this SpeciesMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Species object
			$this->objSpecies = $objSpecies;

			// Figure out if we're Editing or Creating New
			if ($this->objSpecies->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this SpeciesMetaControl
		 * @param integer $intIdspecies primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Species object creation - defaults to CreateOrEdit
 		 * @return SpeciesMetaControl
		 */
		public static function Create($objParentObject, $intIdspecies = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdspecies)) {
				$objSpecies = Species::Load($intIdspecies);

				// Species was found -- return it!
				if ($objSpecies)
					return new SpeciesMetaControl($objParentObject, $objSpecies);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Species object with PK arguments: ' . $intIdspecies);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new SpeciesMetaControl($objParentObject, new Species());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this SpeciesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Species object creation - defaults to CreateOrEdit
		 * @return SpeciesMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdspecies = QApplication::PathInfo(0);
			return SpeciesMetaControl::Create($objParentObject, $intIdspecies, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this SpeciesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Species object creation - defaults to CreateOrEdit
		 * @return SpeciesMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdspecies = QApplication::QueryString('intIdspecies');
			return SpeciesMetaControl::Create($objParentObject, $intIdspecies, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdspecies
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdspecies_Create($strControlId = null) {
			$this->lblIdspecies = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdspecies->Name = QApplication::Translate('Idspecies');
			if ($this->blnEditMode)
				$this->lblIdspecies->Text = $this->objSpecies->Idspecies;
			else
				$this->lblIdspecies->Text = 'N/A';
			return $this->lblIdspecies;
		}

		/**
		 * Create and setup QTextBox txtName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtName_Create($strControlId = null) {
			$this->txtName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtName->Name = QApplication::Translate('Name');
			$this->txtName->Text = $this->objSpecies->Name;
			$this->txtName->Required = true;
			$this->txtName->MaxLength = Species::NameMaxLength;
			return $this->txtName;
		}

		/**
		 * Create and setup QLabel lblName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblName_Create($strControlId = null) {
			$this->lblName = new QLabel($this->objParentObject, $strControlId);
			$this->lblName->Name = QApplication::Translate('Name');
			$this->lblName->Text = $this->objSpecies->Name;
			$this->lblName->Required = true;
			return $this->lblName;
		}

		/**
		 * Create and setup QTextBox txtIrishname
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtIrishname_Create($strControlId = null) {
			$this->txtIrishname = new QTextBox($this->objParentObject, $strControlId);
			$this->txtIrishname->Name = QApplication::Translate('Irishname');
			$this->txtIrishname->Text = $this->objSpecies->Irishname;
			$this->txtIrishname->MaxLength = Species::IrishnameMaxLength;
			return $this->txtIrishname;
		}

		/**
		 * Create and setup QLabel lblIrishname
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIrishname_Create($strControlId = null) {
			$this->lblIrishname = new QLabel($this->objParentObject, $strControlId);
			$this->lblIrishname->Name = QApplication::Translate('Irishname');
			$this->lblIrishname->Text = $this->objSpecies->Irishname;
			return $this->lblIrishname;
		}

		/**
		 * Create and setup QTextBox txtLatinName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLatinName_Create($strControlId = null) {
			$this->txtLatinName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLatinName->Name = QApplication::Translate('Latin Name');
			$this->txtLatinName->Text = $this->objSpecies->LatinName;
			$this->txtLatinName->MaxLength = Species::LatinNameMaxLength;
			return $this->txtLatinName;
		}

		/**
		 * Create and setup QLabel lblLatinName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLatinName_Create($strControlId = null) {
			$this->lblLatinName = new QLabel($this->objParentObject, $strControlId);
			$this->lblLatinName->Name = QApplication::Translate('Latin Name');
			$this->lblLatinName->Text = $this->objSpecies->LatinName;
			return $this->lblLatinName;
		}

		/**
		 * Create and setup QTextBox txtDescription
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDescription_Create($strControlId = null) {
			$this->txtDescription = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDescription->Name = QApplication::Translate('Description');
			$this->txtDescription->Text = $this->objSpecies->Description;
			$this->txtDescription->MaxLength = Species::DescriptionMaxLength;
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
			$this->lblDescription->Text = $this->objSpecies->Description;
			return $this->lblDescription;
		}



		/**
		 * Refresh this MetaControl with Data from the local Species object.
		 * @param boolean $blnReload reload Species from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objSpecies->Reload();

			if ($this->lblIdspecies) if ($this->blnEditMode) $this->lblIdspecies->Text = $this->objSpecies->Idspecies;

			if ($this->txtName) $this->txtName->Text = $this->objSpecies->Name;
			if ($this->lblName) $this->lblName->Text = $this->objSpecies->Name;

			if ($this->txtIrishname) $this->txtIrishname->Text = $this->objSpecies->Irishname;
			if ($this->lblIrishname) $this->lblIrishname->Text = $this->objSpecies->Irishname;

			if ($this->txtLatinName) $this->txtLatinName->Text = $this->objSpecies->LatinName;
			if ($this->lblLatinName) $this->lblLatinName->Text = $this->objSpecies->LatinName;

			if ($this->txtDescription) $this->txtDescription->Text = $this->objSpecies->Description;
			if ($this->lblDescription) $this->lblDescription->Text = $this->objSpecies->Description;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC SPECIES OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Species instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveSpecies() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtName) $this->objSpecies->Name = $this->txtName->Text;
				if ($this->txtIrishname) $this->objSpecies->Irishname = $this->txtIrishname->Text;
				if ($this->txtLatinName) $this->objSpecies->LatinName = $this->txtLatinName->Text;
				if ($this->txtDescription) $this->objSpecies->Description = $this->txtDescription->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Species object
				$this->objSpecies->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Species instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteSpecies() {
			$this->objSpecies->Delete();
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
				case 'Species': return $this->objSpecies;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Species fields -- will be created dynamically if not yet created
				case 'IdspeciesControl':
					if (!$this->lblIdspecies) return $this->lblIdspecies_Create();
					return $this->lblIdspecies;
				case 'IdspeciesLabel':
					if (!$this->lblIdspecies) return $this->lblIdspecies_Create();
					return $this->lblIdspecies;
				case 'NameControl':
					if (!$this->txtName) return $this->txtName_Create();
					return $this->txtName;
				case 'NameLabel':
					if (!$this->lblName) return $this->lblName_Create();
					return $this->lblName;
				case 'IrishnameControl':
					if (!$this->txtIrishname) return $this->txtIrishname_Create();
					return $this->txtIrishname;
				case 'IrishnameLabel':
					if (!$this->lblIrishname) return $this->lblIrishname_Create();
					return $this->lblIrishname;
				case 'LatinNameControl':
					if (!$this->txtLatinName) return $this->txtLatinName_Create();
					return $this->txtLatinName;
				case 'LatinNameLabel':
					if (!$this->lblLatinName) return $this->lblLatinName_Create();
					return $this->lblLatinName;
				case 'DescriptionControl':
					if (!$this->txtDescription) return $this->txtDescription_Create();
					return $this->txtDescription;
				case 'DescriptionLabel':
					if (!$this->lblDescription) return $this->lblDescription_Create();
					return $this->lblDescription;
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
					// Controls that point to Species fields
					case 'IdspeciesControl':
						return ($this->lblIdspecies = QType::Cast($mixValue, 'QControl'));
					case 'NameControl':
						return ($this->txtName = QType::Cast($mixValue, 'QControl'));
					case 'IrishnameControl':
						return ($this->txtIrishname = QType::Cast($mixValue, 'QControl'));
					case 'LatinNameControl':
						return ($this->txtLatinName = QType::Cast($mixValue, 'QControl'));
					case 'DescriptionControl':
						return ($this->txtDescription = QType::Cast($mixValue, 'QControl'));
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