<?php
    $currentPage=basename($_SERVER['REQUEST_URI']);
?>
        <aside class="sidebar">
            <ul>
                <li <?php if($currentPage==="/projet/pages/Stagiere/Offre.page.php"){?> class="active" <?php } ?>>
                    <a href="/projet/pages/Stagiere/Offre.page.php" >
                        <i class="icon fas fa-house-user"></i>
                        <p>Acceuil</p>
                    </a>
                </li>
                <li <?php if($currentPage==="/projet/pages/Stagiere/ModifierProfil.page.php"){?> class="active" <?php }?>>
                    <a href="/projet/pages/Stagiere/ModifierProfil.page.php" >
                        <i class="icon fas fa-user"></i>
                        <p>Modifier votre profil</p>
                    </a>
                </li>
                <li <?php if($currentPage==="/projet/pages/Stagiere/Candidatures.page.php"){?> class="active" <?php }?>>
                    <a href="/projet/pages/Stagiere/Candidatures.page.php" >
                        <i class="icon fas fa-clipboard"></i>
                        <p>Vos postulations</p>
                    </a>
                </li>
                <li>
                    <a href="/projet/pages/Stagiere/Notification.page.php">
                        <i class="icon fas fa-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li>
                    <a href="/projet/logout.php">
                        <i class="icon fas fa-bell"></i>
                        <p>Se deconnecter</p>
                    </a>
                </li>
            </ul>
        </aside>       
      