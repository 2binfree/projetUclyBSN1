<!DOCTYPE html>
<?php require_once 'functions.php';
setup();
$mode = "";
$isValid = true;
if (!empty($_POST) && $_POST['formType'] == "question") {
   $result = createQuestion($_POST);
   if (saveQuestion($result) == 0) {
       $id = md5($result['time'] . $result['question']);
       $destination = 'Location: Question_page.php?id='.$id;
       header($destination);
   } else {
       $isValid = false;
   }
}
?>

<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Universalitis</title>
    <link rel="stylesheet" href="Assets/css/Question_form.css">
    <link rel="stylesheet" href="Assets/css/header.css">
    <link rel="stylesheet" href="Assets/css/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="titre">
        <p class="text">Saisir votre question</p>
    </div>
    <?php if ($isValid == false) {
        ?> <p class="noQuestion">Il faut attribuer une catégorie a la question !</p>
    <?php } ?>
    <form class="" action="Question_form.php" method="post">
        <div class="categorie">
            <h2>Choisir mots-clés :</h2>
            <?php foreach ($_SESSION['categories'] as $index => $category) { ?>
                <div class="mot_gauche">
                    <input type="radio" id="<?php echo $index; ?>" name="category" value="<?php echo $category; ?>">
                    <label for="<?php echo $category ?>"><?php echo $category ?></label>
                </div>
            <?php }?>
        </div>
        <textarea placeholder="Ecrivez votre question ici" id="myid" class="text_user" name="question" required minlength="25" maxlength="500" size="50" wrap="hard" rows="10"><?php if ($isValid == false) {
            echo $result['question'];
        } ?></textarea>
        <input type="hidden" name="formType" value="question">
        <input type="submit" value="Envoyer" class="button envoyer" name="submit">
        <input type="button" onclick="window.location.href = 'Index.php'" value="Annuler" class="button annuler" id="Cancel">
    </form>
    <?php include 'footer.php'; ?>
</body>

</html>
