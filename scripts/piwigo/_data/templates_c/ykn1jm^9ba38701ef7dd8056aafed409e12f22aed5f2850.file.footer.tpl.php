<?php /* Smarty version Smarty-3.1.13, created on 2014-11-10 17:13:40
         compiled from ".\themes\default\template\mail\text\plain\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:259035460e43489bbf7-03132948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ba38701ef7dd8056aafed409e12f22aed5f2850' => 
    array (
      0 => '.\\themes\\default\\template\\mail\\text\\plain\\footer.tpl',
      1 => 1415635789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259035460e43489bbf7-03132948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GALLERY_TITLE' => 0,
    'GALLERY_URL' => 0,
    'VERSION' => 0,
    'PHPWG_URL' => 0,
    'CONTACT_MAIL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5460e434a3d778_49189608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460e434a3d778_49189608')) {function content_5460e434a3d778_49189608($_smarty_tpl) {?>


----
<?php echo l10n('Sent by');?>
 "<?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['GALLERY_URL']->value;?>

<?php echo l10n('Powered by');?>
 "Piwigo<?php if (!empty($_smarty_tpl->tpl_vars['VERSION']->value)){?> <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
<?php }?>" <?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>

<?php echo l10n('Contact');?>
: <?php echo $_smarty_tpl->tpl_vars['CONTACT_MAIL']->value;?>
<?php }} ?>