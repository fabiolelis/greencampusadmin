<?php
	// This is the HTML template include file (.tpl.php) for treeEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblIdtree->RenderWithName(); ?>

		<?php $_CONTROL->lstSpeciesIdspeciesObject->RenderWithName(); ?>

		<?php $_CONTROL->txtLongitude->RenderWithName(); ?>

		<?php $_CONTROL->txtLatitude->RenderWithName(); ?>

		<?php $_CONTROL->txtAge->RenderWithName(); ?>

		<?php $_CONTROL->txtIdentifier->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
