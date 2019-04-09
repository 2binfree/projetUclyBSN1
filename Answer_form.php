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
	<header>
		<a href="Index.php" class="Logo"><img src="Assets/Images/logo2.0.png" alt="Logo"></a>
		<div class="taskbar">
			<a href="#"><i class="fas fa-user fa-2x icon"></i></a>
			<a href="#"><i class="fas fa-bell fa-2x icon"></i></a>
			<a href="#"><i class="fas fa-home fa-2x icon salut"></i></a>
		</div>
	</header>
    
    <div class="titre">
		<p class="text">Saisir votre réponse</p>
	</div>
    
    <div class="echoQuestion">
        <p class="textQuestion"><?php echo $_SESSION['questionList'][$id]["question"] ?></p>
    </div>
    
	<form class="" action="Answer_form.php" method="post">
        <textarea name="answer" class="reponse" rows="15" placeholder="Ecrivez votre réponse ici" required minlength="25" maxlength="500" size="50" wrap="hard"></textarea>
        <input type="hidden" name="id" value='<?php echo "$id"; ?>'>
        <input type="hidden" name="formType" value="Answer">
        <input value="Envoyer" class="button envoyer" id="Confirm" type="submit">
        <input type="button" onclick="window.location.href = 'Index.php'" value="Annuler" class="button annuler" id="Cancel" type="reset" />
    </form>
    <script src="Assets/JS/Index.js"></script>
    <div class="block floot">
        <a href="mentionsLegales.php">Mentions Légales</a>
    </div>
</body>

</html>
