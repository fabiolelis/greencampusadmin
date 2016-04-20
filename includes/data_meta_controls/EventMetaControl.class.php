<?php
	require(__DATAGEN_META_CONTROLS__ . '/EventMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * Event class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single Event object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a EventMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class EventMetaControl extends EventMetaControlGen {
		
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
		protected $txtImages1;


        /**
         * @var QTextBox txtImages;
         * @access protected
         */
		protected $txtImages2;

		/**
         * @var QTextBox txtImages;
         * @access protected
         */
		protected $txtImages3;

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
			$this->calDateTime->MinimumYear = 2016;
			$this->calDateTime->MaximumYear = 2100;

			//var_dump($this->Event->Idevent );
			//die();

			if($this->Event->Idevent == null){
				$midnight_utc = new QDateTime('today midnight');

				$this->calDateTime->DateTime = $midnight_utc;

			}
				
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
		public function txtImages1_Create($strControlId = null) {
			
			$this->txtImages1 = new QFileAsset($this->objParentObject, $strControlId);
			$this->txtImages1->Name = QApplication::Translate('First Image');
			//$this->txtImages1->File = $this->objEvent->Images;
			$this->txtImages1->TemporaryUploadPath =  __DOCROOT__ . __IMAGE_ASSETS__ . "/events";
			$this->txtImages1->ClickToView = true;

			$images = explode(";", $this->objEvent->Images);
			//var_dump($images);die();
			if ($images != null && $images[0] != null) 
				$this->txtImages1->File = $images[0];

			return $this->txtImages1;
		}

		/**
		 * Create and setup QTextBox txtImages
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtImages2_Create($strControlId = null) {

			$this->txtImages2 = new QFileAsset($this->objParentObject, $strControlId);
			$this->txtImages2->Name = QApplication::Translate('Second Image');
			//$this->txtImages2->File = $this->objEvent->Images;
			$this->txtImages2->TemporaryUploadPath =  __DOCROOT__ . __IMAGE_ASSETS__ . "/events";
			$this->txtImages2->ClickToView = true;

			$images = explode(";", $this->objEvent->Images);
			if ($images && $images[1]) 
				$this->txtImages2->File = $images[1];

			return $this->txtImages2;
		}

		/**
		 * Create and setup QTextBox txtImages
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtImages3_Create($strControlId = null) {

			$this->txtImages3 = new QFileAsset($this->objParentObject, $strControlId);
			$this->txtImages3->Name = QApplication::Translate('Third Image');
			//$this->txtImages3->File = $this->objEvent->Images;
			$this->txtImages3->TemporaryUploadPath =  __DOCROOT__ . __IMAGE_ASSETS__ . "/events";
			$this->txtImages3->ClickToView = true;

			$images = explode(";", $this->objEvent->Images);
			if ($images && $images[2]) 
				$this->txtImages3->File = $images[2];

			return $this->txtImages3;
		}

		/**
		 * Create and setup QLabel lblImages
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblImages_Create($strControlId = null) {
			$this->lblImages = new QLabel($this->objParentObject, $strControlId);
			$this->lblImages->Name = QApplication::Translate('Image');
			$this->lblImages->Text = "Image";
			return $this->lblImages;
		}

		/**
		 * Create and setup QTextBox txtVideos
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtVideos_Create($strControlId = null) {
			$this->txtVideos = new QTextBox($this->objParentObject, $strControlId);
			$this->txtVideos->Name = QApplication::Translate('Video');
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
			$this->lblVideos->Name = QApplication::Translate('Video');
			$this->lblVideos->Text = $this->objEvent->Videos;
			return $this->lblVideos;
		}


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

				$str = "";

				//var_dump($this->txtImages1);die();
				if ($this->txtImages1->File != null) 
					$str .= $this->txtImages1->File . ";";	
				if ($this->txtImages2->File != null) 
					$str .= $this->txtImages2->File . ";";	
				if ($this->txtImages3->File != null) 
					$str .= $this->txtImages3->File . ";";	


//				echo $str;die();
				$this->objEvent->Images = $str;

				
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

	}
?>