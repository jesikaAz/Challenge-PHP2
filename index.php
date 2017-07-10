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

            //Cette fonction affiche en bleu les nombres paires et en orange les nombres impaires.

            function affichage($nombre){

                if ($nombre%2 == 0 && sqrt($nombre) == floor(sqrt($nombre))) {
                    echo '<span class="gras">'.$nombre." ".'</span>';
                } else if ($nombre%2 == 1) {
                    echo'<font color="blue">'.$nombre.'</font>';
                } else {
                    echo'<font color="orange">'.$nombre.'</font>';
                }
            }

            //La boucle foreach scanne le tableau en appliquant la fonction affichage

            echo 'Les n premiers nombres sont :<br/>';
            foreach($nombres as $nombre){
                echo ' ';
                affichage($nombre);
                echo '<br/>';
            }

        ?> 
                                                  
    </div>
    
     <div>
        
        <h2>Exercice 2- Afficher le plus grand gap</h2>
    
        <p>Créer un algorithme qui calcule le plus grand écart entre deux entiers consecutifs dans un tableau passé en paramètre d'entrée.</p> 
        
            <?php 
         
            $gap = 0;
            $size_tab =count($tab);
         
            function plusgrandGap (array $tab) {
                for ($i=0; $i<$size_tab-1; $i++) {
                    if ($tab($i)) && ($tab($i+1))-$size_tab;
                    $gap =($tab($i)) - $tab($i+1));
                        }
                    }
               return $gap;                    
    </div> 

    <div>
        
        <h2>Exercice 3 - Jeu de la fourchette</h2>

        <p> Simuler le jeu de la fourchette. Ce jeu consiste à essayer de découvrir un nombre quelconque compris entre 1 et 100 inclus, tiré au sort par l’ordinateur (la primitive rand(min, max) retourne un entier entre min et max). L’utilisateur a droit à huit essais maximum. À chaque essai, vous devrez afficher un message indicatif « nombre donné trop petit » ou « nombre donné trop grand ». En conclusion, soit « bravo, vous avez trouvé en [nombre] essai(s) » soit « désolé, le nombre était [valeur] ».</p>
       
        <? php 
        
            SESSION_START();
        
            if (!isset ($_SESSION ('find_number'))) {
                $find_number = rand(1,100); 
                $_SESSION ('find_number') = $find_number; 
            } else { 
                $find_number = $_SESSION ('find_number'); 
                   } 
            echo $find_number;
            
            if (!isset ($_SESSION ('count'))) {
                $count = 0;
                $_SESSION ('count') = $count; 
                
             } else { 
               $_SESSION ('count') = $_SESSION ('count') + 1; 
               $count = $_SESSION ('count');
                
            if ($count <= 8) {
                
                if ($nb < $find_number) {
                    echo "nombre donné trop petit";
                } else if ($nb > $find_number) {
                    echo "nombre donné trop grand";
                } else { 
                    echo "bravo, vous avez trouvé en [$count] essai(s)";
                } else {
                    echo "désolé, le nombre était [$find_number]";
                    
           SESSION_DESTROY();
           }
         
         ?>
         
    </div>   
    
</body>

</html>
