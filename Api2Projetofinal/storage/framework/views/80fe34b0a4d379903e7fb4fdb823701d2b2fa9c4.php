
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
            <li id="id">
                <?php echo $imoveis["id"]; ?>
            </li>
        </ul>
        <ul>
            <li>
            <?php echo $imoveis["titulo"]; ?>

            </li>
        </ul>
<ul>
    <li>
    <a href="#"><?php echo $imoveis["descricao"]; ?></a>
    </li>
</ul>
       <?php }
        } ?>

<div class= col-m3>
         
         <form method="POST" action="api/editar/1" class='.control-label'>
           <div class="mb-3">
             <label name="descricaoprin" for="exampleFormControlTextarea1" class="form-label" id="descri" placeholder="Digite Aqui"> Editar Sessão</label>
             <input type="text" name="titulo" placeholder="Título da sessão" id="titulo" class='form-control'>
             <textarea class="form-control" name="descricao" id="descricao" placeholder="Digite Aqui"> </textarea>
             <input type="hidden" name='id'>  
        <button type="submit">Editar</button>
         
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


?>*/ ?><?php /**PATH C:\Users\Connecta\Desktop\api2\resources\views//api.blade.php ENDPATH**/ ?>