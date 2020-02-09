<!--EXIBIÇÃO DAS CATEGORIAS EM FORMATO DE SELECT-->

<!DOCTYPE html>
<html>
    <head>
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h2>Selecione uma categoria</h2>
    
            <label for="cars">Categoria:</label>
    
            <select >
                <?php foreach ($categories as $category): ?>
                    <option value="<?php $category->id ?>"> <?php print $category->name ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </body>
</html>