<?php
/* Smarty version 3.1.48, created on 2025-05-16 23:34:39
  from 'C:\xampp\htdocs\prestashop-integration\themes\classic\templates\customer\addresses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6827af6f27b024_19634795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a1bf92d8f7f7f4a68b1c6b0306bd9caad7bd937' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop-integration\\themes\\classic\\templates\\customer\\addresses.tpl',
      1 => 1747431237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:customer/_partials/block-address.tpl' => 1,
  ),
),false)) {
function content_6827af6f27b024_19634795 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11050095086827af6f277f94_66469170', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15249876306827af6f278ba2_85839314', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_11050095086827af6f277f94_66469170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_11050095086827af6f277f94_66469170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your addresses','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'customer_address'} */
class Block_1183794986827af6f279757_12104466 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/block-address.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('address'=>$_smarty_tpl->tpl_vars['address']->value), 0, true);
?>
    <?php
}
}
/* {/block 'customer_address'} */
/* {block 'page_content'} */
class Block_15249876306827af6f278ba2_85839314 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_15249876306827af6f278ba2_85839314',
  ),
  'customer_address' => 
  array (
    0 => 'Block_1183794986827af6f279757_12104466',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer']->value['addresses'], 'address');
$_smarty_tpl->tpl_vars['address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->do_else = false;
?>
    <div class="col-lg-4 col-md-6 col-sm-6">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1183794986827af6f279757_12104466', 'customer_address', $this->tplIndex);
?>

    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <div class="clearfix"></div>
  <div class="addresses-footer">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['address'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="add-address">
      <i class="material-icons">&#xE145;</i>
      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create new address','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
    </a>
  </div>
<?php
}
}
/* {/block 'page_content'} */
}
