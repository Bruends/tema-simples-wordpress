<form action="<?php echo home_url('/'); ?>" method="get" class="search-form" role="search">
  <input type="search" placeholder="Pesquisar..." name="s" id="search" value="<?php the_search_query(); ?>">
  <button type="submit">
    <i class="fa fa-search"></i>                
  </button>
</form>