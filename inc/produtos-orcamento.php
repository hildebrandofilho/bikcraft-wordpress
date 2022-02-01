<section class="orcamento">
    <div class="container">
        <h2 class="subtitulo-preto">Orçamento</h2>
        <form id="form-orcamento" method="POST" action="<?php echo get_template_directory_uri(); ?>/enviar.php" class="form grid-8 formphp">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required> 
            <label for="telefone">Telefone</label>
            <input type="tel" id="telefone" name="email" required>

            <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
            <input type="text" class="nao-aparece" name="leaveblank">
            <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
            <input type="text" class="nao-aparece" name="dontchange" value="http://">

            <label for="espec">Especificações</label>
            <textarea id="espec" name="espec"></textarea>
            <button id="enviar" name="enviar" type="submit" class="btn">Enviar</button>  
        </form>

        <?php $contato = get_page_by_title('contato'); ?>
        <?php $produtos = get_page_by_title('produtos'); ?>

        <div class="grid-8 orcamento-dados">
            <h3>Dados</h3>
            <span><?php the_field('telefone', $contato); ?></span>
            <span><?php the_field('email', $contato); ?></span>
            <h3>Monte a sua Bikcraft</h3>
            <p>Escolha as especificações:</p>
            <?php the_field('itens_orcamento', $produtos); ?>
        </div>
    </div>
</section>