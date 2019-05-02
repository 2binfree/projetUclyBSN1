<!DOCTYPE html>
<?php
require_once 'functions.php';
setup();
$listeQuestions = sortQuestion();
$categories = $_SESSION["categories"];
$mode = "";
$currentMode = $_GET['category'];
if (!empty($currentMode)) {
    if (isset($categories[$currentMode])) {
        $mode = $currentMode;
    }
};
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
        <form action="Index.php" method="get">
            <?php
            foreach ($categories as $index => $category) {
                ?> <a href="Index.php?category=<?php echo $index ?>" class="category_button"><?php echo $category ?> </a> <?php
                if (!empty($currentMode) && $currentMode == $index) {?>
                    <a href="Index.php"><i class="fas fa-times categ_cross"></i></a><?php
                }
            }?>
        </form>
    </div>

    <div class="add_question">
        <h1>Liste des questions posées :</h1>
            <a class="button" href="Question_form.php">Ajouter ma question</a>
    </div>
    <?php $keys = 0;
        if (empty($_SESSION['questionList'])) {?>
            <p class="noQuestion">Il n'y a aucune question pour l'instant, soyer le premier à en poser une !</p>
        <?php }
        foreach($listeQuestions as $index=>$listeQuestion):
            $keys++;
            $answerCount = count($listeQuestion['answers']);
            if (empty($mode) || $listeQuestion["categoryKey"] === $mode) : ?>
    <ul class="block" id="list">
        <a class="link" href="Question_page.php?id=<?php echo $index;?>">
        <table>
            <tr>
                <td>
                    <p><b>N°<?php echo $keys; ?></b>/ <?php echo ($categories[$listeQuestion["categoryKey"]]);?></p>

                        <li>
                            <?php if (strlen($listeQuestion["question"]) > 155) { 
                                     echo $index;?>"> <?php echo substr($listeQuestion["question"], 0, 155)."..."; ?>
                               <?php  } else { ?>
                             <?php echo ($listeQuestion["question"]);?> 
                            <?php }?>
                            </li>
                        <p><em><?php if ($answerCount <= 1) {
                                        echo "$answerCount réponse";    
                                } else {
                                        echo "$answerCount réponses";
                        }?></em></p>

                </td>
            </tr>
            </table></a>
    </ul>
    <?php endif;
        endforeach; ?>
    <div class="block floot">
        <a href="mentionsLegales.php">Mentions Légales</a>
    </div>
</body>

</html>
