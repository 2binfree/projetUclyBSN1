<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Universalitis</title>
    <link rel="stylesheet" href="Assets/css/forms.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
    <header>
        <a href="Index.html" class="Logo"> <img src="Assets/Images/logo.png" alt="Logo"></a>
        <div class="taskbar">
            <a href="#"><i class="fas fa-user-circle icon"></i></a>
            <a href="#"><i class="fas fa-bell icon"></i></a>
            <a href="#"><i class="fas fa-home icon"></i></a>
        </div>
    </header>
    <div class="block">
        
        <p class="text">Saisir votre question</p>
    </div>
<div class="quest_tri">
<?php
require_once("functions.php");
$question=array(

    array('questionT'=>"what is your question?",'time'=>"26/06/2019"),
    array('questionT'=>"how do you  say?",'time'=>"24/06/2017"),
    array('questionT'=> "how are you?",'time'=>"26/03/2018"),
     );
    
foreach($question as $k => $v){
    $d[$k] = $v['date'];
}
array_multisort($d, SORT_DESC , $question);

?>

<table>
    <?php foreach($question as $key => $value) : ?>
        <tr>
            <td><?php echo $value["questionT"] ?></td>
            <td><?php echo $value["time"] ?></td>
            
        </tr>
    <?php endforeach ?>
</table> 
    </div>

    <div class="categorie">
                <h2>Categories:</h2>
                <input type="radio" id="Finance" name="mots-clés" value="Finance">
                <label for="Finance">Finance</label>
                <input type="radio" id="Culture" name="mots-clés" value="Culture">
                <label for="Culture">Culture</label>
                <input type="radio" id="Divertissements" name="mots-clés" value="Divertissements">
                <label for="Divertissements">Divertissements</label>
                <input type="radio" id="Santé" name="mots-clés" value="Santé">
                <label for="Santé">Santé</label>
                <input type="radio" id="Sport" name="mots-clés" value="Sport">
                <label for="Sport">Sport</label>
             
                <input type="radio" id="Sciences" name="mots-clés" value="Sciences">
                <label for="Sciences">Sciences</label>
                <input type="radio" id="Technologies" name="mots-clés" value="Technologies">
                <label for="Technologies">Technologies</label>
                <input type="radio" id="Mode" name="mots-clés" value="Mode">
                <label for="Mode">Mode</label>
                <input type="radio" id="Cuisine" name="mots-clés" value="Cuisine">
                <label for="Cuisine">Cuisine</label>
                <input type="radio" id="Bricolage" name="mots-clés" value="Bricolage">
                <label for="Bricolage">Bricolage</label>
                <input type="radio" id="Voyage" name="mots-clés" value="Voyage">
                <label for="Voyage">Voyage</label>
    </div>
            

    <form class="" action="Index.html" method="post">

        <input Type="text" placeholder="Ecrivez votre question ici" id="myid" class="block sizebis"></input>
        <input value="Envoyer" class="button gauche" id="Confirm" type="submit"></input>
        <input type="button" onclick="window.location.href = 'Index.html'" value="Annuler" class="button droite" id="Cancel" type="reset"></input>
    </form>

    <script src="Assets/JS/Index.js"></script>
</body>

</html>




























