<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-20 19:36:35
  from 'C:\laragon\www\projetWeb2\templates\listeUtilisateur.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61c0db43e523a1_78194274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b61d8341dd0dc22c1a7364504ea67409d663e366' => 
    array (
      0 => 'C:\\laragon\\www\\projetWeb2\\templates\\listeUtilisateur.tpl',
      1 => 1640028994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c0db43e523a1_78194274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142443870261c0db43e4f784_57451161', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202459117061c0db43e4ffd0_46496660', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_142443870261c0db43e4f784_57451161 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_142443870261c0db43e4f784_57451161',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Liste des candidatures<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_202459117061c0db43e4ffd0_46496660 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_202459117061c0db43e4ffd0_46496660',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- On récupère toute les informations nécessaires à l'affichage -->
    <?php 

        $requete = get_results("SELECT * FROM utilisateur");

    ?>

    <div class="container-fluid " xmlns="http://www.w3.org/1999/html">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <h1 class="">Liste des utilisateurs</h1>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom d'utilisateur</th>
                                <th scope="col">Email</th>
                                <th scope="col">Admin</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- Affiche les champs sous forme de tableau -->
                            <?php 
                                foreach ($requete as $value):
                                echo "<tr><th scope='row'>";
                                    echo $value['id_utilisateur'];
                                    echo "</th>";
                                    echo "<td>";
                                    echo $value['nom_utilisateur'];
                                    echo "</td><td>";
                                    echo $value['email_utilisateur'];
                                    echo "</td><td>";
                                    echo $value['admin'];
                                    echo "</td></tr>";
                                endforeach;
                            ?>
                            </tbody>
                        </table>
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
