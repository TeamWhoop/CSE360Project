<?php /* Smarty version Smarty-3.1.13, created on 2014-11-10 17:27:27
         compiled from ".\themes\default\template\comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:282745460e76f1e6be0-26041029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c713d0faf524397262d4ba58d5c1b9161657d32' => 
    array (
      0 => '.\\themes\\default\\template\\comments.tpl',
      1 => 1415635788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282745460e76f1e6be0-26041029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENUBAR' => 0,
    'U_HOME' => 0,
    'LEVEL_SEPARATOR' => 0,
    'F_ACTION' => 0,
    'F_KEYWORD' => 0,
    'F_AUTHOR' => 0,
    'categories' => 0,
    'categories_selected' => 0,
    'since_options' => 0,
    'since_options_selected' => 0,
    'sort_by_options' => 0,
    'sort_by_options_selected' => 0,
    'sort_order_options' => 0,
    'sort_order_options_selected' => 0,
    'item_number_options' => 0,
    'item_number_options_selected' => 0,
    'navbar' => 0,
    'comments' => 0,
    'derivative_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5460e76f903ca2_02451530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460e76f903ca2_02451530')) {function content_5460e76f903ca2_02451530($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\scripts\\piwigo\\include\\smarty\\libs\\plugins\\function.html_options.php';
?><?php if (isset($_smarty_tpl->tpl_vars['MENUBAR']->value)){?><?php echo $_smarty_tpl->tpl_vars['MENUBAR']->value;?>
<?php }?>
<div id="content" class="content<?php if (isset($_smarty_tpl->tpl_vars['MENUBAR']->value)){?> contentWithMenu<?php }?>">

<div class="titrePage">
	<ul class="categoryActions">
	</ul>
	<h2><a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><?php echo l10n('Home');?>
</a><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;?>
<?php echo l10n('User comments');?>
</h2>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('infos_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<form class="filter" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="get">

  <fieldset>
    <legend><?php echo l10n('Filter');?>
</legend>

		<ul>
			<li>
				<label><?php echo l10n('Keyword');?>
</label>
			</li>
			<li>
				<input type="text" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['F_KEYWORD']->value;?>
">
			</li>
		</ul>

		<ul>
			<li>
				<label><?php echo l10n('Author');?>
</label>
			</li>
			<li>
				<input type="text" name="author" value="<?php echo $_smarty_tpl->tpl_vars['F_AUTHOR']->value;?>
">
			</li>
		</ul>

		<ul>
			<li>
				<label><?php echo l10n('Album');?>
</label>
			</li>
			<li>
				<select name="cat">
					<option value="0">------------</option>
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categories']->value,'selected'=>$_smarty_tpl->tpl_vars['categories_selected']->value),$_smarty_tpl);?>

				</select>
			</li>
		</ul>

		<ul>
			<li>
				<label><?php echo l10n('Since');?>
</label>
			</li>
			<li>
				<select name="since">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['since_options']->value,'selected'=>$_smarty_tpl->tpl_vars['since_options_selected']->value),$_smarty_tpl);?>

				</select>
			</li>
		</ul>

  </fieldset>

  <fieldset>

    <legend><?php echo l10n('Display');?>
</legend>

		<ul>
			<li>
				<label><?php echo l10n('Sort by');?>
</label>
			</li>
			<li>
				<select name="sort_by">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['sort_by_options']->value,'selected'=>$_smarty_tpl->tpl_vars['sort_by_options_selected']->value),$_smarty_tpl);?>

				</select>
			</li>
		</ul>

		<ul>
			<li>
				<label><?php echo l10n('Sort order');?>
</label>
			</li>
			<li>
				<select name="sort_order">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['sort_order_options']->value,'selected'=>$_smarty_tpl->tpl_vars['sort_order_options_selected']->value),$_smarty_tpl);?>

				</select>
			</li>
		</ul>

		<ul>
			<li>
				<label><?php echo l10n('Number of items');?>
</label>
			</li>
			<li>
				<select name="items_number">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['item_number_options']->value,'selected'=>$_smarty_tpl->tpl_vars['item_number_options_selected']->value),$_smarty_tpl);?>

				</select>
			</li>
		</ul>

  </fieldset>

  <p><input type="submit" value="<?php echo l10n('Filter and display');?>
"></p>

</form>

<?php if (!empty($_smarty_tpl->tpl_vars['navbar']->value)){?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['get_extent'][0][0]->get_extent('navigation_bar.tpl','navbar'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['comments']->value)){?>
<div id="comments">
<?php echo $_smarty_tpl->getSubTemplate ('comment_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('comment_derivative_params'=>$_smarty_tpl->tpl_vars['derivative_params']->value), 0);?>

</div>
<?php }?>

</div> <!-- content -->

<?php }} ?>