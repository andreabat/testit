<?php /* Smarty version Smarty-3.1.19, created on 2016-09-26 08:14:37
         compiled from "/projects/prestashop/admin/themes/default/template/helpers/tree/tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47001192657e8d8ed175ac1-80426590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '081f30e8b33c2da866cf3521f23fd5867fd1e61c' => 
    array (
      0 => '/projects/prestashop/admin/themes/default/template/helpers/tree/tree_node_folder.tpl',
      1 => 1473174312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47001192657e8d8ed175ac1-80426590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e8d8ed185376_38861012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e8d8ed185376_38861012')) {function content_57e8d8ed185376_38861012($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/projects/prestashop/tools/smarty/plugins/modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
