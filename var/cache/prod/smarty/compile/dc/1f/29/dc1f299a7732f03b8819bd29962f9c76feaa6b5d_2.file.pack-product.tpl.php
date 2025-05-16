<?php
/* Smarty version 3.1.48, created on 2025-05-16 23:34:38
  from 'C:\xampp\htdocs\prestashop-integration\themes\classic\templates\catalog\_partials\miniatures\pack-product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6827af6eafbcd1_90282156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc1f299a7732f03b8819bd29962f9c76feaa6b5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop-integration\\themes\\classic\\templates\\catalog\\_partials\\miniatures\\pack-product.tpl',
      1 => 1747431237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827af6eafbcd1_90282156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3567534336827af6eaf59d9_53772597', 'pack_miniature_item');
?>

<?php }
/* {block 'pack_miniature_item'} */
class Block_3567534336827af6eaf59d9_53772597 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pack_miniature_item' => 
  array (
    0 => 'Block_3567534336827af6eaf59d9_53772597',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article>
    <div class="card">
      <div class="pack-product-container">
        <div class="thumb-mask">
          <div class="mask">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
              <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['medium'])) {?>
                <img
                        src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'])) {?>
                          alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                          title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php } else { ?>
                          alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
                        loading="lazy"
                        data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                >
              <?php } else { ?>
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" />
              <?php }?>
            </a>
          </div>
        </div>

        <div class="pack-product-name">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>

          </a>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['showPackProductsPrice']->value) {?>
          <div class="pack-product-price">
            <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</strong>
          </div>
        <?php }?>

        <div class="pack-product-quantity">
          <span>x <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['pack_quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
      </div>
    </div>
  </article>
<?php
}
}
/* {/block 'pack_miniature_item'} */
}
