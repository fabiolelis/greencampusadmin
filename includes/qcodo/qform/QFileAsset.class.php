<?php
	class QFileAsset extends QFileAssetBase {
		protected $strTemporaryUploadPath = '/tmp';
		
		public function __construct($objParentObject, $strControlId = null) {
			parent::__construct($objParentObject, $strControlId);

			// Setup Default Properties
			$this->strTemplate = __QCODO_CORE__ . '/assets/QFileAsset.tpl.php';
			$this->DialogBoxCssClass = 'fileassetDbox';
			$this->UploadText = QApplication::Translate('Upload');
			$this->CancelText = QApplication::Translate('Cancel');
			$this->btnUpload->Text = '<img src="' . __VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . '/add.png" alt="' . QApplication::Translate('Upload') . '" border="0"/> ' . QApplication::Translate('Upload');
			$this->btnDelete->Text = '<img src="' . __VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . '/delete.png" alt="' . QApplication::Translate('Delete') . '" border="0"/> ' . QApplication::Translate('Delete');
			$this->DialogBoxHtml = '<h1>Upload a File</h1><p>Please select a file to upload.</p>';


		}
		public function GetWebUrl() {
			// First of all, if ClickToView is NOT set, then we obvioulsy will not pass out the URL
			if (!$this->blnClickToView)
				return null;

			// Now, we need to see if the file, itself, is actually in the docroot somewhere so that
			// it can be viewed, and if so, we need to return the web-based URL (relative to the docroot)
			if ($this->strFile) {

				// Normalize all backslashes to just plain slashes 
				$strFile = str_replace('\\', '/', substr($this->strFile, 0, strlen(__DOCROOT__ )));
				$strDocRoot = str_replace('\\', '/', __DOCROOT__ );
				if ($strFile == $strDocRoot) {
					$strToReturn = __VIRTUAL_DIRECTORY__ . substr($this->strFile, strlen(__DOCROOT__ . __SUBDIRECTORY__ ));

					// On Windows, we must replace all "\" with "/"
					if (substr(__DOCROOT__ . __SUBDIRECTORY__, 1, 2) == ':\\') {
						$strToReturn = str_replace('\\', '/', $strToReturn);
					}

					return "../". $strToReturn;
				}
			}

			return null;
		}

	}
?>