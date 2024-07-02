<?php
header('Content-Type: application/json');

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'read':
        readTodos();
        break;
    case 'create':
        createTodo();
        break;
    default:
        echo json_encode(['error' => 'Invalid action']);
        break;
}

function readTodos() {
    $todos = json_decode(file_get_contents('todos.json'), true);
    echo json_encode($todos);
}

function createTodo() {
    $input = json_decode(file_get_contents('php://input'), true);
    $todos = json_decode(file_get_contents('todos.json'), true);

    $newTodo = [
        'id' => count($todos) + 1,
        'text' => $input['text']
    ];

    $todos[] = $newTodo;
    file_put_contents('todos.json', json_encode($todos));

    echo json_encode($newTodo);
}
?>
