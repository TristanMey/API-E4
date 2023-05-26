<?php
        if(isset($_POST['ordreCroissant'])){

            //création d'une arrayList
            $array = [];

            //Push dans l'array tout les HP des champions 
            array_push($array,$champion->{'stats'}->{'hp'});

            //tri dans l'ordre croissant
            sort($array);

            foreach($lesObjets->{'data'} as $key => $champion){
                $array[$key] = $champion->{'name'};
            }

            $champion = $lesObjets->{'stats'}->{'hp'}->{$champion};

            
        }
?>
<div class="container">
    <br/>

    <br/><br/>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="boutonOrdre" class="col-md-10">
                    <form method="POST">
                        <div class="bouton">
                            <button value="ordreCroissant">Ordre Croissant </button>
                            <button value="ordreDecroissant">Ordre Decroissant </button>
                        </div>
                    </form>
                </div>
            <?php
            
			 echo "<table border = 1>
                <tr>
                    <th>Image</th> 
                    <th>Nom</th> 
                    <th>Titre</th>
                    <th>Déscription</th>
                    <th>Points de vie</th>
                    <th>Dégats d'attaques</th>
                </tr>";
                
                
                foreach($lesObjets->{'data'} as $key => $champion){
     
                    echo ("<tr>");
                        
                        echo("<td><img class='image' src='" . $urlImage . $champion->{'image'}->{'full'}) . "'></td>";
                        echo("<td>" . $champion->{'name'}) . "</td>";
                        echo("<td>" . $champion->{'title'}) .  "</td>";
                        echo("<td>" . $champion->{'blurb'}) .  "</td>";
                        echo("<td>" . $champion->{'stats'}->{'hp'})  ?> <i class="fa-solid fa-heart"></i> <?php   "</td>";
                        echo("<td>" . $champion->{'stats'}->{'attackdamage'})  ?> <i class="fa-solid fa-skull"></i> <?php  "</td>"; 
                
                    echo ("</tr>");

                }
                
                
            
            echo ("</table");
           
            
            ?>
            </div>
    </div>
</div>          