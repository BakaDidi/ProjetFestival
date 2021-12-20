<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 16:19:10
  from 'C:\laragon\www\Web\tps\TP4EXEMPLE\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb66fedf0128_78903198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08603b753da1d27dfd7cafa133dcc130a489fbb5' => 
    array (
      0 => 'C:\\laragon\\www\\Web\\tps\\TP4EXEMPLE\\templates\\index.tpl',
      1 => 1639657485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb66fedf0128_78903198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19090214461bb66feddae33_78430121', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53612533061bb66feddca45_22446979', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_19090214461bb66feddae33_78430121 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19090214461bb66feddae33_78430121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_53612533061bb66feddca45_22446979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_53612533061bb66feddca45_22446979',
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
