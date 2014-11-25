<?php /* Smarty version Smarty-3.1.13, created on 2014-11-10 17:19:10
         compiled from ".\themes\default\template\comment_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:229425460e57eb81755-41479132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f767d1eb21ac65c7744944a6a569d1c1d949a596' => 
    array (
      0 => '.\\themes\\default\\template\\comment_list.tpl',
      1 => 1415635788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229425460e57eb81755-41479132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comment_derivative_params' => 0,
    'ROOT_URL' => 0,
    'themeconf' => 0,
    'comments' => 0,
    'comment' => 0,
    'pwg' => 0,
    'derivative_params' => 0,
    'derivative' => 0,
    'current' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5460e5801490f5_80665389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460e5801490f5_80665389')) {function content_5460e5801490f5_80665389($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['comment_derivative_params']->value)){?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('html_style', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 .commentElement .illustration{ width:<?php echo $_smarty_tpl->tpl_vars['comment_derivative_params']->value->max_width()+5;?>
px } .content .commentElement .description{ min-height:<?php echo $_smarty_tpl->tpl_vars['comment_derivative_params']->value->max_height()+5;?>
px } <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
var error_icon = "<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/errors_small.png";<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="loader"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['img_dir'];?>
/ajax_loader.gif"></div>
<?php }?>
<ul class="commentsList">
<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['comment_loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['comment_loop']['index']++;
?>
<li class="commentElement <?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['foreach']['comment_loop']['index'])){?>odd<?php }else{ ?>even<?php }?>">
<?php if (isset($_smarty_tpl->tpl_vars['comment']->value['src_image'])){?>
<?php if (isset($_smarty_tpl->tpl_vars['comment_derivative_params']->value)){?>
	<?php $_smarty_tpl->tpl_vars['derivative'] = new Smarty_variable($_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['comment_derivative_params']->value,$_smarty_tpl->tpl_vars['comment']->value['src_image']), null, 0);?>
<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars['derivative'] = new Smarty_variable($_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params']->value,$_smarty_tpl->tpl_vars['comment']->value['src_image']), null, 0);?>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['derivative']->value->is_cached()){?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.ajaxmanager','path'=>'themes/default/js/plugins/jquery.ajaxmanager.js','load'=>'footer'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'thumbnails.loader','path'=>'themes/default/js/thumbnails.loader.js','require'=>'jquery.ajaxmanager','load'=>'footer'),$_smarty_tpl);?>

<?php }?>
	<div class="illustration">
		<a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['U_PICTURE'];?>
">
		<img <?php if ($_smarty_tpl->tpl_vars['derivative']->value->is_cached()){?>src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
"<?php }else{ ?>src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/img_small.png" data-src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
"<?php }?> alt="<?php echo $_smarty_tpl->tpl_vars['comment']->value['ALT'];?>
">
		</a>
	</div>
<?php }?>
	<div class="description">
<?php if (isset($_smarty_tpl->tpl_vars['comment']->value['U_DELETE'])||isset($_smarty_tpl->tpl_vars['comment']->value['U_VALIDATE'])||isset($_smarty_tpl->tpl_vars['comment']->value['U_EDIT'])){?>
		<div class="actions" style="float:right;font-size:90%">
<?php if (isset($_smarty_tpl->tpl_vars['comment']->value['U_DELETE'])){?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['U_DELETE'];?>
" onclick="return confirm('<?php echo strtr(l10n('Are you sure?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');">
				<?php echo l10n('Delete');?>

			</a><?php if (isset($_smarty_tpl->tpl_vars['comment']->value['U_VALIDATE'])||isset($_smarty_tpl->tpl_vars['comment']->value['U_EDIT'])||isset($_smarty_tpl->tpl_vars['comment']->value['U_CANCEL'])){?> | <?php }?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['comment']->value['U_CANCEL'])){?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['U_CANCEL'];?>
">
				<?php echo l10n('Cancel');?>

			</a><?php if (isset($_smarty_tpl->tpl_vars['comment']->value['U_VALIDATE'])){?> | <?php }?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['comment']->value['U_EDIT'])&&!isset($_smarty_tpl->tpl_vars['comment']->value['IN_EDIT'])){?>
			<a class="editComment" href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['U_EDIT'];?>
#edit_comment">
				<?php echo l10n('Edit');?>

			</a><?php if (isset($_smarty_tpl->tpl_vars['comment']->value['U_VALIDATE'])){?> | <?php }?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['comment']->value['U_VALIDATE'])){?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['U_VALIDATE'];?>
">
				<?php echo l10n('Validate');?>

			</a>
		<?php }?>&nbsp;
		</div>
<?php }?>
		<span class="commentAuthor"><?php if ($_smarty_tpl->tpl_vars['comment']->value['WEBSITE_URL']){?><a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['WEBSITE_URL'];?>
" class="external" target="_blank" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['comment']->value['AUTHOR'];?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['comment']->value['AUTHOR'];?>
<?php }?></span>
			<?php if (isset($_smarty_tpl->tpl_vars['comment']->value['EMAIL'])){?>- <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['comment']->value['EMAIL'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['EMAIL'];?>
</a><?php }?>
			- <span class="commentDate"><?php echo $_smarty_tpl->tpl_vars['comment']->value['DATE'];?>
</span>
<?php if (isset($_smarty_tpl->tpl_vars['comment']->value['IN_EDIT'])){?>
		<a name="edit_comment"></a>
		<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['comment']->value['U_EDIT'];?>
" id="editComment">
			<p><label for="contenteditid"><?php echo l10n('Edit a comment');?>
 :</label></p>
			<p><textarea name="content" id="contenteditid" rows="5" cols="80"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['CONTENT'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></p>
			<p><label for="website_url"><?php echo l10n('Website');?>
 :</label></p>
			<p><input type="text" name="website_url" id="website_url" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value['WEBSITE_URL'];?>
" size="40"></p>
			<p><input type="hidden" name="key" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value['KEY'];?>
">
				<input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value['PWG_TOKEN'];?>
">
				<input type="hidden" name="image_id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['comment']->value['IMAGE_ID'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['current']->value['id'] : $tmp);?>
">
				<input type="submit" value="<?php echo l10n('Submit');?>
">
			</p>
		</form>
<?php }else{ ?>
		<blockquote><div><?php echo $_smarty_tpl->tpl_vars['comment']->value['CONTENT'];?>
</div></blockquote>
<?php }?>
	</div>
</li>
<?php } ?>
</ul>
<?php }} ?>