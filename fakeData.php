<?php require_once 'functions.php';

setup();

$questions = [
    [
        'category' => "sport",
        'question' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec egestas nunc, ultrices scelerisque dolor. In risus turpis, faucibus ut purus a, ullamcorper viverra mauris. Cras ultricies mauris id diam dapibus, eget iaculis nibh lobortis. Nam auctor id metus molestie volutpat. Vivamus commodo, ex id fringilla pulvinar, eros est tempus arcu, facilisis tempus velit nulla eu elit. Pellentesque id condimentum libero, id tincidunt nullam ?",
    ],
    [
        'category' => "sante",
        'question' => "Pour ou contre les vaccins ?",
    ],
    [
        'category' => "cuisine",
        'question' => "Plus il y a de fromage, plus il y a de trous. Plus il y a de trous, moins il y a de fromage. Alors, plus il y a de fromage, moins il y a de fromage?",
    ], 
    [
        'category'=>"culture",
        'question'=>"Quand l’homme à découvert que la vache donnait du lait, que cherchait-il exactement à faire à ce moment là ?",
    ],
];

foreach ($questions as $question){
    
    $newQuestion = createQuestion($question);
    $verif = checkCategory($newQuestion);
    saveQuestion($newQuestion);
}

$listeQuestions=[
    $newQuestion[question],
];

$listeCategories=[
    $newQuestion[category],
];

session_destroy();

?>