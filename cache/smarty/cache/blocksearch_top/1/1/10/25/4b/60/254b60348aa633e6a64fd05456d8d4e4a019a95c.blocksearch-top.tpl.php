<?php /*%%SmartyHeaderCode:117105011957e8e2460fa3e3-82393320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '254b60348aa633e6a64fd05456d8d4e4a019a95c' => 
    array (
      0 => '/projects/prestashop/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1473174314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117105011957e8e2460fa3e3-82393320',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e8e246145ff1_02766653',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e8e246145ff1_02766653')) {function content_57e8e246145ff1_02766653($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//node3.beta.codenvy.com:35828/prestashop/ricerca" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Cerca" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Cerca</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
