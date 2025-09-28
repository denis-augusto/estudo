<?php

    require_once 'connection.php';

    $stmt = $pdo->query("SELECT * FROM todos");
    $todos = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist with Database</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <main class="grid grid-cols-1 gap-2 max-w-[650px] mx-auto mt-12">
        <h1 class="text-2xl text-center">Todolist com Banco de Dados (sqlite)</h1>
        <div class="border-2 rounded-md p-4">
            <form action="" method="post" class="w-full flex gap-2">
                <input type="text" name="tarefa" id="tarefa" class="border p-1 flex-auto rounded-md">
                <input type="submit" value="Adicionar tarefa" class="border px-2 py-1 hover:bg-slate-400 hover:cursor-pointer rounded-md">
            </form>
        </div>
        <div class="border-2 rounded-md px-4 py-4">
            <ul class="flex flex-col gap-2">
            <?php
                foreach( $todos as $todo ){
                    echo "<li class='border-1 rounded-md px-2 py-1'> $todo[todo] </li>";
                }
            ?>
            </ul>
        </div>
    </main>
</body>
</html>