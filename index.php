<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id="app">
        <h1>Todo List</h1>
        <ul>
            <li v-for="todo in todos" :key="todo.id">{{ todo.text }}</li>
        </ul>
        <input type="text" v-model="newTodo" placeholder="Add a new todo">
        <button @click="addTodo">Add</button>
    </div>

    <script src="app.js"></script>
</body>
</html>
