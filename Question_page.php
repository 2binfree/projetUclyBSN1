<?php require_once('functions.php') ;
setup();
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Universalitis</title>
    <link rel="stylesheet" href="Assets/css/Question_page.css">
    <link rel="stylesheet" href="Assets/css/header.css">
    <link rel="stylesheet" href="Assets/css/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
    <?php include 'header.php'; ?>
        <div class="quest">
            <p>QUESTION</p>
            <?php echo $_SESSION['questionList'][$id]["question"]?>
        </div>
            <br/>
            <?php
                $num=0;
                $listAnswers=$_SESSION['questionList'][$id]["answers"];
                foreach($listAnswers as $answers): ?>
    <div class="answ">
        <?php $num++;
                         echo "reponse: $num"; ?>
        <br />
        <?php  echo $answers["answer"]; ?>
    </div>
    <?php endforeach; ?>
    <?php
        if(empty ($_SESSION['questionList'][$id]["answers"])){?>
    <p class="erreur">il n'y a pas encore de reponses </p>
    <?php } ?>
    <br>
    <a href="Answer_form.php?qid=<?php echo $id; ?>" class="buttonanswer">Répondre</a>

    <?php include 'footer.php'; ?>

</body>
