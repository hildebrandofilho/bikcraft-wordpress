<?php
// Template Name: Portfólio
get_header();
?>
    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- Introdução -->
    <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

    <!-- Quote -->
    <section class="container fadeInDown" data-slide="quote" data-anime="1200">
            <?php if(have_rows('quote_portfolio')): while(have_rows('quote_portfolio')) : the_row(); ?>
                <blockquote class="quote-clientes">
                    <?php the_sub_field('quote'); ?>
                    <cite><?php the_sub_field('nome_quote'); ?></cite>
                </blockquote>
            <?php endwhile; else : endif; ?>
    </section>

    <!-- Portfólio -->
    <section class="portfolio">
            <?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php"); ?>
    </section>
    

<?php endwhile; else: endif; ?>

<!-- Footer -->
<?php get_footer(); ?>