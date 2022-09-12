<?php

$czamyra = array (
    array('1', 'Bulbasaur', 'Grass', 'Poison', 'Overgrow', '45', '49', '49'),
    array('2', 'Ivysaur', 'Grass', 'Poison', 'Overgrow', '60', '62', '63'),
    array('3', 'Venusaur', 'Grass', 'Poison', 'Overgrow', '80', '82', '83'),

    array('4', 'Charmander', 'Fire', 'N/A', 'Blaze', '39', '52', '43'),
    array('5', 'Charmeleon', 'Fire', 'N/A', 'Blaze', '58', '64', '58'),
    array('6', 'Charizard', 'Fire', 'Flying', 'Blaze', '78', '84', '78'),

    array('7', 'Squirtle', 'Water', 'N/A', 'Torrent', '44', '48', '65'),
    array('8', 'Wartortle', 'Water', 'N/A', 'Torrent', '59', '63', '80'),
    array('9', 'Blastoise', 'Water', 'N/A', 'Torrent', '79', '83', '100'),
    
    array('10', 'Caterpie', 'Bug', 'N/A', 'Shield Dust', '50', '20', '55')
    );
   
    echo "<h2><p><b> Pokemon </b></p></h2>";
   
    echo "<table border=5>
        <tr>
            <th> ID </th>
            <th> Species </th>
            <th> Type1 </th>
            <th> Type2 </th>
            <th> Ability </th>
            <th> Hp </th>
            <th> Attack </th>
            <th> Defense </th>
        </tr>";
   
    for ($row = 0; $row < 10; $row++) {
        echo "<tr>";
    
    for ($col = 0; $col < 8; $col++) {
        echo "<td>".$czamyra[$row][$col]."</td>";
        }
        echo "</tr>";
    }

    echo "</table>" ;  
        echo "<br>";
    
    echo "<b>The Array: </b>";

    echo '<pre>' ;
        print_r($czamyra);
    echo '</pre>';
    
    echo "<b>Number of element in array: </b>";
        echo count ($czamyra, COUNT_RECURSIVE);
    
    echo "<br>";
    echo "<br>";
    
    echo "<b>Our Favorite Specie: </b>";
        $favorite = $czamyra[5][1];
            print_r($favorite);
        
    echo "<br>";
    echo "<br>";

    echo "<b>The Species are: </b>";
    
    foreach ($czamyra as $value){
        echo "<br>";
            echo $value [1] ;
    }

?>