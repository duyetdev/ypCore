<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 10:25:00
         compiled from "D:\xampp\htdocs\ypCore2\apps\admin\view\\simple\module\Setting\Template.php" */ ?>
<?php /*%%SmartyHeaderCode:1817752f89aec50a809-40332021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9a4e9663a6c5e5a1ea546647a5495d99f58ac47' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\admin\\view\\\\simple\\module\\Setting\\Template.php',
      1 => 1392024172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1817752f89aec50a809-40332021',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Header' => 0,
    'error' => 0,
    'success' => 0,
    'Leftmenu' => 0,
    'text_pagetitle' => 0,
    'form_action' => 0,
    'text_site_template' => 0,
    'template' => 0,
    '_template' => 0,
    'current_template' => 0,
    'text_admin_template' => 0,
    'admin_template' => 0,
    'current_admin_template' => 0,
    'text_cache_template' => 0,
    'cache_template' => 0,
    'text_on' => 0,
    'text_off' => 0,
    'button_save_setting' => 0,
    'Footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f89aec581702_90367449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f89aec581702_90367449')) {function content_52f89aec581702_90367449($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['Header']->value;?>

<a href="#" class="close"></a></div><?php }?>
<a href="#" class="close"></a></div><?php }?>

</h2>
" method="post">
</label>
 $_from = $_smarty_tpl->tpl_vars['template']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_template']->key => $_smarty_tpl->tpl_vars['_template']->value) {
$_smarty_tpl->tpl_vars['_template']->_loop = true;
?>
" <?php if (($_smarty_tpl->tpl_vars['_template']->value['dir']==$_smarty_tpl->tpl_vars['current_template']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['_template']->value['name'];?>
</option>
</label>
 $_from = $_smarty_tpl->tpl_vars['admin_template']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_template']->key => $_smarty_tpl->tpl_vars['_template']->value) {
$_smarty_tpl->tpl_vars['_template']->_loop = true;
?>
" <?php if (($_smarty_tpl->tpl_vars['_template']->value['dir']==$_smarty_tpl->tpl_vars['current_admin_template']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['_template']->value['name'];?>
</option>
</label>
 
<br />
</button>
