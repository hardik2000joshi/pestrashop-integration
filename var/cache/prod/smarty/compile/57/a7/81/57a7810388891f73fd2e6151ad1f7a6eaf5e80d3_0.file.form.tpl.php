<?php
/* Smarty version 3.1.48, created on 2025-05-16 23:34:40
  from 'C:\xampp\htdocs\prestashop-integration\admin\themes\default\template\controllers\referrers\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6827af70c78e19_26888540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57a7810388891f73fd2e6151ad1f7a6eaf5e80d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop-integration\\admin\\themes\\default\\template\\controllers\\referrers\\helpers\\form\\form.tpl',
      1 => 1747431220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827af70c78e19_26888540 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21430323306827af70c67c88_88598914', "other_fieldsets");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10928474466827af70c6dc14_48539140', "other_input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2950710546827af70c6ed55_11349108', "fieldset");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20082236286827af70c6ff45_21777230', "label");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19280848666827af70c77a17_65394005', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "other_fieldsets"} */
class Block_21430323306827af70c67c88_88598914 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'other_fieldsets' => 
  array (
    0 => 'Block_21430323306827af70c67c88_88598914',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['f']->value == 1) {?>
		<div class="panel">
			<h3>
				<i class="icon-question-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help','d'=>'Admin.Global'),$_smarty_tpl ) );?>

			</h3>
			<div class="row"><button type="button" class="btn btn-default toggle_help"><i class="icon-chevron-sign-down"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show me more','d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>
</button></div>
			<div id="tracking_help" style="display: none;">
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Definitions:','d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>
</p>
				<ul>
					<li>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The "http_referer" field is the website from which your customers arrive.','d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>
<br />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For example, visitors coming from Google will have an "http_referer" value like this one: "http://www.google.com/search?q=prestashop".','d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>
<br />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If the visitor arrives directly (by typing the URL of your shop, or by using their bookmarks, for example), the http_referer will be empty.','d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>
<br />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you\'d like to view all the visitors coming from Google, you can type "%google%" in this field. Alternatively, you can type "%google.fr%" if you want to view visitors coming from Google France, only.','d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>
<br />
					</li>
					<br />
					<li>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The "request_uri" field is the URL from which the customers come to your website.','d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>
<br />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For example, if the visitor accesses a product page, the URL will be like this one: "%smusic-ipods/1-ipod-nano.html".','sprintf'=>array($_smarty_tpl->tpl_vars['uri']->value),'d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>
<br />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This is helpful because you can add tags or tokens in the links pointing to your website.','d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For example, you can post a link (such as "%sindex.php?myuniquekeyword" -- note that you added "?myuniquekeyword" at the end of the URL) in an online forum or as a blog comment, and get visitors statistics for that unique link by entering "%%myuniquekeyword" in the "request_uri" field.','sprintf'=>array($_smarty_tpl->tpl_vars['uri']->value),'d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This method is more reliable than the "http_referer" one, but there is one disadvantage: if a search engine references a page with your link, then it will be displayed in the search results and you will not only indicate visitors from the places where you posted the link, but also those from the search engines that picked up that link.','d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>

					</li>
					<br />
					<li>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The "Include" fields indicate what has to be included in the URL.','d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>

					</li>
					<br />
					<li>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The "Exclude" fields indicate what has to be excluded from the URL.','d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>

					</li>
					<br />
					<li>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When using simple mode, you can use a wide variety of generic characters to replace other characters:','d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>

						<ul>
							<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'"_" will replace one character. If you want to use the real "_", you should type this: "\\\\_".','d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>
</li>
							<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'"%" will replace any number of characters. If you want to use the real "%", you should type this: "\\\\%".','d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>
</li>
						</ul>
					</li>
					<br />
					<li>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The Simple mode uses the MySQL "LIKE" pattern matching, but for a higher potency you can use MySQL\'s regular expressions in the Expert mode.','d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>

						<a class="btn btn-link _blank" href="http://dev.mysql.com/doc/refman/5.0/en/regexp.html" style="font-style: italic;"><i class="icon-external-link-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Take a look at MySQL\'s documentation for more details.','d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>
</a>
					</li>
				</ul>
			</div>
		</div>
	<?php }
}
}
/* {/block "other_fieldsets"} */
/* {block "other_input"} */
class Block_10928474466827af70c6dc14_48539140 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'other_input' => 
  array (
    0 => 'Block_10928474466827af70c6dc14_48539140',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['key']->value == 'help') {?>
		<a class="btn btn-default toggle_help">
			<i class="icon-question-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get help!','d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>

		</a>
	<?php }
}
}
/* {/block "other_input"} */
/* {block "fieldset"} */
class Block_2950710546827af70c6ed55_11349108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fieldset' => 
  array (
    0 => 'Block_2950710546827af70c6ed55_11349108',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['f']->value == 3) {?>
		<div id="tracking_expert" style="display: none;">
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

		</div>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "fieldset"} */
/* {block "label"} */
class Block_20082236286827af70c6ff45_21777230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'label' => 
  array (
    0 => 'Block_20082236286827af70c6ff45_21777230',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['legend']))) {?>
		<legend><?php echo $_smarty_tpl->tpl_vars['input']->value['legend'];?>
</legend>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['label']))) {?>
		<label class="control-label col-lg-3" for="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id'])) && $_smarty_tpl->tpl_vars['input']->value['id']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['id'],'html','UTF-8' ));
} elseif ((isset($_smarty_tpl->tpl_vars['input']->value['name'])) && $_smarty_tpl->tpl_vars['input']->value['name']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));
}?>"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
</label>
	<?php }
}
}
/* {/block "label"} */
/* {block "script"} */
class Block_19280848666827af70c77a17_65394005 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_19280848666827af70c77a17_65394005',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	$( document ).ready(function() {
		$('.toggle_help').click(function() {
			$('#tracking_help').slideToggle();

			if ($(this).find('i').hasClass('icon-chevron-sign-down'))
				$(this).find('i').removeClass('icon-chevron-sign-down').addClass('icon-chevron-sign-up');
			else if ($(this).find('i').hasClass('icon-chevron-sign-up'))
				$(this).find('i').removeClass('icon-chevron-sign-up').addClass('icon-chevron-sign-down');
		});
	});
<?php
}
}
/* {/block "script"} */
}
