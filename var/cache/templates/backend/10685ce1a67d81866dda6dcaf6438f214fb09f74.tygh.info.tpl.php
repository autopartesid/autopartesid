<?php /* Smarty version Smarty-3.1.21, created on 2017-05-25 22:15:44
         compiled from "C:\xampp\htdocs\autopartesid\design\backend\templates\addons\call_requests\settings\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2512859272d606bfa18-68124572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10685ce1a67d81866dda6dcaf6438f214fb09f74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\autopartesid\\design\\backend\\templates\\addons\\call_requests\\settings\\info.tpl',
      1 => 1485369526,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2512859272d606bfa18-68124572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59272d60700074_33251559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59272d60700074_33251559')) {function content_59272d60700074_33251559($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('call_requests.phone_from_settings'));
?>
<div class="control-group setting-wide call_requests">

    <label for="addon_option_call_requests_phone" class="control-label "><?php echo $_smarty_tpl->__("call_requests.phone_from_settings");?>
:</label>

    <div class="controls">
        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
</p>
    </div>

</div><?php }} ?>
