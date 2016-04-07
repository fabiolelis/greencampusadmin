<?php
	/**
	 * This class will render an HTML Textbox -- which can either be <input type="text">,
	 * <input type="password"> or <textarea> depending on the TextMode (see below).
	 *
	 * @package Controls
	 *
	 */
	abstract class QHidden extends QControl {
		///////////////////////////
		// Private Member Variables
		///////////////////////////

		// LAYOUT
		protected $blnWrap = true;

		//////////
		// Methods
		//////////
		public function __construct($objParentObject, $strControlId = null) {
			parent::__construct($objParentObject, $strControlId);

		}


		protected function GetControlHtml() {
			$strToReturn = sprintf('<input type="hidden" name="%s" id="%s" value="' . $this->strFormat . '" %s%s />',
						$this->strControlId,
						$this->strControlId,
						QApplication::HtmlEntities($this->strText),
						$this->GetAttributes(),
						$strStyle);

			return $strToReturn;
		}

		
	}

	class QCrossScriptingException extends QCallerException {
		public function __construct($strControlId) {
			parent::__construct("Cross Scripting Violation: Potential cross script injection in Control \"" .
				$strControlId . "\"\r\nTo allow any input on this TextBox control, set CrossScripting to QCrossScripting::Allow", 2);
		}
	}
?>
