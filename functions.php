<?php

/**
* called at the top of the index page to setup various things
* @return void
*/
function setup() {
    session_start();
    if (!isset($_SESSION['questionList'])) {
        $_SESSION['questionList'] = [];
    }
    checkCategories();
}

/**
* regirster any updates to a given question in the questionList array
* @param array $question
* @return bool
*/
function saveQuestion(array $question) {
    $id = md5($question['time'] . $question['question']);
    if (checkCategory($question) === true) {
        $_SESSION['questionList'][$id] = $question;
        return true;
    }
    return false;
}

/**
* checks if the category given by a $_POST is in the categories array
* @param array $data
* @return bool
*/
function checkCategory($data):bool {
    $category = $data['categoryKey'];
    if (isset($_SESSION['categories'][$category])) {
        return true;
    }
    return false;
}

/**
* extract data from post and puts it into a new array that will be added to the question list
* @param array $data
* @return array
*/
function createQuestion(array $data):array {
    $time = time();
    $categoryKey = md5($data['category']);
    $question = $data['question'];
    $answers = [];
    $newValue = [
        'categoryKey' => $categoryKey,
        'time' => $time,
        'question' => $question,
        'answers' => $answers,
    ];
    return $newValue;
}

/**
* checks if the categories array exists and creates it if it doesn't
* @return array
*/
function checkCategories() {
    if (!isset($_SESSION['categories'])) {
        $_SESSION['categories'] = [
            md5("culture") => "culture",
            md5("finance") => "finance",
            md5("divertissement") => "divertissement",
            md5("sante") => "sante",
            md5("sport") => "sport",
            md5("science") => "science",
            md5("technologie") => "technologie",
            md5("mode") => "mode",
            md5("cuisine") => "cuisine",
            md5("bricolage") => "bricolage",
            md5("voyage") => "voyage",
        ];
    }
}

/**
* add an answer to the $answers array in the $question array
* @param array $question
* @param array $answer
* @return array
*/
function addAnswer(array $question, array $answer):array {
    $question['answers'][] = $answer;
    return $question;
}

/**
* creates an anwser that will be added to a question through an addAnswer() call
* @param array $data
* @return array
*/
function createAnswer($data):array
{
    $time = time();
    $answer = $data['answer'];
    $newValue = [
        'time' => $time,
        'answer' => $answer,
    ];
    return $newValue;
}
 ?>
