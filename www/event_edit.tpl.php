<?php
	// This is the HTML template include file (.tpl.php) for the event_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('Event') . ' - ' . $this->mctEvent->TitleVerb;
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctEvent->TitleVerb); ?></h2>
		<h1><?php _t('Event')?></h1>
	</div>

	<div id="formControls">

		<?php $this->calDateTime->RenderWithName(); ?>

		<?php $this->txtLocation->RenderWithName(); ?>

		<?php $this->txtDescription->RenderWithName(); ?>

		<?php $this->txtImages1->RenderWithName(); ?>

		<?php $this->txtImages2->RenderWithName(); ?>

		<?php $this->txtImages3->RenderWithName(); ?>

		<?php $this->txtVideos->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__INCLUDES__ .'/footer.inc.php'); ?>