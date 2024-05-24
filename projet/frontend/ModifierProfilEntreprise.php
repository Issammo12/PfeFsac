
    <div class="profile-container">
        <form action="../../auth/update_entreprise.php" method="post">
            <h1>Modifier votre profil :</h1>
            <div class="line">
                <input type="text" name="nom_complet"   placeholder="Saisir votre nom:"/>
                <input type="text" name="Raison"   placeholder="Saisir votre raison:"/>
            </div>
            <div class="line">
                <input type="text" name="adresse"   placeholder="Saisir votre adresse:"/>
                <input type="text" name="ville_entreprise"  placeholder="Saisir votre ville:"/>
            </div>
            <div class="line">
                <input type="text" name="domaine"  placeholder="Saisir votre domaine d'activité:"/>
            </div>
            <input type="submit" value="Modifier" id='button' />
        </form>        
    </div>
