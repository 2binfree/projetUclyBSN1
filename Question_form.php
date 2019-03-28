<!DOCTYPE html>
<?php require_once 'functions.php';
setup();
$mode = "";
if (!empty($_POST) && $_POST['formType'] == "question") {
    $result = createQuestion($_POST);
    if (saveQuestion($result) != 0) {
        echo $_POST;
        header('Location: Index.php');
    }
}
 ?>

<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Universalitis</title>
    <link rel="stylesheet" href="Assets/css/Question_form.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
    <header>
        <a href="Index.php" class="Logo"> <img src="Assets/Images/logo2.0.png" alt="Logo"></a>
        <div class="taskbar">
            <a href="#"><i class="fas fa-user fa-2x icon"></i></a>
            <a href="#"><i class="fas fa-bell fa-2x icon"></i></a>
            <a href="#"><i class="fas fa-home fa-2x icon salut"></i></a>
        </div>
    </header>
    <div class="titre">
        <p class="text">Saisir votre question</p>
    </div>

    <div class="categorie">
                <h2 class="cat">Categories:</h2>
                <input type="radio" id="Finance" name="mots-clés" value="Finance">
                <label class="categ" for="Finance">Finance</label>
                <input type="radio" id="Culture" name="mots-clés" value="Culture">
                <label class="categ" for="Culture">Culture</label>
                <input type="radio" id="Divertissements" name="mots-clés" value="Divertissements">
                <label class="categ" for="Divertissements">Divertissements</label>
                <input type="radio" id="Santé" name="mots-clés" value="Santé">
                <label class="categ" for="Santé">Santé</label>
                <input type="radio" id="Sport" name="mots-clés" value="Sport">
                <label class="categ" for="Sport">Sport</label>
                <input type="radio" id="Sciences" name="mots-clés" value="Sciences">
                <label class="categ" for="Sciences">Sciences</label>
                <input type="radio" id="Technologies" name="mots-clés" value="Technologies">
                <label class="categ" for="Technologies">Technologies</label>
                <input type="radio" id="Mode" name="mots-clés" value="Mode">
                <label class="categ" for="Mode">Mode</label>
                <input type="radio" id="Cuisine" name="mots-clés" value="Cuisine">
                <label class="categ" for="Cuisine">Cuisine</label>
                <input type="radio" id="Bricolage" name="mots-clés" value="Bricolage">
                <label class="categ" for="Bricolage">Bricolage</label>
                <input type="radio" id="Voyage" name="mots-clés" value="Voyage">
                <label class="categ" for="Voyage">Voyage</label>
    </div>

    <form class="" action="Index.php" method="post">
        <textarea name="question" placeholder="Ecrivez votre question ici" class="text_user" rows="10"></textarea>
        <input value="Envoyer" class="button envoyer" id="Confirm" type="submit">
        <input type="button" onclick="window.location.href = 'Index.php'" value="Annuler" class="button annuler" id="Cancel" type="reset">
    </form>

    <script src="Assets/JS/Index.js"></script>
</body>

</html>
