<?php
// Template Name: Sobre
get_header();
?>
    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- Introdução -->
    <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

    <!-- História -->
    <section class="historia container">
        <div class="grid-10">
            <h2 class="subtitulo-interno">História, Missão e Visão</h2>
            <p><?php the_field('missao'); ?></p>
        </div>

        <div class="grid-6">
            <h2 class="subtitulo-interno">Valores</h2>
            <?php the_field('valores'); ?>
        </div>
        
        <div class="grid-16 foto-equipe">
            <img src="<?php the_field('imagem_equipe'); ?>" alt="Equipe Bikcraft">
        </div>
    </section>

    <!-- Qualidade -->
    <?php include(TEMPLATEPATH . "/inc/qualidade.php"); ?>

<?php endwhile; else: endif; ?>

<!-- Footer -->
<?php get_footer(); ?>