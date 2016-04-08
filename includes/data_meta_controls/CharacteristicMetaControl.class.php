<?php
	require(__DATAGEN_META_CONTROLS__ . '/CharacteristicMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * Characteristic class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single Characteristic object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a CharacteristicMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class CharacteristicMetaControl extends CharacteristicMetaControlGen {
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
			$this->txtDescription = new QWriteBox($this->objParentObject, $strControlId);
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
			$this->txtPicturesPath = new QFileAsset($this->objParentObject, $strControlId);
			$this->txtPicturesPath->Name = QApplication::Translate('Pictures Path');
			//$this->txtPicturesPath->Text = $this->objCharacteristic->PicturesPath;


			$this->txtPicturesPath->TemporaryUploadPath =  __DOCROOT__ . __IMAGE_ASSETS__ . "/trees";
			$this->txtPicturesPath->File = $this->objCharacteristic->PicturesPath;
			$this->txtPicturesPath->ClickToView = true;
			//$this->txtPicturesPath->MaxLength = Characteristic::PicturesPathMaxLength;
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
			$this->lblCharacteristicIdcharacteristic->Name = QApplication::Translate('Parent characteristic');
			$this->lblCharacteristicIdcharacteristic->Text = ($this->objCharacteristic->CharacteristicIdcharacteristicObject) ? $this->objCharacteristic->CharacteristicIdcharacteristicObject->__toString() : null;
			return $this->lblCharacteristicIdcharacteristic;
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
				if (($this->objCharacteristic->SpeciesIdspeciesObject) && ($this->objCharacteristic->SpeciesIdspeciesObject->Idspecies == $objSpeciesIdspeciesObject->Idspecies))
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
			$this->lblSpeciesIdspecies->Name = QApplication::Translate('Species');
			$this->lblSpeciesIdspecies->Text = ($this->objCharacteristic->SpeciesIdspeciesObject) ? $this->objCharacteristic->SpeciesIdspeciesObject->__toString() : null;
			$this->lblSpeciesIdspecies->Required = true;
			return $this->lblSpeciesIdspecies;
		}

		/**
		 * Create and setup QTextBox txtIdentifier
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtIdentifier_Create($strControlId = null) {
			$this->txtIdentifier = new QTextBox($this->objParentObject, $strControlId);
			$this->txtIdentifier->Name = QApplication::Translate('Identifier');
			$this->txtIdentifier->Text = $this->objCharacteristic->Identifier;
			$this->txtIdentifier->MaxLength = Characteristic::IdentifierMaxLength;
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
			$this->lblIdentifier->Text = $this->objCharacteristic->Identifier;
			return $this->lblIdentifier;
		}

		/**
		 * This will save this object's Characteristic instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveCharacteristic() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtTitle) $this->objCharacteristic->Title = $this->txtTitle->Text;
				if ($this->txtDescription) $this->objCharacteristic->Description = $this->txtDescription->Text;
				if ($this->txtPicturesPath) $this->objCharacteristic->PicturesPath = $this->txtPicturesPath->File;
				if ($this->lstCharacteristicIdcharacteristicObject) $this->objCharacteristic->CharacteristicIdcharacteristic = $this->lstCharacteristicIdcharacteristicObject->SelectedValue;
				if ($this->lstSpeciesIdspeciesObject) $this->objCharacteristic->SpeciesIdspecies = $this->lstSpeciesIdspeciesObject->SelectedValue;
				if ($this->txtIdentifier) $this->objCharacteristic->Identifier = $this->txtIdentifier->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Characteristic object
				$this->objCharacteristic->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}


	}
?>