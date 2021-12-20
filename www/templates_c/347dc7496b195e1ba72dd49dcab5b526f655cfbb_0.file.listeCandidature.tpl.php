<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-20 21:56:19
  from '/home/dylanh/www/templates/listeCandidature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61c0edf3ce3ea4_45798712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '347dc7496b195e1ba72dd49dcab5b526f655cfbb' => 
    array (
      0 => '/home/dylanh/www/templates/listeCandidature.tpl',
      1 => 1640033351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c0edf3ce3ea4_45798712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102348644961c0edf3ce2870_51022236', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33670490561c0edf3ce3188_14816319', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_102348644961c0edf3ce2870_51022236 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_102348644961c0edf3ce2870_51022236',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Liste des candidatures<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_33670490561c0edf3ce3188_14816319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_33670490561c0edf3ce3188_14816319',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- On récupère toutes les informations nécessaire à l'affichage -->
    <?php 
        $requete = get_results("SELECT * FROM candidature");
        $nomDepartement=get_results("SELECT departement_nom FROM departement dp, candidature cd WHERE dp.departement_id=departement_candidature");
        $nomScene=get_results("SELECT nom_scene FROM scene sc, candidature cd WHERE sc.id_scene=cd.scene_candidature");
        $i = 0;
    ?>
<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center ">
        <div class="col-12 col-md-8 col-lg-8 col-xl-8">
            <div class="card shadow" style="border-radius: 1rem;">
                <div class="card-body p-5">
                    <h1 class="">Liste des candidatures</h1>
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom du groupe</th>
                            <th scope="col">Département d'origine</th>
                            <th scope="col">Nom de la scène désirée</th>
                            <th scope="col">Genre musical</th>
                            <th scope="col">Présentation du groupe</th>
                            <th scope="col">Expérience du groupe</th>
                            <th scope="col">Voir la candidature détaillée</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- On affiche les champs avec un tableau -->
                        <?php 
                            foreach ($requete as $value):
                                $idCandidature = $value['id_candidature'];
                                echo "<tr><th scope='row'>";
                                echo $value['id_candidature'];
                                echo "</th>";
                                echo "<td>";
                                echo $value['nomGroupe_candidature'];
                                echo "</td><td>";
                                echo $nomDepartement[$i]['departement_nom'];
                                echo "</td><td>";
                                echo $nomScene[$i]['nom_scene'];
                                echo "</td><td>";
                                echo $value['style_candidature'];
                                echo "</td><td>";
                                echo $value['presentation_candidature'];
                                echo "</td><td>";
                                echo $value['experience_candidature'];
                                echo "</td><td><a href='candidatureDetail-$idCandidature'> Détail de la candidature </a> </td> </tr>";
                                $i = $i + 1;
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
