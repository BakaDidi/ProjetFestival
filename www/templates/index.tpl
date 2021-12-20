{extends file='layout.tpl'}
{block name=title}Accueil{/block}
{block name=body}
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <h1 class="text-center">Accueil</h1>
                        <hr class="divider">
                        {if isset($utilisateur)}
                        <p>Vous êtes connecté {$utilisateur.nom_utilisateur}</p>
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
                            else
                            {
                            echo "<h3>Formuler une candidature</h3>";
                            echo "<a href='candidature'>Formuler ma candidature</a>";
                            }
                            endforeach;
                        {/php}

                        {else}
                        <p>Vous n'êtes pas connecté</p>
                        <p>Connectez vous sur la page <a href='login'>connexion</a></p>
                        <p>Ou inscrivez-vous  <a href='register'>inscription</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
{/if}

</div>
{/block}