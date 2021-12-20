<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-20 22:41:02
  from '/home/dylanh/www/templates/success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61c0f86e1276b2_70205382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18b7655a641f6222d324bede4710e1120acec49b' => 
    array (
      0 => '/home/dylanh/www/templates/success.tpl',
      1 => 1640033351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c0f86e1276b2_70205382 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150137782561c0f86e126b88_43243048', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91303264061c0f86e127275_67111353', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_150137782561c0f86e126b88_43243048 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_150137782561c0f86e126b88_43243048',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Inscription réussie !<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_91303264061c0f86e127275_67111353 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_91303264061c0f86e127275_67111353',
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
