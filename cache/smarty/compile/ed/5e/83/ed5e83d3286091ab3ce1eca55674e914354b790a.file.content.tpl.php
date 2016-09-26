<?php /* Smarty version Smarty-3.1.19, created on 2016-09-26 10:55:37
         compiled from "/projects/prestashop/admin813cinr8r/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173368468057e8e2897f8812-31865241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed5e83d3286091ab3ce1eca55674e914354b790a' => 
    array (
      0 => '/projects/prestashop/admin813cinr8r/themes/default/template/content.tpl',
      1 => 1473174312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173368468057e8e2897f8812-31865241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e8e289803550_15943184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e8e289803550_15943184')) {function content_57e8e289803550_15943184($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
