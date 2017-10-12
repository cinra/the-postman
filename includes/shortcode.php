<?php


function the_postman_shortcode($atts, $content=null, $tag)
{
  
  return get_postman($tag);
  
}

global $postman;

$fields = $postman->get_vals();

foreach ($fields as $key => $field)
{
  add_shortcode($key, 'the_postman_shortcode');
}
