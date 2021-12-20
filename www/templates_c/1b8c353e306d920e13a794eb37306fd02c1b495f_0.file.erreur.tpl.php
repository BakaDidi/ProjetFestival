<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-20 20:20:05
  from 'C:\laragon\www\projetWeb2\templates\erreur.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61c0e5757b1809_40927400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b8c353e306d920e13a794eb37306fd02c1b495f' => 
    array (
      0 => 'C:\\laragon\\www\\projetWeb2\\templates\\erreur.tpl',
      1 => 1640031504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c0e5757b1809_40927400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18712336461c0e5757b0a49_90609254', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60584521561c0e5757b1312_31559963', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_18712336461c0e5757b0a49_90609254 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18712336461c0e5757b0a49_90609254',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Erreur<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_60584521561c0e5757b1312_31559963 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_60584521561c0e5757b1312_31559963',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <h1> Vous n'avez pas accès à cette page</h1>
                        <a href='./'>Retourner à l'index</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
