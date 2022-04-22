<?php
    echo "Olá, Mundo."."<br/>"."Eu sou um programa PHP!"."<br/>";
?>

<?php 
    echo "Informação do Sistema Operacional: ".php_uname()."<br/>";
?>

<?php
    echo "Nome da Máquina: ".php_uname("n")."<br/>";
?>

<?php
    echo "Sistema Operacional: ".php_uname("s")."<br/>";
?>

<?php
    echo "Versão: ".php_uname("v")."<br/>";
?>

<?php
    echo "Usuário do Sistema Operacional: ".get_current_user()."<br/>"
?>

<!DOCTYPE html>
    <html>
    <head>
        <title>Detalhes do Servidor: Uma aplicação PHP</title>
    </head>

    <body>
        <h2>Este programa PHP está rodando em:</h2>
        <?php echo "<b>Nome da Máquina: </b>".php_uname("n")."<br/>"; ?>
        <?php echo "<b>Sistema Operational: </b>".php_uname("s")."<br/>"; ?>
        <?php echo "<b>Versão: </b>".php_uname("v")."<br/>"; ?>
        <?php echo "<b>Usuário: </b>".get_current_user()."<br/>"; ?>
    </body>
</html>
