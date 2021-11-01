<?php
/* Smarty version 3.1.39, created on 2021-11-01 11:32:16
  from '/var/www/html/themes/flavoro1/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617fc230cc9e37_74547359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14c231ea923ff5d4c8bf4e9c544ea5c7cdefeb45' => 
    array (
      0 => '/var/www/html/themes/flavoro1/templates/page.tpl',
      1 => 1635762733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617fc230cc9e37_74547359 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_972714894617fc230cbf387_54107333', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_409260428617fc230cc2509_21815714 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <div class="di-cms-heading di-default">
            <h1 class="title">
              <span><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</span>
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'cms') {?>
                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cleanHtml' ][ 0 ], array( $_smarty_tpl->tpl_vars['cms']->value['di_icon'] ));?>

              <?php }?>
            </h1>
          </div>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_406108428617fc230cc1e32_25493134 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_409260428617fc230cc2509_21815714', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_308337692617fc230cc7405_56573606 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1178475734617fc230cc7cd2_29786658 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1426794549617fc230cc6b47_07119638 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_308337692617fc230cc7405_56573606', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1178475734617fc230cc7cd2_29786658', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_927912482617fc230cc8b94_72303153 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_980745280617fc230cc8784_34887841 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_927912482617fc230cc8b94_72303153', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_972714894617fc230cbf387_54107333 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_972714894617fc230cbf387_54107333',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_406108428617fc230cc1e32_25493134',
  ),
  'page_title' => 
  array (
    0 => 'Block_409260428617fc230cc2509_21815714',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1426794549617fc230cc6b47_07119638',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_308337692617fc230cc7405_56573606',
  ),
  'page_content' => 
  array (
    0 => 'Block_1178475734617fc230cc7cd2_29786658',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_980745280617fc230cc8784_34887841',
  ),
  'page_footer' => 
  array (
    0 => 'Block_927912482617fc230cc8b94_72303153',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main" <?php if (($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'cms') && ($_smarty_tpl->tpl_vars['cms']->value['di_style'])) {?>class="di-sside"<?php }?>>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_406108428617fc230cc1e32_25493134', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1426794549617fc230cc6b47_07119638', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_980745280617fc230cc8784_34887841', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
