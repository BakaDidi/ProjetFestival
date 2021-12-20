<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 16:19:10
  from 'C:\laragon\www\Web\tps\TP4EXEMPLE\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb66fef019b0_46999931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4263b3011c1f3cc2b0ffc58dd75342691fda65c' => 
    array (
      0 => 'C:\\laragon\\www\\Web\\tps\\TP4EXEMPLE\\templates\\layout.tpl',
      1 => 1639658762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb66fef019b0_46999931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180676453961bb66feefab72_05000634', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205816109061bb66feefc309_37108475', 'head');
?>

</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155172831961bb66feefd8e3_74302420', 'menu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41018067361bb66fef00a07_61199530', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_180676453961bb66feefab72_05000634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_180676453961bb66feefab72_05000634',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_205816109061bb66feefc309_37108475 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_205816109061bb66feefc309_37108475',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
    <style>
    #main,footer{ padding:1em }
    </style>
    <link rel="stylesheet" href="templates/style.css">
    <?php
}
}
/* {/block 'head'} */
/* {block 'menu'} */
class Block_155172831961bb66feefd8e3_74302420 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_155172831961bb66feefd8e3_74302420',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<a href='./'>index</a>

<?php if (!(isset($_smarty_tpl->tpl_vars['utilisateur']->value))) {?>
    <a href='register'>inscription</a> 
    <a href='login'>connexion</a> 
<?php } else { ?>
    <a href='profil'>profil</a> 
    <a href='logout'>Se déconnecter</a> 
<?php }?>

<?php
}
}
/* {/block 'menu'} */
/* {block 'body'} */
class Block_41018067361bb66fef00a07_61199530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_41018067361bb66fef00a07_61199530',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Contenu générique<?php
}
}
/* {/block 'body'} */
}
