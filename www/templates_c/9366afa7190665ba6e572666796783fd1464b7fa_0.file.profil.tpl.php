<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 17:07:01
  from 'C:\laragon\www\Web\tps\TP4EXEMPLE\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb7235cbfbf4_37554137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9366afa7190665ba6e572666796783fd1464b7fa' => 
    array (
      0 => 'C:\\laragon\\www\\Web\\tps\\TP4EXEMPLE\\templates\\profil.tpl',
      1 => 1639658265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb7235cbfbf4_37554137 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70543877561bb7235cbc130_07183486', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199492490761bb7235cbc9c6_15588394', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_70543877561bb7235cbc130_07183486 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_70543877561bb7235cbc130_07183486',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_199492490761bb7235cbc9c6_15588394 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_199492490761bb7235cbc9c6_15588394',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Mon profil</h1>
    <p>Votre nom : <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value['Nom'];?>
</p>
</div>
<?php
}
}
/* {/block 'body'} */
}
