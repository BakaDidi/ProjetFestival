<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 11:54:52
  from 'C:\Users\rocar\OneDrive\Bureau\web\tps\TP4EXEMPLE\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb290cde2c52_50079313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd08b1348be21289f23b65492443032d3840769e8' => 
    array (
      0 => 'C:\\Users\\rocar\\OneDrive\\Bureau\\web\\tps\\TP4EXEMPLE\\templates\\success.tpl',
      1 => 1636455180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb290cde2c52_50079313 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78161602661bb290cde1554_56326231', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74642892761bb290cde26c9_15441769', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_78161602661bb290cde1554_56326231 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_78161602661bb290cde1554_56326231',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Succès!<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_74642892761bb290cde26c9_15441769 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_74642892761bb290cde26c9_15441769',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
Bien enregistré, vous pouvez vous rendre sur la page de <a href='login'>connexion</a>
</div>
<?php
}
}
/* {/block 'body'} */
}
