<?php 
    require_once "common/header.php";
    require_once "common/menu.php";
?>
   
<h1>Exercise 3</h1>
<h2>Circle - Perimeter and Aera</h2>
<?php
    // Display the form with php
    //Use POST method to send form informations 
    echo    '<form action="#" method="POST">',
                '<label for="radius">Input the radius of circle : </label>',
                '<input type="number" step="any" min="0" name="radius" id="radius" required > <br>',
                '<label for="perimeter">Calculate de perimeter  : </label>',
                '<input type="checkbox" name="perimeter" id="perimeter" checked > <br>',
                '<label for="aera">Calculate the aera : </label>',
                '<input type="checkbox" name="aera" id="aera" checked > <br>',
                '<input type="submit" value="Valider">',
            '</form>';

    //Vérifier si la variable $_POST est définie.
    if(isset($_POST["radius"]) && $_POST["radius"] > 0){ 

        $radius = filter_var($_POST["radius"], FILTER_VALIDATE_FLOAT); //Filtrer de nombres.

        $perimeter = $radius * 2 * pi();
        $aera = pi() * pow($radius, 2);

        echo "<h4>Result</h4>";
        
        if(isset($_POST["perimeter"])){
            echo "Perimeter of circle with radius : ".$radius." is : ".round($perimeter, 2)."<br>"; 
        }
        if(isset($_POST["aera"])){
            echo "Aera of circle with radius : ".$radius." is : ".round($aera, 2)."<br>"; 
        }
    
    }
    else{
        echo "<h4>Input a value in the text box!</h4>"; 
    }
?>

<?php require_once "common/footer.php";?>