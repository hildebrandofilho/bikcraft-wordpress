<?php
// Template Name: Single Produtos
get_header();
?>
    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- Produtos -->
    <section class="container produto-item">
        <div class="grid-11">
            <img src="<?php the_field('foto_produto1'); ?>" alt="Bikcraft <?php the_title(); ?>">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="grid-5 produto-icone">
            <img src="<?php the_field('icone_produto'); ?>" alt="Bikcraft <?php the_title(); ?>">
        </div>
        <div class="grid-8">
            <img src="<?php the_field('foto_produto2'); ?>" alt="Bikcraft <?php the_title(); ?>">
        </div>
        <div class="grid-8 produto-info">
            <?php the_content(); ?>
        </div>
    </section>

    <!-- Orçamento -->
    <?php include(TEMPLATEPATH . "/inc/produtos-orcamento.php"); ?>
<?php endwhile; else: endif; ?>

<!-- Footer -->
<?php get_footer(); ?>