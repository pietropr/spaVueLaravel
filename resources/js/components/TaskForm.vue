<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Task Form</div>
                    
                    <div class="card-body">
                        <form action="/api/task" method="post" @submit="addTask()">
                            <div class="form-group">
                                <input placeholder="Titulo" type="text" name="title" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Add Task" class="btn btn-info">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        
        methods: {
            addTask() {
                alert('Adicionando Task');
            }
        }
    }
</script>
