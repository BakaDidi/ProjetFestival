<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-20 21:56:18
  from '/home/dylanh/www/templates/listeUtilisateur.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61c0edf266e950_92146520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98779125c6c75ae9cc0aa619a1d06d4145cc613d' => 
    array (
      0 => '/home/dylanh/www/templates/listeUtilisateur.tpl',
      1 => 1640033351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c0edf266e950_92146520 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23823359861c0edf266d3b6_84580546', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174287285461c0edf266dee9_16605292', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_23823359861c0edf266d3b6_84580546 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_23823359861c0edf266d3b6_84580546',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Liste des candidatures<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_174287285461c0edf266dee9_16605292 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_174287285461c0edf266dee9_16605292',
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
