<?php
    if(!isset($_SESSION['tarefas']) || !is_array($_SESSION['tarefas'])) {
        $_SESSION['tarefas'] = [];
    };

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(!empty($_POST['tarefaInput'])){            
            $_SESSION['tarefas'][] = $_POST['tarefaInput'];
        };
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;        
    };

    $nTarefas = count($_SESSION['tarefas']);
?>