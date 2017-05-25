<?php /* Smarty version Smarty-3.1.21, created on 2017-05-25 22:15:51
         compiled from "C:\xampp\htdocs\autopartesid\design\backend\templates\addons\mobile_admin_app\hooks\index\global_search.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:733359272d6717bd07-50817262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '102a7b991462360cd56159d1452b3af449dd8152' => 
    array (
      0 => 'C:\\xampp\\htdocs\\autopartesid\\design\\backend\\templates\\addons\\mobile_admin_app\\hooks\\index\\global_search.post.tpl',
      1 => 1485369528,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '733359272d6717bd07-50817262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59272d67187894_78607649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59272d67187894_78607649')) {function content_59272d67187894_78607649($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/autopartesid/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
fn_preload_lang_vars(array('twgadmin_mobile_app'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['twigmo']['admin_connection']['access_id']) {?>

    <div class="twg-mobile-app-link">
        <a href="<?php echo htmlspecialchars(fn_url("twigmo_admin_app.view"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("twgadmin_mobile_app");?>
</a>
    </div>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
        (function(_, $) {
            $(document).ready(function() {
                $('div.twg-mobile-app-link').detach().insertBefore('ul.nav.hover-show.nav-pills').show();
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }?><?php }} ?>
