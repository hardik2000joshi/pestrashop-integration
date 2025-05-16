<?php
/* Smarty version 3.1.48, created on 2025-05-16 23:34:41
  from 'C:\xampp\htdocs\prestashop-integration\admin\themes\default\template\helpers\tree\tree_node_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6827af71ada834_50155887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a64b33494a437102eb8aa83e9cec345ce785fd5a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop-integration\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item.tpl',
      1 => 1747431220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827af71ada834_50155887 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
