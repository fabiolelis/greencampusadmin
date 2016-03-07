<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Tree class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Tree object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a TreeMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Tree $Tree the actual Tree data class being edited
	 * property QLabel $IdTreeControl
	 * property-read QLabel $IdTreeLabel
	 * property QTextBox $NameControl
	 * property-read QLabel $NameLabel
	 * property QIntegerTextBox $AgeControl
	 * property-read QLabel $AgeLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class TreeMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Tree objTree
		 * @access protected
		 */
		protected $objTree;

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

		// Controls that allow the editing of Tree's individual data fields
        /**
         * @var QLabel lblIdTree;
         * @access protected
         */
		protected $lblIdTree;

        /**
         * @var QTextBox txtName;
         * @access protected
         */
		protected $txtName;

        /**
         * @var QIntegerTextBox txtAge;
         * @access protected
         */
		protected $txtAge;


		// Controls that allow the viewing of Tree's individual data fields
        /**
         * @var QLabel lblName
         * @access protected
         */
		protected $lblName;

        /**
         * @var QLabel lblAge
         * @access protected
         */
		protected $lblAge;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * TreeMetaControl to edit a single Tree object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Tree object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TreeMetaControl
		 * @param Tree $objTree new or existing Tree object
		 */
		 public function __construct($objParentObject, Tree $objTree) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this TreeMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Tree object
			$this->objTree = $objTree;

			// Figure out if we're Editing or Creating New
			if ($this->objTree->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this TreeMetaControl
		 * @param integer $intIdTree primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Tree object creation - defaults to CreateOrEdit
 		 * @return TreeMetaControl
		 */
		public static function Create($objParentObject, $intIdTree = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdTree)) {
				$objTree = Tree::Load($intIdTree);

				// Tree was found -- return it!
				if ($objTree)
					return new TreeMetaControl($objParentObject, $objTree);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Tree object with PK arguments: ' . $intIdTree);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new TreeMetaControl($objParentObject, new Tree());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TreeMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Tree object creation - defaults to CreateOrEdit
		 * @return TreeMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdTree = QApplication::PathInfo(0);
			return TreeMetaControl::Create($objParentObject, $intIdTree, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TreeMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Tree object creation - defaults to CreateOrEdit
		 * @return TreeMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdTree = QApplication::QueryString('intIdTree');
			return TreeMetaControl::Create($objParentObject, $intIdTree, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdTree
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdTree_Create($strControlId = null) {
			$this->lblIdTree = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdTree->Name = QApplication::Translate('Id Tree');
			if ($this->blnEditMode)
				$this->lblIdTree->Text = $this->objTree->IdTree;
			else
				$this->lblIdTree->Text = 'N/A';
			return $this->lblIdTree;
		}

		/**
		 * Create and setup QTextBox txtName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtName_Create($strControlId = null) {
			$this->txtName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtName->Name = QApplication::Translate('Name');
			$this->txtName->Text = $this->objTree->Name;
			$this->txtName->MaxLength = Tree::NameMaxLength;
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
			$this->lblName->Text = $this->objTree->Name;
			return $this->lblName;
		}

		/**
		 * Create and setup QIntegerTextBox txtAge
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtAge_Create($strControlId = null) {
			$this->txtAge = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtAge->Name = QApplication::Translate('Age');
			$this->txtAge->Text = $this->objTree->Age;
			return $this->txtAge;
		}

		/**
		 * Create and setup QLabel lblAge
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblAge_Create($strControlId = null, $strFormat = null) {
			$this->lblAge = new QLabel($this->objParentObject, $strControlId);
			$this->lblAge->Name = QApplication::Translate('Age');
			$this->lblAge->Text = $this->objTree->Age;
			$this->lblAge->Format = $strFormat;
			return $this->lblAge;
		}



		/**
		 * Refresh this MetaControl with Data from the local Tree object.
		 * @param boolean $blnReload reload Tree from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objTree->Reload();

			if ($this->lblIdTree) if ($this->blnEditMode) $this->lblIdTree->Text = $this->objTree->IdTree;

			if ($this->txtName) $this->txtName->Text = $this->objTree->Name;
			if ($this->lblName) $this->lblName->Text = $this->objTree->Name;

			if ($this->txtAge) $this->txtAge->Text = $this->objTree->Age;
			if ($this->lblAge) $this->lblAge->Text = $this->objTree->Age;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC TREE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Tree instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveTree() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtName) $this->objTree->Name = $this->txtName->Text;
				if ($this->txtAge) $this->objTree->Age = $this->txtAge->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Tree object
				$this->objTree->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Tree instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteTree() {
			$this->objTree->Delete();
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
				case 'Tree': return $this->objTree;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Tree fields -- will be created dynamically if not yet created
				case 'IdTreeControl':
					if (!$this->lblIdTree) return $this->lblIdTree_Create();
					return $this->lblIdTree;
				case 'IdTreeLabel':
					if (!$this->lblIdTree) return $this->lblIdTree_Create();
					return $this->lblIdTree;
				case 'NameControl':
					if (!$this->txtName) return $this->txtName_Create();
					return $this->txtName;
				case 'NameLabel':
					if (!$this->lblName) return $this->lblName_Create();
					return $this->lblName;
				case 'AgeControl':
					if (!$this->txtAge) return $this->txtAge_Create();
					return $this->txtAge;
				case 'AgeLabel':
					if (!$this->lblAge) return $this->lblAge_Create();
					return $this->lblAge;
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
					// Controls that point to Tree fields
					case 'IdTreeControl':
						return ($this->lblIdTree = QType::Cast($mixValue, 'QControl'));
					case 'NameControl':
						return ($this->txtName = QType::Cast($mixValue, 'QControl'));
					case 'AgeControl':
						return ($this->txtAge = QType::Cast($mixValue, 'QControl'));
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