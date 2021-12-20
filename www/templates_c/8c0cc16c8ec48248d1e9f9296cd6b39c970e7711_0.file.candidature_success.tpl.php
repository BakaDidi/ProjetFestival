<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-20 20:21:52
  from 'C:\laragon\www\projetWeb2\templates\candidature_success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61c0e5e076fb15_72318217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c0cc16c8ec48248d1e9f9296cd6b39c970e7711' => 
    array (
      0 => 'C:\\laragon\\www\\projetWeb2\\templates\\candidature_success.tpl',
      1 => 1640029244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c0e5e076fb15_72318217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9321801761c0e5e076edc2_22042369', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152903011961c0e5e076f650_76821488', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_9321801761c0e5e076edc2_22042369 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9321801761c0e5e076edc2_22042369',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Candidature<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_152903011961c0e5e076f650_76821488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_152903011961c0e5e076f650_76821488',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <h1> Votre candidature a été prise en compte </h1>
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
