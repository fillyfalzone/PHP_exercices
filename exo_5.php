<?php 
    require_once "common/header.php";
    require_once "common/menu.php";
?>
   
<h1>Exercise 5</h1>
<h2>Calculate Average</h2>


<?php 
    
    echo    '<form action="#" method="GET">',
                '<label for="nbNotes">Number of notes : </label>',
                '<input type="text" name="nbNotes" id="nbNotes" min="0" step="any" required> ',
                '<input type="submit" value="Validate"> <br>',
            '</form>';
    // Check if informations are send in GET method by form, and if we have two notes at leat.
    if(isset($_GET["nbNotes"]) && $_GET["nbNotes"] > 2) {
        //check values of inputs with a filter
        $nbNotesFilter = filter_var($_GET["nbNotes"], FILTER_VALIDATE_FLOAT);
        $nbNotes = $nbNotesFilter; 

            //Generate number of inputs that we want
            echo    '<form action="#" method="POST">',
                        '<fieldset>',
                            '<legend>Insert notes to calculate average</legend>';
                            for($i = 1; $i <= $nbNotes; $i++){
                                echo    '<label for="note'.$i.'">note '.$i.' : </label>',
                                        '<input type="number" name="note'.$i.'" id="note'.$i.'" min="0" max="20" step="any" required><br>';
                            }

            echo             '<input type="hidden" name="calculate">', //using invisible input to post notes
                             '<br><input type="submit" value="Calculate"> ',     
                        '</fieldset>',
                    '</form>';

        if(isset($_POST["calculate"])){
            $note = []; 
            $sumNotes = 0;
            for($i = 1; $i <= $nbNotes; $i++){
                $notesFilter = filter_var($_POST["note".$i], FILTER_VALIDATE_FLOAT); // check each time if inputs informations are safe.
                if($notesFilter !== false){ // check if filter is a success.
                    $note[$i] = $notesFilter;
                    $sumNotes += $notesFilter; // Add each note at total.
                }                 
            }
            $average = $sumNotes / $nbNotes; //calculate average.
            echo 'La moyenne des notes est de : '.$average;
        }
        
    } else {
        echo "You must enter at least two notes.";
    }
      
?>

<?php require_once "common/footer.php";?>