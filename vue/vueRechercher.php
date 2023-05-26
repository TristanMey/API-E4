<?php 
                
                if(isset($_POST['submitrecherche'])){

                    $recherche = ucfirst($_POST['recherche']);
                    $tableau = [];
                    foreach($lesObjets->{'data'} as $key => $champion){
                        $tableau[$key] = $champion->{'name'};
                    }
                    $champion = array_search($recherche,$tableau);
                    $champion = $lesObjets->{'data'}->{$champion};
                }
?>
<div class="container">
    <br/>

    <br/><br/>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="rechercher" class="col-md-10">
                    <form method="POST">
                        <label for="site-search">Chercher un champion :</label>
                        <input type="search" id="Chercher-champion" name="recherche">
                        <input type="submit" value="recherche" name="submitrecherche">
                    </form>
                </div>
                <?php if(isset($champion)){ 
                    echo "<table border = 2>
                    <tr>
                        <th>Image</th> 
                        <th>Nom</th> 
                        <th>Surnom</th>
                        <th>Déscription</th>
                        <th>Ressources</th>
                        <th>Points de vie</th>
                        <th>Dégats d'attaques</th>
                        <th>Armure</th>
                        <th>Vitesse de déplacement</th>
                        <th>Difficulté du champion</th>
                        
                    </tr>"; ?>
                <div>
                <?php 
                echo ("<tr>");
                        
                        echo("<td><img class='image' src='" . $urlImage . $champion->{'image'}->{'full'}) . "'></td>";
                        echo("<td>" . $champion->{'name'}) . "</td>";
                        echo("<td>" . $champion->{'title'}) .  "</td>";
                        echo("<td>" . $champion->{'blurb'}) .  "</td>";
                        echo("<td>" . $champion->{'partype'}) .  "</td>";
                        echo("<td>" . $champion->{'stats'}->{'hp'})  ?> <i class="fa-solid fa-heart"></i> <?php   "</td>";
                        echo("<td>" . $champion->{'stats'}->{'attackdamage'})  ?> <i class="fa-solid fa-skull"></i> <?php  "</td>"; 
                        echo("<td>" . $champion->{'stats'}->{'armor'}) .  "</td>";
                        echo("<td>" . $champion->{'stats'}->{'movespeed'}) .  "</td>";
                        echo("<td>" . $champion->{'info'}->{'difficulty'}) .  "</td>";

                echo ("</tr>");
                
            
            echo ("</table");
            ?>
                </div>
                <?php }else{
                    
                } ?>
            </div>
        </div>
</div