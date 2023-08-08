<?php 
    require_once "common/header.php";
    require_once "common/menu.php";
?>
   
<h1>Exercise 2</h1>
<h2>Build a Pyramid</h2>
<?php
    // Display the form with php
    //Use POST method to send form informations
    echo    '<form action="#" method="POST">',
                '<label for="height">Height of the pyramid : </label>',
                '<input type="number" name="height" id="height" min = "1" required > ',
                '<input type="submit" value="Submit">',
            '</form>';

    //function de la pyramide
    function pyramid($x){
        $txt = ''; 
        for($i = 0; $i < $x; $i++){
            $txt .= "00";
            echo $txt."<br>";
        } 
        for($j = $x; $j > 0; $j--){
            $txt = substr($txt, 0, strlen($txt) - 2); // substr() function slice a part of the character from de first index to last index minus 2.
            echo $txt."<br>";
        }
    }

    //Check if  $_POST variable is  défine.
    if(isset($_POST["height"]) && $_POST["height"] > 0){ 
    
        $filterheight = filter_var($_POST["height"], FILTER_VALIDATE_INT); //Filtrer de nombres entier.
        $height = $filterheight;
        echo "<h4>La height est : ".$height."</h4>";
       
        pyramid($height); 
    }
    else{
        echo "<h4>Input a value in the text box!</h4>"; 
    }
?>

<?php require_once "common/footer.php";?>