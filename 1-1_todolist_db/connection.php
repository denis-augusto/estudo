<?php

    $db_file = 'database.db';
    $dsn = 'sqlite:' . $db_file;

    $new_db = !file_exists($db_file);

    try{
        $pdo = new PDO($dsn);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        if ($new_db){
            $pdo->exec("CREATE TABLE IF NOT EXISTS todos (id INTEGER PRIMARY KEY, todo TEXT );");
        }

    } catch (PDOException $e){
        die("Erro na conexão com o Banco de dados " . $e->getMessage());
    }

// ADD TODO

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tarefa'])) {
        $tarefa = $_POST['tarefa'];

        try{
            $stmt = $pdo->prepare("INSERT INTO todos (todo) VALUES (:tarefa)");
            $stmt->bindParam(':tarefa', $tarefa);
            $stmt->execute();

            header('Location: ' . $_SERVER['PHP_SELF']);
            exit();

        } catch (PDOException $e){
            die("Erro ao adicionar a tarefa: " . $e->getMessage());
        }
    };
    
?>