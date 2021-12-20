{extends file='layout.tpl'}
{block name=title}Profil{/block}
{block name=body}
<div class="container">
    <div class="row d-flex justify-content-center align-items-center ">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow" style="border-radius: 1rem;">
                <div class="card-body p-5">
                    <h1 class="text-center">Mon profil</h1>
                    <hr class="divider">
                    <h3>Nom d'utilisateur</h3>
                    <p class="text-body">{$utilisateur.nom_utilisateur}</p>
                    <h3>Email</h3>
                    <p class="text-body">{$utilisateur.email_utilisateur}</p>
                    <!-- N'affiche la possibilité de consulter sa candidature que si on en a déjà formulé une -->
                    {php}
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
                    {/php}
                </div>
            </div>
        </div>
    </div>
</div>
{/block}

