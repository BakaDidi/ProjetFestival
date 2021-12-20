{extends file='layout.tpl'}
{block name=title}Liste des candidatures{/block}

{block name=body}
    <!-- On récupère toute les informations nécessaires à l'affichage -->
    {php}

        $requete = get_results("SELECT * FROM utilisateur");

    {/php}

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
                            {php}
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
                            {/php}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




{/block}
