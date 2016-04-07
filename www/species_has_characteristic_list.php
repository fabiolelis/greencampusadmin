<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the SpeciesHasCharacteristic class.  It uses the code-generated
	 * SpeciesHasCharacteristicDataGrid control which has meta-methods to help with
	 * easily creating/defining SpeciesHasCharacteristic columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both species_has_characteristic_list.php AND
	 * species_has_characteristic_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class SpeciesHasCharacteristicListForm extends QForm {
		// Local instance of the Meta DataGrid to list SpeciesHasCharacteristics
		protected $dtgSpeciesHasCharacteristics;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}
//		protected function Form_Validate() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
			// Instantiate the Meta DataGrid
			$this->dtgSpeciesHasCharacteristics = new SpeciesHasCharacteristicDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgSpeciesHasCharacteristics->CssClass = 'datagrid';
			$this->dtgSpeciesHasCharacteristics->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgSpeciesHasCharacteristics->Paginator = new QPaginator($this->dtgSpeciesHasCharacteristics);
			$this->dtgSpeciesHasCharacteristics->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ . '/species_has_characteristic_edit.php';
			$this->dtgSpeciesHasCharacteristics->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for species_has_characteristic's properties, or you
			// can traverse down QQN::species_has_characteristic() to display fields that are down the hierarchy)
			$this->dtgSpeciesHasCharacteristics->MetaAddColumn(QQN::SpeciesHasCharacteristic()->SpeciesIdspeciesObject->Name);
			$this->dtgSpeciesHasCharacteristics->MetaAddColumn(QQN::SpeciesHasCharacteristic()->CharacteristicIdcharacteristicObject->Title);
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// species_has_characteristic_list.tpl.php as the included HTML template file
	SpeciesHasCharacteristicListForm::Run('SpeciesHasCharacteristicListForm');
?>