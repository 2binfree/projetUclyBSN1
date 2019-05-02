<?php require_once('functions.php') ;
setup();
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Universalitis</title>
    <link rel="stylesheet" href="Assets/css/Question_form.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
    <?php include 'header.php'; ?>

        <div class="quest">
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
                        <br/>
                      <?php  echo $answers["answer"]; ?>
                    </div>
               <?php endforeach; ?>

        <a href="Answer_form.php?qid=<?php echo $id; ?>" class="answer">Répondre</a>

    <?php include 'footer.php'; ?>

</body>
