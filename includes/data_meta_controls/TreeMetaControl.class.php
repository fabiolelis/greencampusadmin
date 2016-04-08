<?php
	require(__DATAGEN_META_CONTROLS__ . '/TreeMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * Tree class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single Tree object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a TreeMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class TreeMetaControl extends TreeMetaControlGen {
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
			$this->lblSpeciesIdspecies->Name = QApplication::Translate('Species');
			$this->lblSpeciesIdspecies->Text = ($this->objTree->SpeciesIdspeciesObject) ? $this->objTree->SpeciesIdspeciesObject->Name : null;
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

	}
?>