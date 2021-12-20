<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 12:37:52
  from 'C:\Users\rocar\OneDrive\Bureau\web\tps\TP4EXEMPLE\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb332015c008_97694330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56218b98544688fd0409d31751ed5fad6d8b9a46' => 
    array (
      0 => 'C:\\Users\\rocar\\OneDrive\\Bureau\\web\\tps\\TP4EXEMPLE\\templates\\profil.tpl',
      1 => 1639658265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb332015c008_97694330 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73628066461bb33201587a5_97101492', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89991097761bb3320159054_81986214', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_73628066461bb33201587a5_97101492 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_73628066461bb33201587a5_97101492',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_89991097761bb3320159054_81986214 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_89991097761bb3320159054_81986214',
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
