<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <?php foreach ($imovel as $imoveis) {
        // dd($imoveis);
        if ($imoveis > 0) {
    ?>
            <label> <b> Tabela de imoveis </b></label>

            <table style="background-color:aqua ;">

                <tr>
                    <th style="width: 100px;">Id</th>
                    <th style="width: 100px;">Titulo</th>
                    <th style="width: 100px;">Descrição</th>
                    <th style="width: 100px;">Conteudo</th>
                    <th style="width: 100px;">Preço</th>
                </tr>
                <tr>
                    <td><?php echo $imoveis["id"]; ?></td>
                    <td> <?php echo $imoveis["titulo"]; ?></td>
                    <td><?php echo $imoveis["descricao"]; ?></td>
                    <td><?php echo $imoveis["conteudo"]; ?></td>
                    <td><?php echo $imoveis["price"]; ?></td>
                </tr>

            </table>
            <button>Editar</button>
            <br>


    <?php }
    } ?>

    <div class=col-m3>

        <form method="POST" action="<?php echo e(route('api.inserir')); ?>" class='.control-label'>
            <?php echo csrf_field(); ?>
            <div class="mb-3" style="margin-left: 500px;">
                <label name="descricaoprin" for="exampleFormControlTextarea1" class="form-label" id="descri" placeholder="Digite Aqui" style="font-size: 36px;;"> Inserir novo Imovel</label>
                <input type="text" name="titulo" placeholder="Título da sessão" style="width: 300px;" id="titulo" class='form-control'>
                <input type="text" name="descricao" placeholder="Descrição" id="descricao" style="width: 300px;" class='form-control'>
                <input type="text" name="conteudo" placeholder="conteudo" id="conteudo" style="width: 300px;" class='form-control'>
                <input type="number" name="price" placeholder="price" id="titulo" style="width: 300px;" class='form-control'>
                <input type="number" name="banheiro" placeholder="banheiro" id="titulo" style="width: 300px;" class='form-control'>
                <input type="number" name="quarto" placeholder="quarto" id="titulo" style="width: 300px;" class='form-control'>
                <input type="number" name="area_propriedade" placeholder="area_propriedade" style="width: 300px;" id="titulo" class='form-control'>
                <input type="number" name="total_area_propriedade" placeholder="total_area_propriedade" style="width: 300px;" id="titulo" class='form-control'>
                <input type="text" name="slug" placeholder="slug" id="titulo" style="width: 300px;" class='form-control'>
                <button type="submit">Adicionar</button>

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


?>*/ ?><?php /**PATH C:\Users\Connecta\Desktop\apiEditavel\resources\views//api.blade.php ENDPATH**/ ?>