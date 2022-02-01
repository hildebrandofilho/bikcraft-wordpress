<?php
// Template Name: Contato
get_header();
?>
    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- Introdução -->
    <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>


    <!-- Contato -->
    <section class="container contato">
        <form id="form-contato" method="POST" action="<?php echo get_template_directory_uri(); ?>/enviar.php" class="contato-form grid-8 formphp">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required> 
            <label for="telefone">Telefone</label>
            <input type="tel" id="telefone" name="telefone" required>

            <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
            <input type="text" class="nao-aparece" name="leaveblank">
            <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
            <input type="text" class="nao-aparece" name="dontchange" value="http://">

            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" ></textarea>
            <button id="enviar" name="enviar" type="submit" class="btn-preto">Enviar</button>  
        </form>
        <div class="grid-8 contato-dados">
            <h3>Dados</h3>
            <span><?php the_field('telefone'); ?></span>
            <span><?php the_field('email'); ?></span>
            <span><?php the_field('endereco1'); ?></span>
            <span><?php the_field('endereco2'); ?></span>
            <h3>Redes Sociais</h3>
            <?php include(TEMPLATEPATH . "/inc/redes-sociais.php"); ?>
        </div>
    </section>

    <!-- Mapa -->
    <section class="container contato-mapa">
        <a href="<?php the_field('link_mapa'); ?>" target="_blank" class="grid-16">
            <img src="<?php the_field('imagem_mapa'); ?>" alt="<?php the_field('texto_mapa'); ?>">
        </a>
    </section>
<?php endwhile; else: endif; ?>

<!-- Footer -->
<?php get_footer(); ?>