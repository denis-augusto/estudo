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
            <form action="" method="post">
                <input type="text" name="tarefa" id="tarefa" class="border p-1 w-3/4">
                <input type="submit" value="Adicionar tarefa" class="border px-2 py-1 ">
            </form>
        </div>
        <div class="border-2 rounded-md p-4">
            listagem das tarefas
        </div>
    </main>
</body>
</html>