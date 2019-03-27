<?php require_once 'functions.php';

setup();

$question = [
    'category'=>"sport",
    'question'=>"Qui a vu Lionel Messi faire danser Denayer et Marcelo ?",
];

$newQuestion = createQuestion($question);
saveQuestion($newQuestion);
$verif = checkCategory($newQuestion);

$questions2 = [
    'category'=>"cuisine",
    'question'=>"Plus il y a de fromage, plus il y a de trous. Plus il y a de trous, moins il y a de fromage. Alors, plus il y a de fromage, moins il y a de fromage?",
];

$newQuestion2 = createQuestion($questions2);
saveQuestion($newQuestion2);
$verif2 = checkCategory($newQuestion2);

$questions3 = [
    'category'=>"culture",
    'question'=>"Quand l’homme à découvert que la vache donnait du lait, que cherchait-il exactement à faire à ce moment là ?",
];

$newQuestion3 = createQuestion($questions3);
saveQuestion($newQuestion3);
$verif3 = checkCategory($newQuestion3);

//var_dump($newQuestion);

$listeQuestions=[
    $newQuestion[question],
    $newQuestion2[question],
    $newQuestion3[question],
]

?>