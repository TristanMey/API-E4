<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="rechercher" class="col-md-10">
                    <form method="POST">
                        <select name="champion">
                            <option value="none">Choisir un Champion </option>
                            <?php 
                                foreach($lesObjets->{'data'} as $key => $champion){
                                    echo '<option value="'.$champion->{'name'}.'">'.$champion->{'name'}.'</option>'; 
                                }
                            ?>
                        </select>
                        <input type="submit" value="rechercher">
                    </form>
                </div>
            </div>
            <br>
            <br>
            <br>
                <?php if(isset($_POST['champion'])){ 
                    foreach ($lesObjets->{'data'} as $key => $champion){
                        if($_POST['champion'] == $champion->{'name'}){
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
                }
                    }
                    
            ?>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
</div