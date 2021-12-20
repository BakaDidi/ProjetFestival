<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-20 20:05:15
  from 'C:\laragon\www\projetWeb2\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61c0e1fbf23fb9_29324194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e457d3317ec04dd833c73937b4ca81c1715d28ce' => 
    array (
      0 => 'C:\\laragon\\www\\projetWeb2\\templates\\profil.tpl',
      1 => 1640028955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c0e1fbf23fb9_29324194 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121816190361c0e1fbf1e2c7_42933946', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123309500161c0e1fbf1eb60_08921801', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_121816190361c0e1fbf1e2c7_42933946 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_121816190361c0e1fbf1e2c7_42933946',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_123309500161c0e1fbf1eb60_08921801 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_123309500161c0e1fbf1eb60_08921801',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <div class="row d-flex justify-content-center align-items-center ">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow" style="border-radius: 1rem;">
                <div class="card-body p-5">
                    <h1 class="text-center">Mon profil</h1>
                    <hr class="divider">
                    <h3>Nom d'utilisateur</h3>
                    <p class="text-body"><?php echo $_smarty_tpl->tpl_vars['utilisateur']->value['nom_utilisateur'];?>
</p>
                    <h3>Email</h3>
                    <p class="text-body"><?php echo $_smarty_tpl->tpl_vars['utilisateur']->value['email_utilisateur'];?>
</p>
                    <!-- N'affiche la possibilité de consulter sa candidature que si on en a déjà formulé une -->
                    <?php 
                        $emailSession =$_SESSION['utilisateur']['email_utilisateur'];

                        $requete = get_result('SELECT id_utilisateur FROM utilisateur WHERE email_utilisateur="'.$emailSession.'"');
                        $requeteListeId =(get_results("SELECT id_representant_candidature FROM candidature"));
                        foreach ($requeteListeId as $value):
                        if($requete["id_utilisateur"]==$value["id_representant_candidature"])
                        {
                        $idCandidature = $requete["id_utilisateur"];
                        echo "<h3>Consulter ma candidature</h3>";
                        echo "<a href='candidatureDetail-$idCandidature'> consulter ma candidature </a>";
                        }
                        endforeach;
                    ?>
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
