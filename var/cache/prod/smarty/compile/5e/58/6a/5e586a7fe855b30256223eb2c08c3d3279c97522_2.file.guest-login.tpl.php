<?php
/* Smarty version 3.1.48, created on 2025-05-16 23:34:39
  from 'C:\xampp\htdocs\prestashop-integration\themes\classic\templates\customer\guest-login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6827af6f2c2f05_51588962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e586a7fe855b30256223eb2c08c3d3279c97522' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop-integration\\themes\\classic\\templates\\customer\\guest-login.tpl',
      1 => 1747431237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827af6f2c2f05_51588962 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3000309476827af6f2be641_81586753', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7239318976827af6f2bf243_65500956', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_3000309476827af6f2be641_81586753 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_3000309476827af6f2be641_81586753',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Order Tracking','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_7239318976827af6f2bf243_65500956 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_7239318976827af6f2bf243_65500956',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <form id="guestOrderTrackingForm" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['guest_tracking'], ENT_QUOTES, 'UTF-8');?>
" method="get">
    <header>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To track your order, please enter the following information:','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</p>
    </header>

    <section class="form-fields">
    
      <input type="hidden" name="controller" value="guest-tracking" >

      <div class="form-group row">
        <label class="col-md-3 form-control-label required">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Reference:','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>

        </label>
        <div class="col-md-6">
          <input
            class="form-control"
            name="order_reference"
            type="text"
            size="8"
            value="<?php if ((isset($_REQUEST['order_reference']))) {
echo htmlspecialchars($_REQUEST['order_reference'], ENT_QUOTES, 'UTF-8');
}?>"
          >
          <div class="form-control-comment">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For example: QIIXJXNUI or QIIXJXNUI#1','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

          </div>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-md-3 form-control-label required">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email:','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>

        </label>
        <div class="col-md-6">
          <input
            class="form-control"
            name="email"
            type="email"
            value="<?php if ((isset($_REQUEST['email']))) {
echo htmlspecialchars($_REQUEST['email'], ENT_QUOTES, 'UTF-8');
}?>"
          >
        </div>
      </div>

    </section>

    <footer class="form-footer text-sm-center clearfix">
      <button class="btn btn-primary" type="submit">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </button>
    </footer>
  </form>
<?php
}
}
/* {/block 'page_content'} */
}
