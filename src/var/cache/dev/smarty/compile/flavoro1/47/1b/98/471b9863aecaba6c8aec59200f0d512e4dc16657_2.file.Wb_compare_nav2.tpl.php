<?php
/* Smarty version 3.1.39, created on 2021-11-01 11:32:16
  from '/var/www/html/modules/wbcompare/views/templates/hook/Wb_compare_nav2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617fc230dc1794_37349024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '471b9863aecaba6c8aec59200f0d512e4dc16657' => 
    array (
      0 => '/var/www/html/modules/wbcompare/views/templates/hook/Wb_compare_nav2.tpl',
      1 => 1635287204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617fc230dc1794_37349024 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['comparator_max_item']->value) {?>
<div class="hcom">
	<form method="post" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('wbcompare','WbCompareProduct'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="compare-form">
		<a  href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('wbcompare','WbCompareProduct',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
		<span class="wcom"><svg width="15px" height="14px"><use xlink:href="#hcom"></use></svg> <span class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'compare','mod'=>'wbcompare'),$_smarty_tpl ) );?>
</span></span>
				<input type="hidden" name="compare_product_count" class="compare_product_count" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_product']->value, ENT_QUOTES, 'UTF-8');?>
" />
		<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
	</a>
	</form>
</div>
<?php }
}
}
