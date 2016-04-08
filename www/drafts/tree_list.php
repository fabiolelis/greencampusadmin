<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Tree class.  It uses the code-generated
	 * TreeDataGrid control which has meta-methods to help with
	 * easily creating/defining Tree columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both tree_list.php AND
	 * tree_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class TreeListForm extends QForm {
		// Local instance of the Meta DataGrid to list Trees
		protected $dtgTrees;

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
			$this->dtgTrees = new TreeDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgTrees->CssClass = 'datagrid';
			$this->dtgTrees->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgTrees->Paginator = new QPaginator($this->dtgTrees);
			$this->dtgTrees->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/tree_edit.php';
			$this->dtgTrees->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for tree's properties, or you
			// can traverse down QQN::tree() to display fields that are down the hierarchy)
			$this->dtgTrees->MetaAddColumn('Idtree');
			$this->dtgTrees->MetaAddColumn(QQN::Tree()->SpeciesIdspeciesObject);
			$this->dtgTrees->MetaAddColumn('Longitude');
			$this->dtgTrees->MetaAddColumn('Latitude');
			$this->dtgTrees->MetaAddColumn('Age');
			$this->dtgTrees->MetaAddColumn('Identifier');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// tree_list.tpl.php as the included HTML template file
	TreeListForm::Run('TreeListForm');
?>