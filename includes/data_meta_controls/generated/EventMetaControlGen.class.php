<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Event class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Event object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a EventMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Event $Event the actual Event data class being edited
	 * property QLabel $IdeventControl
	 * property-read QLabel $IdeventLabel
	 * property QDateTimePicker $DateTimeControl
	 * property-read QLabel $DateTimeLabel
	 * property QTextBox $LocationControl
	 * property-read QLabel $LocationLabel
	 * property QTextBox $DescriptionControl
	 * property-read QLabel $DescriptionLabel
	 * property QTextBox $ImagesControl
	 * property-read QLabel $ImagesLabel
	 * property QTextBox $VideosControl
	 * property-read QLabel $VideosLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class EventMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Event objEvent
		 * @access protected
		 */
		protected $objEvent;

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

		// Controls that allow the editing of Event's individual data fields
        /**
         * @var QLabel lblIdevent;
         * @access protected
         */
		protected $lblIdevent;

        /**
         * @var QDateTimePicker calDateTime;
         * @access protected
         */
		protected $calDateTime;

        /**
         * @var QTextBox txtLocation;
         * @access protected
         */
		protected $txtLocation;

        /**
         * @var QTextBox txtDescription;
         * @access protected
         */
		protected $txtDescription;

        /**
         * @var QTextBox txtImages;
         * @access protected
         */
		protected $txtImages;

        /**
         * @var QTextBox txtVideos;
         * @access protected
         */
		protected $txtVideos;


		// Controls that allow the viewing of Event's individual data fields
        /**
         * @var QLabel lblDateTime
         * @access protected
         */
		protected $lblDateTime;

        /**
         * @var QLabel lblLocation
         * @access protected
         */
		protected $lblLocation;

        /**
         * @var QLabel lblDescription
         * @access protected
         */
		protected $lblDescription;

        /**
         * @var QLabel lblImages
         * @access protected
         */
		protected $lblImages;

        /**
         * @var QLabel lblVideos
         * @access protected
         */
		protected $lblVideos;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * EventMetaControl to edit a single Event object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Event object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EventMetaControl
		 * @param Event $objEvent new or existing Event object
		 */
		 public function __construct($objParentObject, Event $objEvent) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this EventMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Event object
			$this->objEvent = $objEvent;

			// Figure out if we're Editing or Creating New
			if ($this->objEvent->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this EventMetaControl
		 * @param integer $intIdevent primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Event object creation - defaults to CreateOrEdit
 		 * @return EventMetaControl
		 */
		public static function Create($objParentObject, $intIdevent = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdevent)) {
				$objEvent = Event::Load($intIdevent);

				// Event was found -- return it!
				if ($objEvent)
					return new EventMetaControl($objParentObject, $objEvent);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Event object with PK arguments: ' . $intIdevent);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new EventMetaControl($objParentObject, new Event());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EventMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Event object creation - defaults to CreateOrEdit
		 * @return EventMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdevent = QApplication::PathInfo(0);
			return EventMetaControl::Create($objParentObject, $intIdevent, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EventMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Event object creation - defaults to CreateOrEdit
		 * @return EventMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdevent = QApplication::QueryString('intIdevent');
			return EventMetaControl::Create($objParentObject, $intIdevent, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdevent
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdevent_Create($strControlId = null) {
			$this->lblIdevent = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdevent->Name = QApplication::Translate('Idevent');
			if ($this->blnEditMode)
				$this->lblIdevent->Text = $this->objEvent->Idevent;
			else
				$this->lblIdevent->Text = 'N/A';
			return $this->lblIdevent;
		}

		/**
		 * Create and setup QDateTimePicker calDateTime
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calDateTime_Create($strControlId = null) {
			$this->calDateTime = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calDateTime->Name = QApplication::Translate('Date Time');
			$this->calDateTime->DateTime = $this->objEvent->DateTime;
			$this->calDateTime->DateTimePickerType = QDateTimePickerType::DateTime;
			return $this->calDateTime;
		}

		/**
		 * Create and setup QLabel lblDateTime
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblDateTime_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblDateTime = new QLabel($this->objParentObject, $strControlId);
			$this->lblDateTime->Name = QApplication::Translate('Date Time');
			$this->strDateTimeDateTimeFormat = $strDateTimeFormat;
			$this->lblDateTime->Text = sprintf($this->objEvent->DateTime) ? $this->objEvent->DateTime->__toString($this->strDateTimeDateTimeFormat) : null;
			return $this->lblDateTime;
		}

		protected $strDateTimeDateTimeFormat;

		/**
		 * Create and setup QTextBox txtLocation
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLocation_Create($strControlId = null) {
			$this->txtLocation = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLocation->Name = QApplication::Translate('Location');
			$this->txtLocation->Text = $this->objEvent->Location;
			$this->txtLocation->MaxLength = Event::LocationMaxLength;
			return $this->txtLocation;
		}

		/**
		 * Create and setup QLabel lblLocation
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLocation_Create($strControlId = null) {
			$this->lblLocation = new QLabel($this->objParentObject, $strControlId);
			$this->lblLocation->Name = QApplication::Translate('Location');
			$this->lblLocation->Text = $this->objEvent->Location;
			return $this->lblLocation;
		}

		/**
		 * Create and setup QTextBox txtDescription
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDescription_Create($strControlId = null) {
			$this->txtDescription = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDescription->Name = QApplication::Translate('Description');
			$this->txtDescription->Text = $this->objEvent->Description;
			$this->txtDescription->MaxLength = Event::DescriptionMaxLength;
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
			$this->lblDescription->Text = $this->objEvent->Description;
			return $this->lblDescription;
		}

		/**
		 * Create and setup QTextBox txtImages
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtImages_Create($strControlId = null) {
			$this->txtImages = new QTextBox($this->objParentObject, $strControlId);
			$this->txtImages->Name = QApplication::Translate('Images');
			$this->txtImages->Text = $this->objEvent->Images;
			$this->txtImages->MaxLength = Event::ImagesMaxLength;
			return $this->txtImages;
		}

		/**
		 * Create and setup QLabel lblImages
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblImages_Create($strControlId = null) {
			$this->lblImages = new QLabel($this->objParentObject, $strControlId);
			$this->lblImages->Name = QApplication::Translate('Images');
			$this->lblImages->Text = $this->objEvent->Images;
			return $this->lblImages;
		}

		/**
		 * Create and setup QTextBox txtVideos
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtVideos_Create($strControlId = null) {
			$this->txtVideos = new QTextBox($this->objParentObject, $strControlId);
			$this->txtVideos->Name = QApplication::Translate('Videos');
			$this->txtVideos->Text = $this->objEvent->Videos;
			$this->txtVideos->MaxLength = Event::VideosMaxLength;
			return $this->txtVideos;
		}

		/**
		 * Create and setup QLabel lblVideos
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblVideos_Create($strControlId = null) {
			$this->lblVideos = new QLabel($this->objParentObject, $strControlId);
			$this->lblVideos->Name = QApplication::Translate('Videos');
			$this->lblVideos->Text = $this->objEvent->Videos;
			return $this->lblVideos;
		}



		/**
		 * Refresh this MetaControl with Data from the local Event object.
		 * @param boolean $blnReload reload Event from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objEvent->Reload();

			if ($this->lblIdevent) if ($this->blnEditMode) $this->lblIdevent->Text = $this->objEvent->Idevent;

			if ($this->calDateTime) $this->calDateTime->DateTime = $this->objEvent->DateTime;
			if ($this->lblDateTime) $this->lblDateTime->Text = sprintf($this->objEvent->DateTime) ? $this->objEvent->__toString($this->strDateTimeDateTimeFormat) : null;

			if ($this->txtLocation) $this->txtLocation->Text = $this->objEvent->Location;
			if ($this->lblLocation) $this->lblLocation->Text = $this->objEvent->Location;

			if ($this->txtDescription) $this->txtDescription->Text = $this->objEvent->Description;
			if ($this->lblDescription) $this->lblDescription->Text = $this->objEvent->Description;

			if ($this->txtImages) $this->txtImages->Text = $this->objEvent->Images;
			if ($this->lblImages) $this->lblImages->Text = $this->objEvent->Images;

			if ($this->txtVideos) $this->txtVideos->Text = $this->objEvent->Videos;
			if ($this->lblVideos) $this->lblVideos->Text = $this->objEvent->Videos;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC EVENT OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Event instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveEvent() {
			try {
				// Update any fields for controls that have been created
				if ($this->calDateTime) $this->objEvent->DateTime = $this->calDateTime->DateTime;
				if ($this->txtLocation) $this->objEvent->Location = $this->txtLocation->Text;
				if ($this->txtDescription) $this->objEvent->Description = $this->txtDescription->Text;
				if ($this->txtImages) $this->objEvent->Images = $this->txtImages->Text;
				if ($this->txtVideos) $this->objEvent->Videos = $this->txtVideos->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Event object
				$this->objEvent->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Event instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteEvent() {
			$this->objEvent->Delete();
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
				case 'Event': return $this->objEvent;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Event fields -- will be created dynamically if not yet created
				case 'IdeventControl':
					if (!$this->lblIdevent) return $this->lblIdevent_Create();
					return $this->lblIdevent;
				case 'IdeventLabel':
					if (!$this->lblIdevent) return $this->lblIdevent_Create();
					return $this->lblIdevent;
				case 'DateTimeControl':
					if (!$this->calDateTime) return $this->calDateTime_Create();
					return $this->calDateTime;
				case 'DateTimeLabel':
					if (!$this->lblDateTime) return $this->lblDateTime_Create();
					return $this->lblDateTime;
				case 'LocationControl':
					if (!$this->txtLocation) return $this->txtLocation_Create();
					return $this->txtLocation;
				case 'LocationLabel':
					if (!$this->lblLocation) return $this->lblLocation_Create();
					return $this->lblLocation;
				case 'DescriptionControl':
					if (!$this->txtDescription) return $this->txtDescription_Create();
					return $this->txtDescription;
				case 'DescriptionLabel':
					if (!$this->lblDescription) return $this->lblDescription_Create();
					return $this->lblDescription;
				case 'ImagesControl':
					if (!$this->txtImages) return $this->txtImages_Create();
					return $this->txtImages;
				case 'ImagesLabel':
					if (!$this->lblImages) return $this->lblImages_Create();
					return $this->lblImages;
				case 'VideosControl':
					if (!$this->txtVideos) return $this->txtVideos_Create();
					return $this->txtVideos;
				case 'VideosLabel':
					if (!$this->lblVideos) return $this->lblVideos_Create();
					return $this->lblVideos;
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
					// Controls that point to Event fields
					case 'IdeventControl':
						return ($this->lblIdevent = QType::Cast($mixValue, 'QControl'));
					case 'DateTimeControl':
						return ($this->calDateTime = QType::Cast($mixValue, 'QControl'));
					case 'LocationControl':
						return ($this->txtLocation = QType::Cast($mixValue, 'QControl'));
					case 'DescriptionControl':
						return ($this->txtDescription = QType::Cast($mixValue, 'QControl'));
					case 'ImagesControl':
						return ($this->txtImages = QType::Cast($mixValue, 'QControl'));
					case 'VideosControl':
						return ($this->txtVideos = QType::Cast($mixValue, 'QControl'));
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