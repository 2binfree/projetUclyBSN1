<?php require_once 'functions.php';

setup();

$questions = [
    [
        'category' => "sport",
        'question' => "Qui a vu Lionel Messi faire danser Denayer et Marcelo ?",
    ],
    [
        'category' => "sante",
        'question' => "Pour ou contre les vaccins ?",
    ],
    [
        'category' => "cuisine",
        'question' => "Qui veut un grec ?",
    ], 
    [
        'category' => "cuisine",
        'question' => "La recette de la tarte aux myrtilles ?",
    ],
];

$categories = [
    [
        'category' => "sport",
        'question' => "Qui a vu Lionel Messi faire danser Denayer et Marcelo ?",
    ],
    [
        'category' => "sante",
        'question' => "Pour ou contre les vaccins ?",
    ],
    [
        'category' => "cuisine",
        'question' => "Qui veut un grec ?",
    ], 
    [
        'category' => "cuisine",
        'question' => "La recette de la tarte aux myrtilles ?",
    ],
];


foreach ($questions as $question){
    
    $newQuestion = createQuestion($question);
    $verif = checkCategory($newQuestion);
    saveQuestion($newQuestion);
    $key = $key + 1;
}

$listeQuestions=[
    $newQuestion[question],
];

$listeCategories=[
    $newQuestion[category],
];


//var_dump($newQuestion);
session_destroy();
?>