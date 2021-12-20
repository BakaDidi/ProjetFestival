{extends file='layout.tpl'}
{block name=title}Erreur{/block}
{block name=body}
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <h1> Vous n'avez pas accès à cette page</h1>
                        <a href='./'>Retourner à l'index</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}