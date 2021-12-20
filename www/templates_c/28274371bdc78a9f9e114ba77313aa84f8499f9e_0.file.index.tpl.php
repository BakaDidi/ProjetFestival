<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 12:24:47
  from 'C:\Users\rocar\OneDrive\Bureau\web\tps\TP4EXEMPLE\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb300f2fb617_88950726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28274371bdc78a9f9e114ba77313aa84f8499f9e' => 
    array (
      0 => 'C:\\Users\\rocar\\OneDrive\\Bureau\\web\\tps\\TP4EXEMPLE\\templates\\index.tpl',
      1 => 1639657485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb300f2fb617_88950726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18067308961bb300f2f32f8_41335349', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179009571261bb300f2f3fc3_96001150', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_18067308961bb300f2f32f8_41335349 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18067308961bb300f2f32f8_41335349',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_179009571261bb300f2f3fc3_96001150 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_179009571261bb300f2f3fc3_96001150',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Home</h1>
<?php if ((isset($_smarty_tpl->tpl_vars['utilisateur']->value))) {?>
    <p>Vous etes connecté Mme <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value['Nom'];?>
</p>
<?php } else { ?>
    <p>Vous n'etes pas connecté</p>
    
<?php }?>
</div>
<?php
}
}
/* {/block 'body'} */
}
