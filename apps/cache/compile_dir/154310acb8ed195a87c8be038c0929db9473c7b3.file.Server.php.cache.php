<?php /* Smarty version Smarty-3.1.16, created on 2014-02-08 02:57:46
         compiled from "D:\xampp\htdocs\ypCore2\apps\admin\view\\simple\module\Setting\Server.php" */ ?>
<?php /*%%SmartyHeaderCode:1406552f58f1a3513d2-25883921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '154310acb8ed195a87c8be038c0929db9473c7b3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\admin\\view\\\\simple\\module\\Setting\\Server.php',
      1 => 1391765300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1406552f58f1a3513d2-25883921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Header' => 0,
    'error' => 0,
    'success' => 0,
    'form_action' => 0,
    'text_pagetitle' => 0,
    'button_save_setting' => 0,
    'disk_use_on_total' => 0,
    'text_disk_space' => 0,
    'disk_class' => 0,
    'disk_used' => 0,
    'text_host_name' => 0,
    'text_server_loadavg' => 0,
    'serverLoadAvg' => 0,
    'text_setting_phpinfo' => 0,
    'phpinfo_link' => 0,
    'text_setting_debug' => 0,
    'settings' => 0,
    'text_on' => 0,
    'text_off' => 0,
    'text_setting_upload_dir' => 0,
    'Footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f58f1a4c2798_42498116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f58f1a4c2798_42498116')) {function content_52f58f1a4c2798_42498116($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['Header']->value;?>

<a href="#" class="close"></a></div><?php }?>
<a href="#" class="close"></a></div><?php }?>

" method="post">
</h2>
</button>
</label>
" style="width: <?php echo $_smarty_tpl->tpl_vars['disk_use_on_total']->value;?>
%;"><?php echo $_smarty_tpl->tpl_vars['disk_used']->value;?>
 MB (<?php echo $_smarty_tpl->tpl_vars['disk_use_on_total']->value;?>
%)</span>
</label>
: <span id="serverLoadAvg"><?php echo $_smarty_tpl->tpl_vars['serverLoadAvg']->value;?>
</span>% <span id="serverRefresh"></span>
</label>
</a></p>
</label>
<br />
<br />
</label>
">
<?php }} ?>