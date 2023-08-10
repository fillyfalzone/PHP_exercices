<?php 
    require_once "common/header.php";
    require_once "common/menu.php";   
?>
<h1>Exercise 7</h1>
<h2>Table</h2>
<h3>Check each value of table.</h3>

<?php

    $tab = [2, 20, 4, 3, 26, 30];
    $tabImplode = implode(',', $tab); //change table to string separate each value by ",".
    echo 'Table : '.$tabImplode; 
    
    echo '<h2> Result : </h2>';

    if(checkTable($tab)){
        echo 'Table contain only paired values.';
    } else {
        echo 'Table contain unpaired values.';
    }

    // function to run in each table's value
    function checkTable($table){
        for($i = 0; $i < count($table); $i++){
            if($table[$i] % 2 !== 0){
                return false; // return false if there unpaired value
            }
        }
        return true;
    }
    

  
    
?>


<?php require_once "common/footer.php";?>