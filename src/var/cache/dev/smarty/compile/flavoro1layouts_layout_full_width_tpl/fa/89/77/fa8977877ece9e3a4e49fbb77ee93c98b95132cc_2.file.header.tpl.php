<?php
/* Smarty version 3.1.39, created on 2021-11-01 11:32:16
  from '/var/www/html/themes/flavoro1/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617fc230d6bc25_86599057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa8977877ece9e3a4e49fbb77ee93c98b95132cc' => 
    array (
      0 => '/var/www/html/themes/flavoro1/templates/_partials/header.tpl',
      1 => 1635584685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617fc230d6bc25_86599057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71322295617fc230d620c0_13218092', 'header_nav');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1829426912617fc230d687f9_85181582', 'header_top');
?>

<?php }
/* {block 'header_nav'} */
class Block_71322295617fc230d620c0_13218092 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_71322295617fc230d620c0_13218092',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav hidden-md-down">
    <div class="container">
      <div class="row">
          <div class="col-sm-4 text-xs-left nleft"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>
</div>
          <div class="col-sm-4 hidden-md-down text-xs-center" id="_desktop_logo">
          <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                <img class="logo img-responsive center-block" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
              </a>
          <?php } else { ?>
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                <img class="logo img-responsive center-block" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
              </a>
          <?php }?>
        </div>
          <div class="col-sm-4 text-xs-right topright"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>
</div>
      </div>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_1829426912617fc230d687f9_85181582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_1829426912617fc230d687f9_85181582',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container">
       <div class="row headcolor">
        
        <div class="col-xs-12 text-xs-center tright">
            <div class="mobile">
       <div class="float-xs-left hidden-lg-up">
    <div id="menu-icon">
    <div class="navbar-header">
        <button type="button" class="btn-navbar navbar-toggle" data-toggle="collapse" onclick="openNav()">
        <i class="fa fa-bars"></i></button>
    </div>
    </div>
    <div id="mySidenav" class="sidenav text-xs-left">
    <div class="close-nav">
        <span class="categories"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
        <a href="javascript:void(0)" class="closebtn float-xs-right" onclick="closeNav()"><i class="fa fa-close"></i></a>
    </div>
    <div id="mobile_top_menu_wrapper" class="row hidden-lg-up">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
    </div>
    </div>
    </div>
        <div class="top-logo float-xs-left hidden-lg-up" id="_mobile_logo"></div>
    <div id="_mobile_currency_selector" class="hidden-lg-up"></div>
    <div id="_mobile_language_selector" class="hidden-lg-up"></div>
    <div class="float-xs-right hidden-lg-up" id="_mobile_cart"></div>
    <div id="_mobile_user_info" class="float-xs-right hidden-lg-up"></div>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

</div> 
        </div>  
      </div>
    </div>
  </div>
<?php
}
}
/* {/block 'header_top'} */
}
