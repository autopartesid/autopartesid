<?php /* Smarty version Smarty-3.1.21, created on 2017-05-25 22:15:48
         compiled from "C:\xampp\htdocs\autopartesid\design\backend\templates\common\license.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1081159272d64203b93-88295571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60af569aa5d6d3f7f4415f9c35d92ab309e9f16b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\autopartesid\\design\\backend\\templates\\common\\license.tpl',
      1 => 1485369528,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1081159272d64203b93-88295571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_mode' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59272d6421ba62_31929192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59272d6421ba62_31929192')) {function content_59272d6421ba62_31929192($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('ultimate_license_required','text_ultimate_license_required','text_license_required_storefronts','text_license_required_mobile','upgrade_license'));
?>
<?php if (fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['store_mode']->value!="ultimate") {?>
    <div id="restriction_promo_dialog" title="<?php echo $_smarty_tpl->__("ultimate_license_required",array("[product]"=>@constant('PRODUCT_NAME')));?>
" class="hidden cm-dialog-auto-size">
        <?php echo $_smarty_tpl->__("text_ultimate_license_required",array("[product]"=>@constant('PRODUCT_NAME'),"[ultimate_license_url]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['ultimate_license_url']));?>

        <div class="restriction-features">
            <div class="restriction-feature restriction-feature_storefronts">
                <h2><?php echo $_smarty_tpl->__("text_license_required_storefronts-title");?>
</h2>
                <?php echo $_smarty_tpl->__("text_license_required_storefronts");?>

            </div>
            <div class="restriction-feature restriction-feature_mobile-app">
                <h2><?php echo $_smarty_tpl->__("text_license_required_mobile-title");?>
</h2>
                <?php echo $_smarty_tpl->__("text_license_required_mobile");?>

            </div>
        </div>
        <div class="center">
            <a class="restriction-update-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['resources']['ultimate_license_url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("upgrade_license");?>
</a>
        </div>
    </div>
<?php }?><?php }} ?>
