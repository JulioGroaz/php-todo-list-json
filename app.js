new Vue({
    el: '#app',
    data: {
        todos: [],
        newTodo: ''
    },
    methods: {
        fetchTodos() {
            axios.get('api.php?action=read')
                .then(response => {
                    this.todos = response.data;
                })

        },
        addTodo() {
            if (this.newTodo.trim() === '') return;

            const newTask = { text: this.newTodo };

            axios.post('api.php?action=create', newTask)
                .then(response => {
                    this.todos.push(response.data);
                    this.newTodo = '';
                })

        }
    },
    mounted() {
        this.fetchTodos();
    }
});
