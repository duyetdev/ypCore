<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 10:43:38
         compiled from "D:\xampp\htdocs\ypCore2\content\\default\module\News\Comment_Block.php" */ ?>
<?php /*%%SmartyHeaderCode:264452f89f4a63ea17-30890186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efb20ee8ecceec706fa9fabe7db61c5f893dfee8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\content\\\\default\\module\\News\\Comment_Block.php',
      1 => 1389803997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '264452f89f4a63ea17-30890186',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_action' => 0,
    'text_comment' => 0,
    'error' => 0,
    'success' => 0,
    'is_login' => 0,
    'text_username' => 0,
    'user' => 0,
    'text_email' => 0,
    'text_placeholder_username' => 0,
    'text_placeholder_email' => 0,
    'captcha' => 0,
    'captcha_img_url' => 0,
    'text_placeholder_captcha' => 0,
    'post_id' => 0,
    'text_placeholder_comment' => 0,
    'text_button_comment' => 0,
    'text_login_after_button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f89f4a6dd534_55828630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f89f4a6dd534_55828630')) {function content_52f89f4a6dd534_55828630($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
" method="POST">
</h3>
</div><?php }?>
</div><?php }?>
: <?php if (!empty($_smarty_tpl->tpl_vars['user']->value['full_name'])) {?><?php echo $_smarty_tpl->tpl_vars['user']->value['full_name'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
<?php }?></p>
: <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</p>
">
">
" alt="" title="" />
" style="width: 50%" />
" /> 
"></textarea>
</button> 
<?php }?>