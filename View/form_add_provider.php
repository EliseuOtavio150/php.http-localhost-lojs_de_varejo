<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedor</title>
</head>
<body>
    <form action="../Controller/form_add_Provider.php" method="POST">
       <fieldset class="flex flex-col justify-center p-4 m-5 border blue-400">
        <legend>Dados do fornecedor</legend>
        <section style="margin: 10px 0 ">
            
                <label for="name">O Nome do Fornecedor</label>
                <input type="text" name="name" id="name" class="border border-green-400" required">
           
                    
            
                <label for="cnpj" class="cursor-pointer">cnpj</label>
                <input type="text" name="cnpj" id="cnpj" class="border border-green-400" required>
           
        

             
               <label for="publicPlace" class="cursor-pointer">Lugar público</label>
               <input type="text" name="publicPlacer"  id="poblicPlacer" class="border border-green-400" required>
            </article>

                <br></br>

        <section class= "mx-4 mt-4 columns-3"> 
            <article>  
                <label for="streetNumber">número da rua</label>
                <input type="number" name="streetNumber" id="streetNumber" class="border border-green-400" required min=1 max=1000>
            

                 <label for="city" class=" cursor-pointer">Cidade</label>
                <input type="text" name="city" id="city" class="border border-green-400" required min=1 max=1000>
           

                <label for="postalCode">Código postal</label>
                <input type="text" name="postalCode" id="postalCode" class="border border-green-400" required min=1 max=1000>

                <label for="numero">Numero</label>
                <input type="text" name="numero" id="numero" class="borderborder-green-400" required min=1 max=1000>
            </article>
        </section>

        <br></br>

        <article class="mx-4 mt-4 columns-1">
            <button type="submit" class="bg-gray-400 p-3 text-black rounded">Cadastrar</button>
        </article>
</body>
</html>