<?php $portfolio = get_page_by_title('portfolio'); ?>

<div class="container" data-slide="portfolio">
  <?php if(have_rows('item_portfolio', $portfolio)): while(have_rows('item_portfolio', $portfolio)) : the_row(); ?>
  <ul class="portfolio_lista">
  	<li>
  		<div class="grid-8"><img src="<?php the_sub_field('portfolio_imagem1', $portfolio); ?>" alt="<?php the_sub_field('portfolio_imagem_descricao1', $portfolio); ?>"></div>
  		<div class="grid-8"><img src="<?php the_sub_field('portfolio_imagem2', $portfolio); ?>" alt="<?php the_sub_field('portfolio_imagem_descricao2', $portfolio); ?>"></div>
  		<div class="grid-16"><img src="<?php the_sub_field('portfolio_imagem3', $portfolio); ?>" alt="<?php the_sub_field('portfolio_imagem_descricao3', $portfolio); ?>"></div>
  	</li>
  </ul>
  <?php endwhile; else : endif; ?>
</div>

