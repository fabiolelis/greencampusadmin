<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Characteristic class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Characteristic objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this CharacteristicListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package My Application
	 * @subpackage Drafts
	 * 
	 */
	class CharacteristicListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Characteristics
		public $dtgCharacteristics;

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
			$this->Template = 'CharacteristicListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgCharacteristics = new CharacteristicDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgCharacteristics->CssClass = 'datagrid';
			$this->dtgCharacteristics->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgCharacteristics->Paginator = new QPaginator($this->dtgCharacteristics);
			$this->dtgCharacteristics->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgCharacteristics->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for characteristic's properties, or you
			// can traverse down QQN::characteristic() to display fields that are down the hierarchy)
			$this->dtgCharacteristics->MetaAddColumn('Idcharacteristic');
			$this->dtgCharacteristics->MetaAddColumn('Title');
			$this->dtgCharacteristics->MetaAddColumn('Description');
			$this->dtgCharacteristics->MetaAddColumn('PicturesPath');
			$this->dtgCharacteristics->MetaAddColumn(QQN::Characteristic()->CharacteristicIdcharacteristicObject);
			$this->dtgCharacteristics->MetaAddColumn(QQN::Characteristic()->SpeciesIdspeciesObject);
			$this->dtgCharacteristics->MetaAddColumn('Identifier');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('Characteristic');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new CharacteristicEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new CharacteristicEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>