<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Characteristic class.  It uses the code-generated
	 * CharacteristicDataGrid control which has meta-methods to help with
	 * easily creating/defining Characteristic columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both characteristic_list.php AND
	 * characteristic_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class CharacteristicListForm extends QForm {
		// Local instance of the Meta DataGrid to list Characteristics
		protected $dtgCharacteristics;

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
			$this->dtgCharacteristics = new CharacteristicDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgCharacteristics->CssClass = 'datagrid';
			$this->dtgCharacteristics->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgCharacteristics->Paginator = new QPaginator($this->dtgCharacteristics);
			$this->dtgCharacteristics->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ . '/characteristic_edit.php';
			$this->dtgCharacteristics->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for characteristic's properties, or you
			// can traverse down QQN::characteristic() to display fields that are down the hierarchy)
			$this->dtgCharacteristics->MetaAddColumn('Idcharacteristic');
			$this->dtgCharacteristics->MetaAddColumn('Title');
			$this->dtgCharacteristics->MetaAddColumn('Description');
			$this->dtgCharacteristics->MetaAddColumn('PicturesPath');
			$this->dtgCharacteristics->MetaAddColumn(QQN::Characteristic()->CharacteristicIdcharacteristicObject->Title);
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// characteristic_list.tpl.php as the included HTML template file
	CharacteristicListForm::Run('CharacteristicListForm');
?>