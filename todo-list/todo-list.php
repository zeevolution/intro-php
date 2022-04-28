<html>
    <head>
        <title>ToDo List com PHP & MySQL</title>
    </head>
    <body>
        <?php
            // iniciar uma variavel string de erros vazia

            // criar uma variavel de conexao com o banco de dados
            require_once 'conexao.php';

            // Validar se o botão de "Adicionar Tarefa" foi clicado
            if (isset($_POST['submit'])) {
                // Validar se o campo task foi preenchido.
                // Se sim, fazer insersão da tarefa no banco de dados.
                // Se não, alterar $erros para receber uma mensagem de erro.
                if (empty($_POST['task'])) {
                    
                } else { 
                    $task = $_POST['task'];

                    //Complete insersão aqui

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

            // variavel de statement para a conexao ler o banco de dados
            
            // executar a recuperação de todas as tarefas
            $tasks = "";

            // Se houver dados de taredas, exibi-los
            if (sizeof($tasks) > 0) {
                // exibir as tarefas com uma estrutura de repetição

            } else {
                echo "Não há tarefas no banco de dados";
            }
        ?>
    </body>
</html>
