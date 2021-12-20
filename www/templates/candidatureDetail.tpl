{extends file='layout.tpl'}
{block name=title}Candidature{/block}
{block name=body}
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <h1 class="text-center">Votre candidature</h1>
                <div class="card shadow" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                            <img src="uploads\{$requete[0]['nomGroupe_candidature']}\img\{$requete[0]['photo1_candidature']}" class="img-fluid">
                            <h1 class="">{$requete[0]['nomGroupe_candidature']}</h1>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th scope="row">audio</th>
                                    <td>
                                        <figure>
                                            <audio controls src="uploads\{$requete[0]['nomGroupe_candidature']}\mp3\{$requete[0]['mp3_fichier1_candidature']}"></audio>
                                        </figure>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">audio</th>
                                    <td>
                                        <figure>
                                            <audio controls src="uploads\{$requete[0]['nomGroupe_candidature']}\mp3\{$requete[0]['mp3_fichier2_candidature']}"></audio>
                                        </figure>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">audio</th>
                                    <td>
                                        <figure>
                                            <audio controls src="uploads\{$requete[0]['nomGroupe_candidature']}\mp3\{$requete[0]['mp3_fichier3_candidature']}"></audio>
                                        </figure>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">dept</th>
                                    <td>
                                        {$nomDepartement[0]['departement_nom']}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">adresse</th>
                                    <td>
                                        {$requete[0]['adresse_representant_candidature']}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">CP</th>
                                    <td>
                                        {$requete[0]['code_postal_representant_candidature']}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">SNDC</th>
                                    <td>
                                        {$requete[0]['soundcloud_candidature']|escape|default:''}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">WEB</th>
                                    <td>
                                        {$requete[0]['site_candidature']}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">YTB</th>
                                    <td>
                                        {$requete[0]['youtube_candidature']|escape|default:''}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">PRESENTATION</th>
                                    <td>
                                        {$requete[0]['presentation_candidature']}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">EXPERIENCES</th>
                                    <td>
                                        {$requete[0]['experience_candidature']}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">DOSSIER</th>
                                    <td>
                                        <a href="uploads\{$requete[0]['nomGroupe_candidature']}\pdf\{$requete[0]['dossier_presse_candidature']}">{$requete[0]['dossier_presse_candidature']}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">SACEM</th>
                                    <td>
                                        <a href="uploads\{$requete[0]['nomGroupe_candidature']}\pdf\{$requete[0]['document_sacem_candidature']}">{$requete[0]['document_sacem_candidature']}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">FICHE TECHNIQUE</th>
                                    <td>
                                        <a href="uploads\{$requete[0]['nomGroupe_candidature']}\pdf\{$requete[0]['fiche_technique_candidature']}">{$requete[0]['fiche_technique_candidature']}</a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}