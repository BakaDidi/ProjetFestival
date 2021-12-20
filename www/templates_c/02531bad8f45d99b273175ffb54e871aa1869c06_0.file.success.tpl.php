<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-20 16:38:54
  from 'C:\laragon\www\projetWeb2\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61c0b19e2980f1_19501866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02531bad8f45d99b273175ffb54e871aa1869c06' => 
    array (
      0 => 'C:\\laragon\\www\\projetWeb2\\templates\\success.tpl',
      1 => 1640018317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c0b19e2980f1_19501866 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13857176961c0b19e297377_37086527', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103642606861c0b19e297c16_34095660', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_13857176961c0b19e297377_37086527 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13857176961c0b19e297377_37086527',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Inscription réussie !<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_103642606861c0b19e297c16_34095660 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_103642606861c0b19e297c16_34095660',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <h1 class="text-center">Inscription Réussie !</h1>
                        <hr class="divider">
                        <p>connectez vous sur la page <a href='login'>connexion</a></p>
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
