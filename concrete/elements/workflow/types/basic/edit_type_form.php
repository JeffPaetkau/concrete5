<div class="control-group">
<fieldset>
<legend><?=t("Workflow Access")?></legend>
<div id="ccm-permission-list-form">
<?=View::element("permission/lists/basic_workflow", array('enablePermissions' => true, 'workflow' => $workflow));?>
</div>
</fieldset></div>
