<?php
/* Smarty version 3.1.39, created on 2021-11-01 11:32:16
  from '/var/www/html/modules/blockwishlist/views/templates/front/blockwishlist_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617fc230db1b86_18802609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4b1bf6840b8d7f21580c4f3c9efd9d78b8aa18d' => 
    array (
      0 => '/var/www/html/modules/blockwishlist/views/templates/front/blockwishlist_top.tpl',
      1 => 1635287204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617fc230db1b86_18802609 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript">
var wishlistProductsIds='';
var baseDir ='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_dir']->value, ENT_QUOTES, 'UTF-8');?>
';
var static_token='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
';
var isLogged ='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['isLogged']->value, ENT_QUOTES, 'UTF-8');?>
';
var loggin_required='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must be logged in to manage your wishlist.','mod'=>'blockwishlist','js'=>1),$_smarty_tpl ) );?>
';
var added_to_wishlist ='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The product was successfully added to your wishlist.','mod'=>'blockwishlist','js'=>1),$_smarty_tpl ) );?>
';
var mywishlist_url='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true),'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
<?php if ((isset($_smarty_tpl->tpl_vars['isLogged']->value)) && $_smarty_tpl->tpl_vars['isLogged']->value) {?>
    var isLoggedWishlist=true;
<?php } else { ?>
    var isLoggedWishlist=false;
<?php }
echo '</script'; ?>
>

<div class="wishl">
	<a class="wishtlist_top" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
	<span class="wimg"><svg width="15px" height="14px"><use xlink:href="#hwish"></use></svg> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'wishlist','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</span></span>	</a>
</div>
<?php }
}
