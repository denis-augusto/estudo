<?php

    $db_file = 'database.db';
    $dsn = 'sqlite:' . $db_file;

    try{
        $pdo = new PDO($dsn);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    } catch (PDOException $e){
        die("Erro na conexão com o Banco de dados " . $e->getMessage());
    }

// ADD TODO

    $tarefa = $_POST['tarefa'];

    $stmt = $pdo->prepare("INSERT INTO todos (todo) VALUES ( :tarefa )");
    $stmt->bindParam(':tarefa', $tarefa);
    $stmt->execute();
    
?>