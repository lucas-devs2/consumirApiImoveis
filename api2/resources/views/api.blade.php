
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach ($imovel as $imoveis) {
        // dd($imoveis);
         if ($imoveis > 0) {
        ?>
        <label>Tabela de imoveis</label>
        <ul>
            <li>
            <a href="#"><?php echo $imoveis["id"]; ?></a>

            </li>
        </ul>
        <ul>
            <li>
            <a href="#"><?php echo $imoveis["titulo"]; ?></a>

            </li>
        </ul>
<ul>
    <li>
    <a href="#"><?php echo $imoveis["descricao"]; ?></a>
    </li>
</ul>
       <?php }
        } ?>
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


?>*/