<?php /* Smarty version Smarty-3.1.19, created on 2016-09-26 08:14:35
         compiled from "/projects/prestashop/admin/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95776371557e8d8eb8111e1-49370469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc79beced4088a74a855292b062ba505e46c03b5' => 
    array (
      0 => '/projects/prestashop/admin/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1473174312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95776371557e8d8eb8111e1-49370469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e8d8eb827c05_02279070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e8d8eb827c05_02279070')) {function content_57e8d8eb827c05_02279070($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
