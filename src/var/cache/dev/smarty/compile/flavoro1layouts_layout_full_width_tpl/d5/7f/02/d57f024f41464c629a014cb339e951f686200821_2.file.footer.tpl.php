<?php
/* Smarty version 3.1.39, created on 2021-11-01 11:32:17
  from '/var/www/html/themes/flavoro1/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617fc23107ea27_91654683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd57f024f41464c629a014cb339e951f686200821' => 
    array (
      0 => '/var/www/html/themes/flavoro1/templates/_partials/footer.tpl',
      1 => 1635677821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617fc23107ea27_91654683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {
$_smarty_tpl->_assignInScope('cat', Category::getNestedCategories($_smarty_tpl->tpl_vars['product']->value['id_category_default']));
$_smarty_tpl->_assignInScope('carryon', true);
}?>

<div class="block_newsletter" 
<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['di_color'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['carryon']->value))) {?>style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value[$_smarty_tpl->tpl_vars['product']->value['id_category_default']]['di_color'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
>
 <div class="container">
  <div class="row">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1192937634617fc231079f76_91834247', 'hook_footer_before');
?>

</div>
</div>
</div>
<div class="footer-container">
  <div class="container">
      <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1046444270617fc23107b2a5_36520726', 'hook_footer');
?>

    </div>
  </div>
</div>
<div class="copy">
<div class="container">
    <div class="row">
       <div class="col-md-4 col-xs-12 text-xs-left">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterLeft'),$_smarty_tpl ) );?>

        </div>
      <div class="col-md-5 col-xs-12 text-xs-center">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187591847617fc23107cff5_90694059', 'copyright_link');
?>

        </div>
        <div class="col-md-3 col-xs-12 text-xs-right">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

        </div>
    </div>
</div>
</div>
<a href="" id="scroll" title="Scroll to Top" style="display: block;"><i class="fa fa-angle-double-up"></i></a><?php }
/* {block 'hook_footer_before'} */
class Block_1192937634617fc231079f76_91834247 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_1192937634617fc231079f76_91834247',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_1046444270617fc23107b2a5_36520726 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_1046444270617fc23107b2a5_36520726',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'copyright_link'} */
class Block_187591847617fc23107cff5_90694059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_187591847617fc23107cff5_90694059',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <a class="_blank" href="http://www.prestashop.com" target="_blank">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

            </a>
          <?php
}
}
/* {/block 'copyright_link'} */
}
