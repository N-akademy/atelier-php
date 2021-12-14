<?php
require_once 'config.php';
require __DIR__ . '/src/models/recipe-model.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $addRecipe = trim($title) . trim($description);

    if (empty($errors)) {
        saveRecipe($addRecipe);
        header('Location: /');
    }
}

require __DIR__ . '/src/views/form.php';