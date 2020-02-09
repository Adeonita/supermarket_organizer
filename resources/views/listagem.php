<html>
    <body>
    <h1>Listagem de Categorias</h1>
    <table>
        <?php foreach ($categories as $category): ?>
        <tr>
            <td><?print $category->name; ?> </td>
            <td><?print  $category->description; ?> </td>
        </tr>
        <?php endforeach ?>
    </table>
    </body>
</html>