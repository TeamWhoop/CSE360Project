<?php /* Smarty version Smarty-3.1.13, created on 2014-11-10 17:14:50
         compiled from ".\admin\themes\default\template\include\colorbox.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90955460e47a4e31b9-20701715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20ba6399c18c098ba99d6708f205a96d5245eb5d' => 
    array (
      0 => '.\\admin\\themes\\default\\template\\include\\colorbox.inc.tpl',
      1 => 1415635746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90955460e47a4e31b9-20701715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'load_mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5460e47a5e2a58_03637462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460e47a5e2a58_03637462')) {function content_5460e47a5e2a58_03637462($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['load_mode']->value)){?><?php $_smarty_tpl->tpl_vars['load_mode'] = new Smarty_variable('footer', null, 0);?><?php }?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.colorbox','load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'require'=>'jquery','path'=>'themes/default/js/plugins/jquery.colorbox.min.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('id'=>'jquery.colorbox','path'=>"themes/default/js/plugins/colorbox/style2/colorbox.css"),$_smarty_tpl);?>

<?php }} ?>