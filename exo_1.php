<?php 
    require_once "common/header.php";
    require_once "common/menu.php";
?>
   
<h1>Exercise 1</h1>
<h2>Multiplication table</h2>
<?php
        // Display the form with php
        //Use POST method to send form informations 
    echo    '<form action="#" method="POST">',
                '<label for="number">Input a number : </label>',
                '<input type="number" name="number" id="number" required > ',
                '<input type="submit" value="Submit">',
            '</form>';

    //Check if  $_POST variable is  défine.
    if(isset($_POST["number"])){ 

        $number = filter_var($_POST["number"], FILTER_VALIDATE_INT); //Filtrer de nombres entier.
    
        echo "<h4>Multiplication table of ".$number."</h4>";
    
        function multiplication($x){
            for($i = 0; $i <= 10; $i++ ){
            echo $i." x ".$x." = ".$i*$x."<br>"; 
            }
        }   
        multiplication($number);
    }
    else{
        echo "<h4>Input a value in the text box!</h4>"; 
    }
?>

<?php require_once "common/footer.php";?>