<!DOCTYPE html>
<?php 
    require_once 'functions.php';
    setup();        
    require_once 'fakeData.php';      
    $listeQuestions = $_SESSION["questionList"];    
    $categories = $_SESSION["categories"];
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
        <a href="#"><img src="" alt="Finance"></a><br><br>
        <a href="#"><img src="" alt="Culture"></a><br><br>
        <a href="#"><img src="" alt="Divertissement"></a><br><br>
        <a href="#"><img src="" alt="Santé"></a><br><br>
        <a href="#"><img src="" alt="Sport"></a><br><br>
        <a href="#"><img src="" alt="Sciences"></a><br><br>
        <a href="#"><img src="" alt="Technologies"></a><br><br>
        <a href="#"><img src="" alt="Mode"></a><br><br>
        <a href="#"><img src="" alt="Cuisine"></a><br><br>
        <a href="#"><img src="" alt="Bricolage"></a><br><br>
        <a href="#"><img src="" alt="Voyage"></a><br><br>
    </div>
    <div class="block">
        </div>
<h1>Ajouter votre question
    <a class="button" href="Question_form.html" style="font-size: 18px">Question?</a>
</h1>

<div class="modal" id="modal">
    <div class="in_modal" id="answer_list">
    </div>
</div>
<ul class="block" id="list">
    <?php $keys = 0;?>
        <table>
            <?php Foreach($listeQuestions as $listeQuestion):
                  $keys = $keys + 1;        
            ?>
                <tr>
                    <td>
                        <p><em>n°<?php echo $keys ?></em></p>
                        <p><em><?php echo ($categories[$listeQuestion["categoryKey"]]);
                                ?></em></p> 
                         <li>
                        <?php  
                            echo ($listeQuestion["question"]);  
                        ?>
                        </li>     
                    </td>
                </tr>
            <?php endForeach ?>
        </table>
</ul>
<script src="Assets/JS/Index.js"></script>
</body>
</html>
