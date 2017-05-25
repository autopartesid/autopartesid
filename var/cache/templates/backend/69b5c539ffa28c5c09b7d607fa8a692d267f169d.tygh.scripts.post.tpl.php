<?php /* Smarty version Smarty-3.1.21, created on 2017-05-25 22:15:51
         compiled from "C:\xampp\htdocs\autopartesid\design\backend\templates\addons\vendor_plans\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2898059272d67e15453-70831525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69b5c539ffa28c5c09b7d607fa8a692d267f169d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\autopartesid\\design\\backend\\templates\\addons\\vendor_plans\\hooks\\index\\scripts.post.tpl',
      1 => 1485369528,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2898059272d67e15453-70831525',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vendor_plans_payments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59272d67e1dae5_04734071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59272d67e1dae5_04734071')) {function content_59272d67e1dae5_04734071($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/autopartesid/app/functions/smarty_plugins\\block.inline_script.php';
?><?php if ($_smarty_tpl->tpl_vars['vendor_plans_payments']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
Tygh.$(document).ready(function() {
    Tygh.$.get('<?php echo fn_url('vendor_plans.async?is_ajax=1','A','current');?>
');
});
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
