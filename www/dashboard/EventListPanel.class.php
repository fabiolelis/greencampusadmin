<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Event class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Event objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this EventListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class EventListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Events
		public $dtgEvents;

		// Other public QControls in this panel
		public $btnCreateNew;
		public $pxyEdit;

		// Callback Method Names
		protected $strSetEditPanelMethod;
		protected $strCloseEditPanelMethod;
		
		public function __construct($objParentObject, $strSetEditPanelMethod, $strCloseEditPanelMethod, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Record Method Callbacks
			$this->strSetEditPanelMethod = $strSetEditPanelMethod;
			$this->strCloseEditPanelMethod = $strCloseEditPanelMethod;

			// Setup the Template
			$this->Template = 'EventListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgEvents = new EventDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgEvents->CssClass = 'datagrid';
			$this->dtgEvents->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgEvents->Paginator = new QPaginator($this->dtgEvents);
			$this->dtgEvents->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgEvents->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for event's properties, or you
			// can traverse down QQN::event() to display fields that are down the hierarchy)
			$this->dtgEvents->MetaAddColumn('Idevent');
			$this->dtgEvents->MetaAddColumn('DateTime');
			$this->dtgEvents->MetaAddColumn('Location');
			$this->dtgEvents->MetaAddColumn('Description');
			$this->dtgEvents->MetaAddColumn('Images');
			$this->dtgEvents->MetaAddColumn('Videos');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('Event');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new EventEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new EventEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>