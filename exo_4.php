<?php 
    require_once "common/header.php";
    require_once "common/menu.php";
?>
   
<h1>Exercise 4</h1>
<h2>Guess The Number</h2>
<p>Are you lucky? Guess the number generate by IA between 0 and 5! </p>

<?php

   // We start a session to save a generate number 
   session_start();

   if(!isset($_SESSION['numGenerated'])){
       $_SESSION['numGenerated'] = rand(0, 5); // generate number between 0 and 10
   } elseif(isset($_POST["reset"])){
       $_SESSION['numGenerated'] = rand(0, 5); // Reset generate number
   }

   $numGenerated = $_SESSION['numGenerated'];

    // Affichage du formulaire en utilisant PHP
    echo '<form action="#" method="POST">',
        '<input type="hidden" name="reset" value="yes">',
        '<input type="submit" value="Reset"> <br><br>',
        '</form>',
        '<form action="#" method="POST">',
        '<label for="guessNumber">Find the number : </label>',
        '<input type="number" name="guessNumber" id="guessNumber" min="0" required>',
        '<input type="submit" value="Soumettre">',
        '</form>';

 
    
    // Check post informations
    if (isset($_POST["guessNumber"]) && $_POST["guessNumber"] >= 0) {
        $filterGuessNumber = filter_var($_POST["guessNumber"], FILTER_VALIDATE_INT); // Filtre l'entrée en tant qu'entier
        $guessNumber = $filterGuessNumber;

        //check the player choice
        if($guessNumber === $numGenerated ){
            echo "Congratulations you won :) <br>";
        } elseif ($numGenerated < $guessNumber){
            echo "Your number is gigger ! <br>";
        } else {
            echo "Your number is lower ! <br>";
        }
        echo "the number to guess was ".$numGenerated;
    } else {
        echo "<h4>Entrez une valeur dans la case de texte !</h4>";
    }
?>


<?php require_once "common/footer.php";?>