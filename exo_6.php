<?php 
    require_once "common/header.php";
    require_once "common/menu.php";
?>
   
<h1>Exercise 6</h1>
<h2>Selection Character</h2>


<?php 
    
    echo    '<form action="#" method="GET">',
                '<label for="character">Gender : </label>',
                '<select name="character" id="character">',
                    '<option value="male">Male</option>',
                    '<option value="female">Female</option>',
                '</select> ',
                '<input type="submit" value="Validate"> <br>',
            '</form>';
   
    if(isset($_GET["character"])){
        if($_GET["character"] === "male"){
            echo '<img src="imgs/pokko.jpg" alt="male">';
        } else{
            echo '<img src="imgs/peak.jpg" alt="female">';
        }
    } else {
        echo ".";
    }
      
?>

<?php require_once "common/footer.php";?>