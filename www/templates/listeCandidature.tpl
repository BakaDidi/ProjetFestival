{extends file='layout.tpl'}
{block name=title}Liste des candidatures{/block}

{block name=body}
<!-- On récupère toutes les informations nécessaire à l'affichage -->
    {php}
        $requete = get_results("SELECT * FROM candidature");
        $nomDepartement=get_results("SELECT departement_nom FROM departement dp, candidature cd WHERE dp.departement_id=departement_candidature");
        $nomScene=get_results("SELECT nom_scene FROM scene sc, candidature cd WHERE sc.id_scene=cd.scene_candidature");
        $i = 0;
    {/php}
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
                        {php}
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
                        {/php}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




{/block}
