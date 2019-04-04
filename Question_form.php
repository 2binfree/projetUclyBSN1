<!DOCTYPE html>
<?php require_once 'functions.php';
setup();
$mode = "";
if (!empty($_POST) && $_POST['formType'] == "question") {
   $result = createQuestion($_POST);
   if (saveQuestion($result) == 0) {
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
       <a href="Index.php" class="Logo"><img src="Assets/Images/logo2.0.png" alt="Logo"></a>
       <div class="taskbar">
           <a href="#"><i class="fas fa-user fa-2x icon"></i></a>
           <a href="#"><i class="fas fa-bell fa-2x icon"></i></a>
           <a href="#"><i class="fas fa-home fa-2x icon salut"></i></a>
       </div>
   </header>
   <div class="titre">
       <p class="text">Saisir votre question</p>
   </div>
   <form class="" action="Question_form.php" method="post">
       <div class="categorie">
           <h2>Choisir mots-clés :</h2>
           <div class="mot_gauche">
           <input type="radio" id="Finance" name="category" value="finance">
           <label for="Finance">Finance</label>
           </div>
           <div class="mot_gauche">
           <input type="radio" id="Culture" name="category" value="culture">
           <label for="Culture">Culture</label>
           </div>
           <div class="mot_gauche">
           <input type="radio" id="Divertissements" name="category" value="divertissements">
           <label for="Divertissements">Divertissements</label>
           </div>
           <div class="mot_gauche">
           <input type="radio" id="Santé" name="category" value="sante">
           <label for="Santé">Santé</label>
           </div>
           <div class="mot_gauche">
           <input type="radio" id="Sport" name="category" value="sport">
           <label for="Sport">Sport</label>
           </div>
           <div class="mot_gauche">
           <input type="radio" id="Sciences" name="category" value="science">
           <label for="Sciences">Sciences</label>
           </div>
           <div class="mot_gauche">
           <input type="radio" id="Technologies" name="category" value="technologie">
           <label for="Technologies">Technologies</label>
           </div>
           <div class="mot_gauche">
           <input type="radio" id="Mode" name="category" value="mode">
           <label for="Mode">Mode</label>
           </div>
           <div class="mot_gauche">
           <input type="radio" id="Cuisine" name="category" value="cuisine">
           <label for="Cuisine">Cuisine</label>
           </div>
           <div class="mot_gauche">
           <input type="radio" id="Bricolage" name="category" value="bricolage">
           <label for="Bricolage">Bricolage</label>
           </div>
           <div  class="mot_gauche">
           <input type="radio" id="Voyage" name="category" value="voyage">
           <label for="Voyage">Voyage</label>
           </div>
       </div>
       <textarea placeholder="Ecrivez votre question ici" id="myid" class="block text_user" name="question" required minlength="50" maxlength="500" size="50" wrap="hard" rows="10"></textarea>
       <input type="hidden" name="formType" value="question">
       <input type="submit" value="Envoyer" class="button envoyer" name="submit">
       <input type="button" onclick="window.location.href = 'Index.php'" value="Annuler" class="button annuler" id="Cancel">
   </form>
</body>

</html>
