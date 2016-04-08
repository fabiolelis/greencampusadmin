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
	 * property QLabel $IdtreeControl
	 * property-read QLabel $IdtreeLabel
	 * property QListBox $SpeciesIdspeciesControl
	 * property-read QLabel $SpeciesIdspeciesLabel
	 * property QTextBox $LongitudeControl
	 * property-read QLabel $LongitudeLabel
	 * property QTextBox $LatitudeControl
	 * property-read QLabel $LatitudeLabel
	 * property QIntegerTextBox $AgeControl
	 * property-read QLabel $AgeLabel
	 * property QTextBox $IdentifierControl
	 * property-read QLabel $IdentifierLabel
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
         * @var QLabel lblIdtree;
         * @access protected
         */
		protected $lblIdtree;

        /**
         * @var QListBox lstSpeciesIdspeciesObject;
         * @access protected
         */
		protected $lstSpeciesIdspeciesObject;

        /**
         * @var QTextBox txtLongitude;
         * @access protected
         */
		protected $txtLongitude;

        /**
         * @var QTextBox txtLatitude;
         * @access protected
         */
		protected $txtLatitude;

        /**
         * @var QIntegerTextBox txtAge;
         * @access protected
         */
		protected $txtAge;

        /**
         * @var QTextBox txtIdentifier;
         * @access protected
         */
		protected $txtIdentifier;


		// Controls that allow the viewing of Tree's individual data fields
        /**
         * @var QLabel lblSpeciesIdspecies
         * @access protected
         */
		protected $lblSpeciesIdspecies;

        /**
         * @var QLabel lblLongitude
         * @access protected
         */
		protected $lblLongitude;

        /**
         * @var QLabel lblLatitude
         * @access protected
         */
		protected $lblLatitude;

        /**
         * @var QLabel lblAge
         * @access protected
         */
		protected $lblAge;

        /**
         * @var QLabel lblIdentifier
         * @access protected
         */
		protected $lblIdentifier;


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
		 * @param integer $intIdtree primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Tree object creation - defaults to CreateOrEdit
 		 * @return TreeMetaControl
		 */
		public static function Create($objParentObject, $intIdtree = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdtree)) {
				$objTree = Tree::Load($intIdtree);

				// Tree was found -- return it!
				if ($objTree)
					return new TreeMetaControl($objParentObject, $objTree);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Tree object with PK arguments: ' . $intIdtree);

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
			$intIdtree = QApplication::PathInfo(0);
			return TreeMetaControl::Create($objParentObject, $intIdtree, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TreeMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Tree object creation - defaults to CreateOrEdit
		 * @return TreeMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdtree = QApplication::QueryString('intIdtree');
			return TreeMetaControl::Create($objParentObject, $intIdtree, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdtree
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdtree_Create($strControlId = null) {
			$this->lblIdtree = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdtree->Name = QApplication::Translate('Idtree');
			if ($this->blnEditMode)
				$this->lblIdtree->Text = $this->objTree->Idtree;
			else
				$this->lblIdtree->Text = 'N/A';
			return $this->lblIdtree;
		}

		/**
		 * Create and setup QListBox lstSpeciesIdspeciesObject
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstSpeciesIdspeciesObject_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstSpeciesIdspeciesObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstSpeciesIdspeciesObject->Name = QApplication::Translate('Species Idspecies Object');
			$this->lstSpeciesIdspeciesObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstSpeciesIdspeciesObject->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objSpeciesIdspeciesObjectCursor = Species::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objSpeciesIdspeciesObject = Species::InstantiateCursor($objSpeciesIdspeciesObjectCursor)) {
				$objListItem = new QListItem($objSpeciesIdspeciesObject->__toString(), $objSpeciesIdspeciesObject->Idspecies);
				if (($this->objTree->SpeciesIdspeciesObject) && ($this->objTree->SpeciesIdspeciesObject->Idspecies == $objSpeciesIdspeciesObject->Idspecies))
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
			$this->lblSpeciesIdspecies->Text = ($this->objTree->SpeciesIdspeciesObject) ? $this->objTree->SpeciesIdspeciesObject->__toString() : null;
			$this->lblSpeciesIdspecies->Required = true;
			return $this->lblSpeciesIdspecies;
		}

		/**
		 * Create and setup QTextBox txtLongitude
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLongitude_Create($strControlId = null) {
			$this->txtLongitude = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLongitude->Name = QApplication::Translate('Longitude');
			$this->txtLongitude->Text = $this->objTree->Longitude;
			$this->txtLongitude->MaxLength = Tree::LongitudeMaxLength;
			return $this->txtLongitude;
		}

		/**
		 * Create and setup QLabel lblLongitude
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLongitude_Create($strControlId = null) {
			$this->lblLongitude = new QLabel($this->objParentObject, $strControlId);
			$this->lblLongitude->Name = QApplication::Translate('Longitude');
			$this->lblLongitude->Text = $this->objTree->Longitude;
			return $this->lblLongitude;
		}

		/**
		 * Create and setup QTextBox txtLatitude
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLatitude_Create($strControlId = null) {
			$this->txtLatitude = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLatitude->Name = QApplication::Translate('Latitude');
			$this->txtLatitude->Text = $this->objTree->Latitude;
			$this->txtLatitude->MaxLength = Tree::LatitudeMaxLength;
			return $this->txtLatitude;
		}

		/**
		 * Create and setup QLabel lblLatitude
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLatitude_Create($strControlId = null) {
			$this->lblLatitude = new QLabel($this->objParentObject, $strControlId);
			$this->lblLatitude->Name = QApplication::Translate('Latitude');
			$this->lblLatitude->Text = $this->objTree->Latitude;
			return $this->lblLatitude;
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
		 * Create and setup QTextBox txtIdentifier
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtIdentifier_Create($strControlId = null) {
			$this->txtIdentifier = new QTextBox($this->objParentObject, $strControlId);
			$this->txtIdentifier->Name = QApplication::Translate('Identifier');
			$this->txtIdentifier->Text = $this->objTree->Identifier;
			$this->txtIdentifier->MaxLength = Tree::IdentifierMaxLength;
			return $this->txtIdentifier;
		}

		/**
		 * Create and setup QLabel lblIdentifier
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdentifier_Create($strControlId = null) {
			$this->lblIdentifier = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdentifier->Name = QApplication::Translate('Identifier');
			$this->lblIdentifier->Text = $this->objTree->Identifier;
			return $this->lblIdentifier;
		}



		/**
		 * Refresh this MetaControl with Data from the local Tree object.
		 * @param boolean $blnReload reload Tree from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objTree->Reload();

			if ($this->lblIdtree) if ($this->blnEditMode) $this->lblIdtree->Text = $this->objTree->Idtree;

			if ($this->lstSpeciesIdspeciesObject) {
					$this->lstSpeciesIdspeciesObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstSpeciesIdspeciesObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objSpeciesIdspeciesObjectArray = Species::LoadAll();
				if ($objSpeciesIdspeciesObjectArray) foreach ($objSpeciesIdspeciesObjectArray as $objSpeciesIdspeciesObject) {
					$objListItem = new QListItem($objSpeciesIdspeciesObject->__toString(), $objSpeciesIdspeciesObject->Idspecies);
					if (($this->objTree->SpeciesIdspeciesObject) && ($this->objTree->SpeciesIdspeciesObject->Idspecies == $objSpeciesIdspeciesObject->Idspecies))
						$objListItem->Selected = true;
					$this->lstSpeciesIdspeciesObject->AddItem($objListItem);
				}
			}
			if ($this->lblSpeciesIdspecies) $this->lblSpeciesIdspecies->Text = ($this->objTree->SpeciesIdspeciesObject) ? $this->objTree->SpeciesIdspeciesObject->__toString() : null;

			if ($this->txtLongitude) $this->txtLongitude->Text = $this->objTree->Longitude;
			if ($this->lblLongitude) $this->lblLongitude->Text = $this->objTree->Longitude;

			if ($this->txtLatitude) $this->txtLatitude->Text = $this->objTree->Latitude;
			if ($this->lblLatitude) $this->lblLatitude->Text = $this->objTree->Latitude;

			if ($this->txtAge) $this->txtAge->Text = $this->objTree->Age;
			if ($this->lblAge) $this->lblAge->Text = $this->objTree->Age;

			if ($this->txtIdentifier) $this->txtIdentifier->Text = $this->objTree->Identifier;
			if ($this->lblIdentifier) $this->lblIdentifier->Text = $this->objTree->Identifier;

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
				if ($this->lstSpeciesIdspeciesObject) $this->objTree->SpeciesIdspecies = $this->lstSpeciesIdspeciesObject->SelectedValue;
				if ($this->txtLongitude) $this->objTree->Longitude = $this->txtLongitude->Text;
				if ($this->txtLatitude) $this->objTree->Latitude = $this->txtLatitude->Text;
				if ($this->txtAge) $this->objTree->Age = $this->txtAge->Text;
				if ($this->txtIdentifier) $this->objTree->Identifier = $this->txtIdentifier->Text;

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
				case 'IdtreeControl':
					if (!$this->lblIdtree) return $this->lblIdtree_Create();
					return $this->lblIdtree;
				case 'IdtreeLabel':
					if (!$this->lblIdtree) return $this->lblIdtree_Create();
					return $this->lblIdtree;
				case 'SpeciesIdspeciesControl':
					if (!$this->lstSpeciesIdspeciesObject) return $this->lstSpeciesIdspeciesObject_Create();
					return $this->lstSpeciesIdspeciesObject;
				case 'SpeciesIdspeciesLabel':
					if (!$this->lblSpeciesIdspecies) return $this->lblSpeciesIdspecies_Create();
					return $this->lblSpeciesIdspecies;
				case 'LongitudeControl':
					if (!$this->txtLongitude) return $this->txtLongitude_Create();
					return $this->txtLongitude;
				case 'LongitudeLabel':
					if (!$this->lblLongitude) return $this->lblLongitude_Create();
					return $this->lblLongitude;
				case 'LatitudeControl':
					if (!$this->txtLatitude) return $this->txtLatitude_Create();
					return $this->txtLatitude;
				case 'LatitudeLabel':
					if (!$this->lblLatitude) return $this->lblLatitude_Create();
					return $this->lblLatitude;
				case 'AgeControl':
					if (!$this->txtAge) return $this->txtAge_Create();
					return $this->txtAge;
				case 'AgeLabel':
					if (!$this->lblAge) return $this->lblAge_Create();
					return $this->lblAge;
				case 'IdentifierControl':
					if (!$this->txtIdentifier) return $this->txtIdentifier_Create();
					return $this->txtIdentifier;
				case 'IdentifierLabel':
					if (!$this->lblIdentifier) return $this->lblIdentifier_Create();
					return $this->lblIdentifier;
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
					case 'IdtreeControl':
						return ($this->lblIdtree = QType::Cast($mixValue, 'QControl'));
					case 'SpeciesIdspeciesControl':
						return ($this->lstSpeciesIdspeciesObject = QType::Cast($mixValue, 'QControl'));
					case 'LongitudeControl':
						return ($this->txtLongitude = QType::Cast($mixValue, 'QControl'));
					case 'LatitudeControl':
						return ($this->txtLatitude = QType::Cast($mixValue, 'QControl'));
					case 'AgeControl':
						return ($this->txtAge = QType::Cast($mixValue, 'QControl'));
					case 'IdentifierControl':
						return ($this->txtIdentifier = QType::Cast($mixValue, 'QControl'));
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