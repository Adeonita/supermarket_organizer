<!--  EXIBIÇÃO DAS CATEGORIAS EM FORMATO DE TABELA
<html>
    <body>
    <h1>Listagem de Categorias</h1>
    <table>
        <?php //foreach ($categories as $category): ?>
        <tr>
            <td><? // print $category->id; ?> </td>
            <td><? // print $category->name; ?> </td>
            <td><? // print  $category->description; ?> </td>
        </tr>
        <?php //endforeach ?>
    </table>
    </body>
</html>
-->

<!--eXIBIÇÃO DAS CATEGORIAS EM FORMATO DE SELECT-->
<!DOCTYPE html>
<html>
    <head>
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h2>Selecione uma categoria</h2>
    
            <label for="cars">Categorias:</label>
    
            <select >
                <?php foreach ($categories as $category): ?>
                    <option value="<?php $category->id ?>"> <?php print $category->name ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </body>
</html>

