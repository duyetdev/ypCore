<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 12:36:34
         compiled from "D:\xampp\htdocs\ypCore2\content\\default\module\News\Comment_List_Block.php" */ ?>
<?php /*%%SmartyHeaderCode:335052f8b9c2a6fe47-05447720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '249f35069add314ead2b98445300f02a76f92e2d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\content\\\\default\\module\\News\\Comment_List_Block.php',
      1 => 1389801261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '335052f8b9c2a6fe47-05447720',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'text_comment_list' => 0,
    'comments' => 0,
    'text_no_comment' => 0,
    'comment' => 0,
    'is_admin' => 0,
    'delete_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f8b9c2b59039_96720323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f8b9c2b59039_96720323')) {function content_52f8b9c2b59039_96720323($_smarty_tpl) {?><div class="comment-list-box">
<h3><?php echo $_smarty_tpl->tpl_vars['text_comment_list']->value;?>
</h3>
<?php if ((count($_smarty_tpl->tpl_vars['comments']->value)==0)) {?>
  <h4><?php echo $_smarty_tpl->tpl_vars['text_no_comment']->value;?>
<h4>
<?php } else { ?>

  <div class="comment-list">
    <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
      <div class="comment-each">
        <p>
          <span class="comment-username">
           <a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['user_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['comment']->value['date'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['username'];?>
</a>
          </span>
            <?php echo $_smarty_tpl->tpl_vars['comment']->value['comment'];?>

          <?php if (($_smarty_tpl->tpl_vars['is_admin']->value)) {?>
           <a href="<?php echo $_smarty_tpl->tpl_vars['delete_link']->value[$_smarty_tpl->tpl_vars['comment']->value['id']];?>
"></a>
          <?php }?>
        </p>
      </div>
    <?php } ?>
  </div>

<?php }?>
</div><?php }} ?>