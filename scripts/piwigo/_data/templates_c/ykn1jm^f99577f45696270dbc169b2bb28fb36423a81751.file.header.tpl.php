<?php /* Smarty version Smarty-3.1.13, created on 2014-11-10 17:13:40
         compiled from ".\themes\default\template\mail\text\plain\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140945460e43476cf92-35511926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f99577f45696270dbc169b2bb28fb36423a81751' => 
    array (
      0 => '.\\themes\\default\\template\\mail\\text\\plain\\header.tpl',
      1 => 1415635789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140945460e43476cf92-35511926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAIL_TITLE' => 0,
    'MAIL_SUBTITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5460e434826ba4_56906401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460e434826ba4_56906401')) {function content_5460e434826ba4_56906401($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['MAIL_TITLE']->value;?>

<?php if (!empty($_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value)){?><?php echo $_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value;?>

<?php }?>
----

<?php }} ?>