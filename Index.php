<!DOCTYPE html>
<?php
require_once 'functions.php';
setup();
require_once 'fakeData.php';
$listeQuestions = sortQuestion();  
$categories = $_SESSION["categories"];
$mode = "";
if (!empty($_POST['category'])) {
    if (isset($categories[md5($_POST['category'])])) {
        $mode = md5($_POST['category']);
    }
}
?>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Universalitis</title>
    <link rel="stylesheet" href="Assets/css/Index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <a href="Index.php" class="Logo"><img src="Assets/Images/logo2.0.png" alt="Logo"></a>
        <div class="taskbar">
            <i class="fas fa-search search fa-lg"><input type="text" id="myInput" onkeyup="Search()" placeholder="Recherchez" class="searchbar"></i>
            <a href="#"><i class="fas fa-user fa-2x icon"></i></a>
            <a href="#"><i class="fas fa-bell fa-2x icon"></i></a>
            <a href="#"><i class="fas fa-home fa-2x icon salut"></i></a>
        </div>
    </header>
    <div class="sidebar">
        <form action="Index.php" method="post">
            <input type="submit" name="category" value="finance"></br>
            <input type="submit" name="category" value="culture"></br>
            <input type="submit" name="category" value="divertissement"></br>
            <input type="submit" name="category" value="sante"></br>
            <input type="submit" name="category" value="sport"></br>
            <input type="submit" name="category" value="science"></br>
            <input type="submit" name="category" value="technologie"></br>
            <input type="submit" name="category" value="mode"></br>
            <input type="submit" name="category" value="cuisine"></br>
            <input type="submit" name="category" value="bricolage"></br>
            <input type="submit" name="category" value="voyage"></br>
        </form>
    </div>
    
    <div class="block">
    </div>
    <h1>Ajouter votre question
        <a class="button" href="Question_form.html" style="font-size: 18px">Question?</a>
    </h1>
    <ul class="block" id="list">
        <table>
            <?php
                Foreach($listeQuestions as $listeQuestion):
                if (empty($mode) || $listeQuestion["categoryKey"] === $mode) : ?>
                <tr>
                    <td>
                        <p><em><?php
                            echo ($categories[$listeQuestion["categoryKey"]]);
                            ?></em></p>
                            <li>
                        <?php if (strlen($listeQuestion["question"]) > 165) {
                                echo substr($listeQuestion["question"], 0, 165)."..."; 
                            } else {
                                echo ($listeQuestion["question"]);
                        }?>
                            </li>
                        </td>
                    </tr>
                <?php endif;
            endforeach; ?>
        </table>
    </ul>
    <script src="Assets/JS/Index.js"></script>

</body>
</html>
