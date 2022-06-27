<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div style="background-color:bisque;">
        <?php foreach ($imovel as $imoveis) {
            // dd($imoveis);
            if ($imoveis > 0) {
        ?>
                <label style="margin-left:400px;"> <b> Tabela de imoveis </b></label>

                <table style="background-color:chocolate; margin-left:400px;">

                    <tr>
                        <th style="width: 100px;">Id</th>
                        <th style="width: 100px;">Titulo</th>
                        <th style="width: 100px;">Descrição</th>
                        <th style="width: 100px;">Conteudo</th>
                        <th style="width: 100px;">Preço</th>
                        <th style="width: 100px;">Slug</th>
                    </tr>
                    <tr>
                        <td><?php echo $imoveis["id"]; ?></td>
                        <td> <?php echo $imoveis["titulo"]; ?></td>
                        <td><?php echo $imoveis["descricao"]; ?></td>
                        <td><?php echo $imoveis["conteudo"]; ?></td>
                        <td><?php echo $imoveis["price"]; ?></td>
                        <td><?php echo $imoveis["slug"]; ?></td>
                    </tr>

                </table>
                <a href="api/editar/<?php echo $imoveis["id"]; ?>" class="btn" style="background-color:saddlebrown; margin-left:400px; border-radius:20px; color:aliceblue;">editar</a>
                <a href="api/excluir/<?php echo $imoveis["id"]; ?>" class="btn" style="background-color:brown; margin-left:400px; border-radius:20px; color:aliceblue;">Excluir</a>
                <br>


        <?php }
        } ?>
    </div>
    <div class=col-m3 style="background-color:coral;">

        <form method="POST" action="<?php echo e(route('api.inserir')); ?>" class='.control-label'>
            <?php echo csrf_field(); ?>
            <div class="mb-3" style="margin-left: 500px;">
                <label name="descricaoprin" for="exampleFormControlTextarea1" class="form-label" id="descri" placeholder="Digite Aqui" style="font-size: 36px;;"> Inserir novo Imovel</label>
                <input type="hidden" name="user_id" placeholder="id do usuario" style="width: 300px;" id="user_id" value="1" class='form-control'>
                <input type="text" name="titulo" placeholder="Título da sessão" style="width: 300px;" id="titulo" class='form-control'>
                <input type="text" name="descricao" placeholder="Descrição" id="descricao" style="width: 300px;" class='form-control'>
                <input type="text" name="conteudo" placeholder="conteudo" id="conteudo" style="width: 300px;" class='form-control'>
                <input type="number" name="price" placeholder="price" id="titulo" style="width: 300px;" class='form-control'>
                <input type="number" name="banheiro" placeholder="banheiro" id="titulo" style="width: 300px;" class='form-control'>
                <input type="number" name="quarto" placeholder="quarto" id="titulo" style="width: 300px;" class='form-control'>
                <input type="number" name="area_propriedade" placeholder="area_propriedade" style="width: 300px;" id="titulo" class='form-control'>
                <input type="number" name="total_area_propriedade" placeholder="total_area_propriedade" style="width: 300px;" id="titulo" class='form-control'>
                <input type="text" name="slug" placeholder="slug" id="titulo" style="width: 300px;" class='form-control'>
                <button type="submit" class="btn" style="border-radius:20px; background-color:sienna; color:aliceblue;">Adicionar</button>

            </div>
    </div>

</body>

</html>
<?php

 
/*foreach ($imovel as $imoveis) {
    
    ($imoveis['id']);
    
    echo($imoveis['titulo']);
    echo($imoveis['user_id']);
    echo($imoveis['descricao']);
    echo($imoveis['conteudo']);
    ($imoveis['price']);
    ($imoveis['banheiro']);
    ($imoveis['quarto']);
    ($imoveis['area_propriedade']);
    ($imoveis['total_area_propriedade']);
    ($imoveis['slug']);
    ($imoveis['created_at']);
    ($imoveis['updated_at']);
}


?>*/ ?><?php /**PATH C:\Users\Dev1\Desktop\apiEditavel\resources\views//api.blade.php ENDPATH**/ ?>