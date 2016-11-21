<?php /* Smarty version Smarty-3.1.18, created on 2016-10-24 10:31:49
         compiled from "views\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7228580dd66ea0ada4-12706128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e64ec67b9351f7c35c643899da1c549889b16a43' => 
    array (
      0 => 'views\\home.tpl',
      1 => 1477305103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7228580dd66ea0ada4-12706128',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580dd66ea0b5b4_55788938',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580dd66ea0b5b4_55788938')) {function content_580dd66ea0b5b4_55788938($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp64\\www\\AnimeFest\\libs\\plugins\\modifier.truncate.php';
?><h1 style="margin-left: 20px; font-size: 2.3em;">Anime airing this season</h1>
<div id="section">
  <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
      <div>
          <img src=images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
 style="width:100px; height:100px;">
          <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['anime'];?>
</h1>
          <content><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['summary'],40);?>
</content>
          <p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date'];?>
</p>
      </div>
  <?php } ?>
</div>
<?php }} ?>
