<?php
/* Smarty version 4.5.2, created on 2024-06-18 14:09:33
  from 'C:\laragon\www\vtigercrm\layouts\v7\modules\Install\InstallPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6671870d866fc6_63892404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fdd8784d21771962167c268dd65ac2404170998' => 
    array (
      0 => 'C:\\laragon\\www\\vtigercrm\\layouts\\v7\\modules\\Install\\InstallPreProcess.tpl',
      1 => 1715748848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6671870d866fc6_63892404 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row">
		<div class="col-sm-6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }
}
