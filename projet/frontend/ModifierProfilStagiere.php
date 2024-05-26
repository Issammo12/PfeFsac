


    
    <div class="profile-container">
        <form action="../../auth/update_clients.php" method="post">
            <h1>Modifier votre profil :</h1>
            <div class="line">
                <input type="text" name="nom_complet" placeholder="Entrer votre nom:" />
                <input type="text" name="telephone" placeholder="Entrer votre telephone:"  />
            </div>
            <div class="line">
                <input type="text" name="adresse" placeholder="Entrer votre adresse:"  />
                <input type="text" name="ville" placeholder="entrer votre ville:"  />
            </div>
            <div class="line">
                <input type="text" name="université" placeholder="entrer votre université:"  />
                <input type="file" name="cv" id="fileButton">
            </div>
            <input type="submit" value="Modifier" id='button' />
        </form>        
    </div>