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
    'category'=>"sante",
    'question'=>"Pour ou contre les vaccins ?",
];

$newQuestion2 = createQuestion($questions2);
saveQuestion($newQuestion2);
$verif2 = checkCategory($newQuestion2);

$questions3 = [
    'category'=>"cuisine",
    'question'=>"Qui veut un grec ?",
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