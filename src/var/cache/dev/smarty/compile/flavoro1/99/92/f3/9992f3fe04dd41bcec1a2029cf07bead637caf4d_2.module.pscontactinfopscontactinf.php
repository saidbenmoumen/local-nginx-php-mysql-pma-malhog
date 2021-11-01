<?php
/* Smarty version 3.1.39, created on 2021-11-01 11:32:17
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617fc2310b3716_77093393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1635597708,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617fc2310b3716_77093393 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/themes/flavoro1/modules/ps_contactinfo/ps_contactinfo.tpl -->
<div class="block-contact col-md-3 col-sm-3 col-lg-3 col-xs-12 links wrapper">
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
" class="hidden-sm-down">
    <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
    <div class="title clearfix hidden-md-up" data-toggle="collapse" data-target="#footer_contact">
    <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'contact information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="fa fa-plus add"></i>
        <i class="fa fa-minus remove"></i>
      </span>
    </span>
  </div>
  <ul id="footer_contact" class="fthr collapse">
    <li class="block">
      <div class="icon float-xs-left"><svg width="20px" height="20px"><use xlink:href="#add"></use></svg></div>
      <div class="data ad"><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>
</div>
    </li>

    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
      <li class="block">
        <div class="icon float-xs-left"><svg width="20px" height="20px"><use xlink:href="#phone"></use></svg></div>
        <div class="data">
          <a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a>
        </div>
      </li>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
      <li class="block">
        <div class="icon float-xs-left"><svg width="21px" height="20px"><use xlink:href="#fax"></use></svg></div>
        <div class="data">
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['fax'], ENT_QUOTES, 'UTF-8');?>

        </div>
      </li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
      <li class="block">
        <div class="icon float-xs-left"><svg width="22px" height="22px"><use xlink:href="#mail"></use></svg></div>
        <div class="data email">
        <a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
        </div>
      </li>
    <?php }?>
  </ul>
</div><!-- end /var/www/html/themes/flavoro1/modules/ps_contactinfo/ps_contactinfo.tpl --><?php }
}
