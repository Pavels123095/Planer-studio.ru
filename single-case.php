<?php

if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}

the_post();
$id = get_the_ID();

$taxonomy = get_the_terms($id, 'category-cases');
$slug_taxonomy = $taxonomy[1]->slug;

    if ($slug_taxonomy == 'case-developer'):
        include('single-case-develop.php');
    elseif ($slug_taxonomy == 'case-designer'):
        include('single-case-design.php');
    endif;
?>