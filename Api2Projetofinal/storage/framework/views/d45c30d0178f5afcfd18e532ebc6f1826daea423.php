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

            <label>Tabela de imoveis</label>
            <table>
            <tr>
        <td>Nome</td>
        <td>Idade</td>
        <td>Profissão</td>
    </tr>
    <tr>
        <td>Ted</td>
        <td>22</td>
        <td>Estudante</td>
    </tr>
            </table>
            <div style="color:sandybrown;">
                <ul style="background-color:sandybrown;">
                    <li id="id">
                      
                        <?php echo $imoveis["id"]; ?>
                    </li>
                    <button>Editar</button>
                </ul>
            </div>
            <div>
                <ul>
                    <li>
                    <label>Titulo</label>
                        <?php echo $imoveis["titulo"]; ?>

                    </li>
                    
                </ul>
            </div>
            <div>
                <ul>
                    <li>
                    <label>descriçao</label>
                        <?php echo $imoveis["descricao"]; ?>
                    </li>
                   
                </ul>
                <ul>
                    <li>
                    <label>Conteudo</label>
                        <?php echo $imoveis["conteudo"]; ?>
                    </li>
                    
                </ul>
                <ul>
                <label>Preço</label>
                </ul>
                <ul>
                    <li>
                   
                        <?php echo $imoveis["price"]; ?>
                    </li>
                    
                </ul>
            </div>
    <?php }
    } ?>

    <div class=col-m3>

        <form method="POST" action="api/inserir" class='.control-label'>
            <div class="mb-3" style="margin-left: 500px;">
                <label name="descricaoprin" for="exampleFormControlTextarea1" class="form-label" id="descri" placeholder="Digite Aqui" style="font-size: 36px;;"> Inserir novo Imovel</label>
                <input type="text" name="titulo" placeholder="Título da sessão" style="width: 300px;" id="titulo" class='form-control'>
                <input type="text" name="descricao" placeholder="Descrição" id="descricao" style="width: 300px;" class='form-control'>
                <input type="text" name="conteudo" placeholder="conteudo" id="conteudo" style="width: 300px;" class='form-control'>
                <input type="text" name="price" placeholder="price" id="titulo" style="width: 300px;" class='form-control'>
                <input type="text" name="banheiro" placeholder="banheiro" id="titulo" style="width: 300px;" class='form-control'>
                <input type="text" name="quarto" placeholder="quarto" id="titulo" style="width: 300px;" class='form-control'>
                <input type="text" name="area_propriedade" placeholder="area_propriedade" style="width: 300px;" id="titulo" class='form-control'>
                <input type="text" name="total_area_propriedade" placeholder="total_area_propriedade" style="width: 300px;" id="titulo" class='form-control'>
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


?>*/ ?><?php /**PATH C:\Users\Dev1\Desktop\api2\resources\views//api.blade.php ENDPATH**/ ?>