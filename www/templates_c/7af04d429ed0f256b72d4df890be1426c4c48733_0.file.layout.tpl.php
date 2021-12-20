<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 12:46:17
  from 'C:\Users\rocar\OneDrive\Bureau\web\tps\TP4EXEMPLE\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb351907f167_90976033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7af04d429ed0f256b72d4df890be1426c4c48733' => 
    array (
      0 => 'C:\\Users\\rocar\\OneDrive\\Bureau\\web\\tps\\TP4EXEMPLE\\templates\\layout.tpl',
      1 => 1639658762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb351907f167_90976033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101998626761bb3519074bf4_97317772', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50370787061bb3519076989_63558485', 'head');
?>

</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78640835261bb3519077851_41627044', 'menu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133513828361bb351907e9e9_30901635', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_101998626761bb3519074bf4_97317772 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_101998626761bb3519074bf4_97317772',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_50370787061bb3519076989_63558485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_50370787061bb3519076989_63558485',
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
class Block_78640835261bb3519077851_41627044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_78640835261bb3519077851_41627044',
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
class Block_133513828361bb351907e9e9_30901635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_133513828361bb351907e9e9_30901635',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Contenu générique<?php
}
}
/* {/block 'body'} */
}
