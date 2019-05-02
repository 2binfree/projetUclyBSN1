<!DOCTYPE html>
<?php require_once 'functions.php';
setup();
if (!empty($_GET)) {
    $id = $_GET['qid'];
}
if (!empty($_POST) && $_POST['formType'] == "Answer") {
    $id = $_POST['id'];
    $answer = createAnswer($_POST);
    if (strlen($answer['answer']) < 510) {
        $question = $_SESSION['questionList'][$id];
        $_SESSION['questionList'][$id] = addAnswer($question, $answer);
        header('Location: Index.php');
    }
}
?>

<html lang="fr" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Universalitis</title>
	<link rel="stylesheet" href="Assets/css/Answer_form.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
	<?php include 'header.php'; ?>

    <div class="titre">
		<p class="text">Saisir votre réponse</p>
	</div>

    <div class="echoQuestion">
        <p class="textQuestion"><?php echo $_SESSION['questionList'][$id]["question"] ?></p>
    </div>

    <div>
	<form class="" action="Answer_form.php" method="post">
        <textarea name="answer" class="reponse" rows="15" placeholder="Ecrivez votre réponse ici" required minlength="25" maxlength="500" size="50" wrap="hard"></textarea>
        <input type="hidden" name="id" value='<?php echo "$id"; ?>'>
		<input type="hidden" name="formType" value="Answer">
        <input value="Envoyer" class="button envoyer" id="Confirm" type="submit">
        <input type="button" onclick="window.location.href = 'Index.php'" value="Annuler" class="button annuler" id="Cancel" type="reset"/>
    </form>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>
