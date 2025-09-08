<?php 
    session_start();
    require 'functions.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="text-center">

    <div class="flex flex-col">

        <h1 class="text-4xl font-bold m-auto my-6"> Todolist </h1>

        <div class="border rounded mx-auto px-2 w-3/4 max-w-[700px] pb-4">
            <form action="" method="post" class="">
                <br>
                <input type="text" name="tarefaInput" id="tarefaInput" class="border text-black py-1 px-1 w-full rounded" placeholder="Insira uma tarefa">
                <br>
                <button type="submit" class="mt-2 border py-1 px-2 hover:cursor-pointer hover:bg-neutral-300 w-full rounded">Adicionar tarefa</button>
            </form>

            <div class="mt-4">
                <h2 class="text-2xl mb-4 font-bold"> Lista de tarefas </h2>
                <ul class="text-left px-2">
                    <?php 
                        foreach ($_SESSION['tarefas'] as $tarefa){
                            echo '<li> <input type="checkbox" name="" class="peer" /> <span class="peer-checked:line-through">' . htmlspecialchars($tarefa) . '</span></li>'; 
                        }
                    ?> 
                </ul>        
            </div>
        
            <span class="">Número de tarefas: <?= $nTarefas ?></span>

        </div>
    </div>
    
</body>
</html>