<?php 

//caminho raiz do tema
define('ROOT_PATH', get_stylesheet_directory_uri());

//suporte a thumbs
add_theme_support( 'post-thumbnails' ); 

//verificando se há thumb para o post
function verifyThumbnail(){
  if( has_post_thumbnail() )
    return the_post_thumbnail_url();
  else
    return ROOT_PATH . "/img/placeholder.jpeg";
}

//buscando todas as tags
function getAllTags(){
  $tags = get_tags();
  
  $html = "";
  foreach ($tags as $tag) {
    $link = get_tag_link( $tag->term_id );

    $html .= "<a href='$link' >" . $tag->name . "</a>";
  }

  return $html;
}