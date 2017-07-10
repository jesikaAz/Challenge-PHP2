<!DOCTYPE html>
<html>

<head>
    <title>Challenge-PHP2</title>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body> <!-- Les tests en PHP  -->

    <h1>Challenge n°2 sur PHP</h1>
    
   
    <div>
    
        <h2>Exercice 1 - Afficher les n premiers chiffres</h2>

        <p> Vous devez réaliser une fonction d'affichage. <br> La fonction prend en paramètres 2 nombres qui correspondent au début et à la fin d’une plage de nombres. </p>

        <?php 

        //Le tableau de nombres
        
        $nombre=array(1,2,3,4,5,6,7,8,9,10);
        
        //Cette fonction colore en bleu les nombres paires et en orange les nombres impaires.
        
        function colore($nombre){
            
            if ($nombre%2 == 0 && sqrt($nombre) == floor(sqrt($nombre))) {
                echo '<span class="gras">'.$nombre." ".'</span>';
            } else if ($nombre%2 == 1) {
                echo'<font color="blue">'.$nombre.'</font>';
            } else {
                echo'<font color="orange">'.$nombre.'</font>';
            }
        }
 
        //La boucle foreach scanne le tableau en appliquant la fonction colore
        
        echo 'Les n premiers nombres sont :<br/>';
        foreach($nombres as $nombre){
            echo ' ';
            colore($nombre);
            echo '<br/>';
        }
 
        ?> 
                                                  
    </div>
    
     <div>
        
        <h2>Exercice 2- Afficher le plus grand gap</h2>
    
        <p>Créer un algorithme qui calcule le plus grand écart entre deux entiers consecutifs dans un tableau passé en paramètre d'entrée.</p> 
        
    </div> 

    <div>
        
        <h2>Exercice 3 - Jeu de la fourchette</h2>

        <p> Simuler le jeu de la fourchette. Ce jeu consiste à essayer de découvrir un nombre quelconque compris entre 1 et 100 inclus, tiré au sort par l’ordinateur (la primitive rand(min, max) retourne un entier entre min et max). L’utilisateur a droit à huit essais maximum. À chaque essai, vous devrez afficher un message indicatif « nombre donné trop petit » ou « nombre donné trop grand ». En conclusion, soit « bravo, vous avez trouvé en [nombre] essai(s) » soit « désolé, le nombre était [valeur] ».</p>
        
    </div>   
    
</body>

</html>
