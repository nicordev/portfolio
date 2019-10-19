<?php

ob_start();
?>
<section class="content">
    <div class="box">
        <h3>La formation OpenClassrooms</h3>

        <hr>

        <div class="card-deck">
            <div class="card">
                <div class="card-title-wrapper">
                    <h5 class="card-title">Développeur d'application php/symfony</h5>
                </div>

                <div class="card-body">
                    <a class="card-body-element" href="https://openclassrooms.com/fr/paths/59-developpeur-dapplication-php-symfony">Voir le contenu de la formation</a>
                </div>
            </div>
        </div>
    </div>

    <div class="box">
        <h3>Mes projets liés à la formation</h3>

        <hr>

        <h4>Projets réalisés</h4>

        <div class="card-deck">
            <div class="card" >
                <div class="card-title-wrapper">
                    <h5 class="card-title">Intégrez un thème Wordpress pour un client</h5>
                </div>

                <div class="card-body">
                    <a class="card-body-element" href="https://formation-oc-php.sansgodasses.com/projet-2/">Voir le site</a>
                </div>
            </div>

            <div class="card">
                <div class="card-title-wrapper">
                    <h5 class="card-title">Analysez les besoins de votre client pour son Festival de films</h5>
                </div>

                <div class="card-body">
                    <a class="card-body-element" href="https://formation-oc-php.sansgodasses.com/projet-3/">Voir le site</a>
                    <a class="card-body-element" href="https://github.com/nicordev/formation-oc-php-projet3-livrables">Voir le code</a>
                </div>
            </div>

            <div class="card">
                <div class="card-title-wrapper">
                    <h5 class="card-title">Concevez la solution technique d'une application de restauration en ligne, Express Food</h5>
                </div>

                <div class="card-body">
                    <a class="card-body-element" href="https://github.com/nicordev/formation-oc-php-projet4-bd">Voir les fichiers</a>
                </div>
            </div>

            <div class="card">
                <div class="card-title-wrapper">
                    <h5 class="card-title">Créez votre premier blog en PHP</h5>
                </div>

                <div class="card-body">
                    <a class="card-body-element" href="https://blog.sansgodasses.com/">Voir le site</a>
                    <a class="card-body-element" href="https://github.com/nicordev/formation-oc-php-projet5-blog">Voir le code</a>
                </div>
            </div>

            <div class="card">
                <div class="card-title-wrapper">
                    <h5 class="card-title">Développez de A à Z le site communautaire SnowTricks</h5>
                </div>

                <div class="card-body">
                    <a class="card-body-element" href="https://snowtricks.sansgodasses.com/">Voir le site</a>
                    <a class="card-body-element" href="https://github.com/nicordev/formation-oc-php-projet6-symfony">Voir le code</a>
                </div>
            </div>

            <div class="card" >
                <div class="card-title-wrapper">
                    <h5 class="card-title">Créez un web service exposant une API</h5>
                </div>

                <div class="card-body">
                    <p>Vous pouvez tester les endpoints de l'API avec <a href="https://insomnia.rest/">insomnia</a> sur ocp7.nicordev.com</p>
                    <a href="http://ocp7.nicordev.com/api/doc">Voir la documentation (/api/doc)</a>
                    <a class="card-body-element" href="https://github.com/nicordev/formation-oc-php-projet7-api-rest">Voir le code</a>
                </div>
            </div>

            <div class="card" >
                <div class="card-title-wrapper">
                    <h5 class="card-title">Améliorez une application existante de ToDo & Co</h5>
                </div>

                <div class="card-body">
                    <a href="https://ocp8.nicordev.com/login">Voir le site</a>
                    <a href="https://nicordev.github.io/formation-oc-php-projet8-todoco/">Voir la documentation</a>
                    <a class="card-body-element" href="https://github.com/nicordev/formation-oc-php-projet8-todoco">Voir le code</a>
                </div>
            </div>
        </div>

        <h4>Projets en cours</h4>

        <div class="card-deck">
            <div class="card" >
                <div class="card-title-wrapper">
                    <h5 class="card-title">Construire votre outil de veille technologique</h5>
                </div>

                <div class="card-body"></div>
            </div>
        </div>
    </div>

    <div class="box">
        <h3>Mes projets perso (antérieurs à la formation)</h3>

        <hr>

        <div class="card-deck">
            <div class="card">
                <div class="card-title-wrapper">
                    <h5 class="card-title">Un site pour s'orienter en balade</h5>
                </div>

                <div class="card-body">
                    <a class="card-body-element" href="https://carte.ovh">Voir le site</a>
                </div>
            </div>

            <div class="card">
                <div class="card-title-wrapper">
                    <h5 class="card-title">Un site sur la course pieds nus</h5>
                </div>

                <div class="card-body">
                    <a class="card-body-element" href="https://sansgodasses.com">Voir le site</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

return ob_get_clean();
