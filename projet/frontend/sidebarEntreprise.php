
<?php
    $currentPage=basename($_SERVER['REQUEST_URI']);
    // echo $currentPage;
?>
        <aside class="sidebar">
            
            <ul>
                <li>
                    <a href="/projet/pages/Entreprise/SaisieOffre.page.php" <?php if($currentPage==="/projet/pages/Entreprise/SaisieOffre.page.php"){?> class="active" <?php }?>>
                        <i class="icon fas fa-upload"></i>
                        <span class="text">Publier une offre</span>
                    </a>
                </li>
                <li>
                    <a href="/projet/pages/Entreprise/ModifierProfil.page.php" <?php if($currentPage==="/projet/pages/Entreprise/ModifierProfil.page.php"){?> class="active" <?php }?>>
                        <i class="icon fas fa-user"></i>
                        <span class="text">Modifier votre profil</span>
                    </a>
                </li>
                <li>
                    <a href="/projet/pages/Entreprise/MesOffres.page.php" <?php if($currentPage==="/projet/pages/Entreprise/MesOffres.page.php"){?> class="active" <?php }?>>
                        <i class="icon fas fa-clipboard"></i>
                        <span class="text">Vos offres</span>
                    </a>
                </li>
                <li>
                    <a href="/projet/pages/Entreprise/VosCandidats.page.php">
                        <i class="icon fas fa-bell"></i>
                        <span class="text">Les Candidats</span>
                    </a>
                </li>
                <li>
                    <a href="/projet/logout.php">
                        <i class="icon fas fa-bell"></i>
                        <span class="text">Se deconnecter</span>
                    </a>
                </li>
            </ul>
        </aside>
