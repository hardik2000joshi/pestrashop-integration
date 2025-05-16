<?php
/* Smarty version 3.1.48, created on 2025-05-16 23:34:40
  from 'C:\xampp\htdocs\prestashop-integration\admin\themes\default\template\controllers\shop\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6827af70e27bf4_63983642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a1f38b3de1d18ba43c7ab23337204f85e59accf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop-integration\\admin\\themes\\default\\template\\controllers\\shop\\helpers\\list\\list_header.tpl',
      1 => 1747431220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827af70e27bf4_63983642 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6617175316827af70e22d44_97001044', "startForm");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block "startForm"} */
class Block_6617175316827af70e22d44_97001044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'startForm' => 
  array (
    0 => 'Block_6617175316827af70e22d44_97001044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop-integration\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php $_smarty_tpl->_assignInScope('action', smarty_modifier_replace($_smarty_tpl->tpl_vars['action']->value,'id_shop','shop_id'));?>
	<form method="post" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="form-horizontal clearfix" id="form-<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
">
<?php
}
}
/* {/block "startForm"} */
}
