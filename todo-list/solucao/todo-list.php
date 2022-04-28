<html>
    <head>
        <title>ToDo List com PHP & MySQL</title>
    </head>
    <body>
        <?php
            // iniciar uma variavel string de erros vazia
            $errors = "";

            // criar uma variavel de conexao com o banco de dados
            require_once 'conexao.php';
            $connection = connectToDoListDatabase();

            // Validar se o botão de "Adicionar Tarefa" foi clicado
            if (isset($_POST['submit'])) {
                // Validar se o campo task foi preenchido.
                // Se sim, fazer insersão da tarefa no banco de dados.
                // Se não, alterar $erros para receber uma mensagem de erro.
                if (empty($_POST['task'])) {
                    $errors = "Você deve preencher uma descrição da tarefa";
                } else { 
                    $task = $_POST['task'];
                    $sqlInsertTask = "INSERT INTO tasks(task) VALUES('$task')";
                    $insertTaskStatement = $connection->prepare($sqlInsertTask);
                    $insertTaskStatement->execute([
                        ':task' => $task,
                    ]);
                    $taskId = $connection->lastInsertId();
                }
            }
        ?>
        
        <div>
            <h2>Aplicação ToDo List com PHP & MySQL</h2>
        </div>
        
        <form method="post">
            <?php if (isset($errors)) { echo "<p>".$errors."</p>"; } ?>
            <input type="text" name="task">
            <button type="submit" name="submit" id="add_btn">
                Adicionar Tarefa
            </button>
        </form>

        <?php
            // variavel SQL para ler todas as tarefas
            $sqlReadAllTasks = 'SELECT id, task FROM tasks';

            // variavel de statement para a conexao ler o banco de dados
            $readAllTasksStatement = $connection->query($sqlReadAllTasks);
            
            // executar a recuperação de todas as tarefas
            $tasks = $readAllTasksStatement->fetchAll(PDO::FETCH_ASSOC);
            if (sizeof($tasks) > 0) {
                // exibir as tarefas com uma estrutura de repetição
                foreach ($tasks as $task) {
                    echo " Tarefa ". $task['id'];
                    echo " - ". $task['task'];
                    echo "<br />";
                }
            } else {
                echo "Não há tarefas no banco de dados";
            }
        ?>
    </body>
</html>
