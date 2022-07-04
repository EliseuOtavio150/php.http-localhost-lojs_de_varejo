<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de varejo - Novo produto</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="../controller/form_add_Product.php" method="POST">
        <section class="mx-4 mt-4 columns-3">
            <article>
                <label for="barCode">Código de barra</label>
                <input type="number" name="barCode" id="barCode" class="border border-green-400" required>
            </article>

            <article>
                <label for="name">Nome do produto</label>
                <input type="text" id="name" name="name" class="border border-green-400" required>
            </article>

            <article>
                <label for="provider" class= "cursor-pointer">Fornecedor:</label>
                <select class="border border-green-400" name="provider" id="provider">
                    <option value="1">Fornecedor 1</option>
                    <option value="2">Fornecedor 2</option>
                    <option value="3">Fornecedor 3</option>
                </select>
            </article>
        </section>
        </section>
        <section class="mx-4 mt-4 columns-2">
            <article>
                <label for="quantity" class="cursor-pointer">Quantidade em estoque</label>
                <input type="number" id="quantity" name="quantity" class="border border-green-400" required min=1 max=1000>
            </article>
            <article>
                <label for="cost" class="cursor-pointer">Custo de aquisução: </label>
                <input type="number" name="cost" id="cost" class="border border-green-400" requisrd min=1 max=1000>
            </article>
           
        </section>
        <article class="flex justify-center mx-4 mt-4 columns-3">
            <button type="submit" class="bg-green-400 p-3 text-black rounded">Cadastrar</button>
        </article>

</body>

</html>