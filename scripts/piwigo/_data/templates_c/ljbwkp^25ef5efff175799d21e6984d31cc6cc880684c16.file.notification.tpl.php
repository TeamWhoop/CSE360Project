<?php /* Smarty version Smarty-3.1.13, created on 2014-11-10 19:22:30
         compiled from ".\themes\default\template\notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31871546102664e6122-07136342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25ef5efff175799d21e6984d31cc6cc880684c16' => 
    array (
      0 => '.\\themes\\default\\template\\notification.tpl',
      1 => 1415635788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31871546102664e6122-07136342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'U_FEED_IMAGE_ONLY' => 0,
    'U_FEED' => 0,
    'MENUBAR' => 0,
    'U_HOME' => 0,
    'LEVEL_SEPARATOR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_546102669182d0_43292598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546102669182d0_43292598')) {function content_546102669182d0_43292598($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('html_head', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0]->block_html_head(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
<link rel="alternate" type="application/rss+xml" title="<?php echo l10n('Photos only RSS feed');?>
" href="<?php echo $_smarty_tpl->tpl_vars['U_FEED_IMAGE_ONLY']->value;?>
"> 
<link rel="alternate" type="application/rss+xml" title="<?php echo l10n('Complete RSS feed (photos, comments)');?>
" href="<?php echo $_smarty_tpl->tpl_vars['U_FEED']->value;?>
"> 
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0]->block_html_head(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 

<?php if (isset($_smarty_tpl->tpl_vars['MENUBAR']->value)){?><?php echo $_smarty_tpl->tpl_vars['MENUBAR']->value;?>
<?php }?>
<div id="content" class="content<?php if (isset($_smarty_tpl->tpl_vars['MENUBAR']->value)){?> contentWithMenu<?php }?>">

  <div class="titrePage">
    <ul class="categoryActions">
    </ul>
    <h2><a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><?php echo l10n('Home');?>
</a><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;?>
<?php echo l10n('Notification');?>
</h2>
  </div>
  
<?php echo $_smarty_tpl->getSubTemplate ('infos_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <div class="notification">
  <p><?php echo l10n('The RSS notification feed provides notification on news from this website : new photos, updated albums, new comments. Use a RSS feed reader.');?>
</p>

  <dl>
    <dt>
      <a href="<?php echo $_smarty_tpl->tpl_vars['U_FEED_IMAGE_ONLY']->value;?>
"><?php echo l10n('Photos only RSS feed');?>
</a><br><br>
    </dt>
    <dt>
      <a href="<?php echo $_smarty_tpl->tpl_vars['U_FEED']->value;?>
"><?php echo l10n('Complete RSS feed (photos, comments)');?>
</a>
    </dt>
  </dl>
  </div>
</div>
<?php }} ?>