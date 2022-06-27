<?php foreach ($imovel as $imoveis) {
    // dd($imoveis);
    if ($imoveis > 0) {
?>

        <div class=col-m3 style="background-color:peru;">

            <form method="POST" action="/api/editado/<?php echo $imoveis["id"]; ?>" class='.control-label'>
                <?php echo csrf_field(); ?>
                <div class="mb-3" style="margin-left: 500px;">
                    <label name="descricaoprin" for="exampleFormControlTextarea1" class="form-label" id="descri" placeholder="Digite Aqui" style="font-size: 36px;;"> Editar Imovel</label>
                    <br>
                    <input type="hidden" name="user_id" placeholder="id do usuario" style="width: 300px;" id="user_id" value="1" class='form-control'>
                    <br>
                    <label>Titulo</label>
                    <br>
                    <input type="text" name="titulo" placeholder="Título da sessão" style="width: 300px;" id="titulo" class='form-control' value="<?php echo $imoveis["titulo"]; ?>">
                   <br>
                    <label>Descricao</label>
                    <br>
                    <input type="text" name="descricao" placeholder="Descrição" id="descricao" style="width: 300px;" class='form-control' value="<?php echo $imoveis["descricao"]; ?>">
                    <br>
                    <label>Conteudo</label>
                    <br>
                    <input type="text" name="conteudo" placeholder="conteudo" id="conteudo" style="width: 300px;" class='form-control' value="<?php echo $imoveis["conteudo"]; ?>">
                    <br>
                    <label>Preço</label>
                    <br>
                    <input type="number" name="price" placeholder="price" id="titulo" style="width: 300px;" class='form-control' value="<?php echo $imoveis["price"]; ?>">
                   <br>
                    <label>Banheiro</label>
                    <br>
                    <input type="number" name="banheiro" placeholder="banheiro" id="titulo" style="width: 300px;" class='form-control' value="<?php echo $imoveis["banheiro"]; ?>">
                   <br>
                    <label>Quarto</label>
                    <br>
                    <input type="number" name="quarto" placeholder="quarto" id="titulo" style="width: 300px;" class='form-control' value="<?php echo $imoveis["quarto"]; ?>">
                    <br>
                    <label>Area da Propriedade</label>
                    <br>
                    <input type="number" name="area_propriedade" placeholder="area_propriedade" style="width: 300px;" id="titulo" class='form-control' value="<?php echo $imoveis["area_propriedade"]; ?>">
                    <br>
                    <label>Total da Area da Propriedade</label>
                    <br>
                    <input type="number" name="total_area_propriedade" placeholder="total_area_propriedade" style="width: 300px;" id="titulo" class='form-control' value="<?php echo $imoveis["total_area_propriedade"]; ?>">
                   <br>
                    <label>Slug</label>
                    <br>
                    <input type="text" name="slug" placeholder="slug" id="titulo" style="width: 300px;" class='form-control' value="<?php echo $imoveis["slug"]; ?>">
                    <button type="submit" class="btn" style="border-radius:20px; background-color:sienna; color:aliceblue;">Editar</button>

                </div>
        </div>

<?php }
} ?><?php /**PATH C:\Users\Dev1\Desktop\apiEditavel\resources\views//editar.blade.php ENDPATH**/ ?>