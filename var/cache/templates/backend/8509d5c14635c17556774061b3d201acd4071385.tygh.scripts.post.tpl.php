<?php /* Smarty version Smarty-3.1.21, created on 2017-05-25 22:15:51
         compiled from "C:\xampp\htdocs\autopartesid\design\backend\templates\addons\tags\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:307959272d67dab703-00594982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8509d5c14635c17556774061b3d201acd4071385' => 
    array (
      0 => 'C:\\xampp\\htdocs\\autopartesid\\design\\backend\\templates\\addons\\tags\\hooks\\index\\scripts.post.tpl',
      1 => 1485369528,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '307959272d67dab703-00594982',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59272d67db4ce9_30135172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59272d67db4ce9_30135172')) {function content_59272d67db4ce9_30135172($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/autopartesid/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
fn_preload_lang_vars(array('addons.tags.add_a_tag'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {
    _.tr({
		addons_tags_add_a_tag: '<?php echo strtr($_smarty_tpl->__("addons.tags.add_a_tag"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
