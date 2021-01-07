<?php
the_post();
$id = get_the_ID();
?>

<div class="planer-main-wrapper">
    <div class="planer-title-page">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="planer-single-img">
        <? if( has_post_thumbnail() ): 
            $attr = array(300, 160);
            echo get_the_post_thumbnail();
        endif; ?>
    </div>
    <div class="planer-description-promotion-site">
        <?php the_content(); ?>
    </div>
    <div class="planer-cost-services">
        <span> от <?php echo get_post_meta($id,'planer_cost_catalog', true ); ?> руб</span>
        <span class="planer-down-cost"> <?php echo get_post_meta($id,'planer_cost_down', true ); ?> руб</span>
    </div>
    <div class="planer-btn-services-call">
        <button class="btn-planer-buy">То, что мне нужно</button>
    </div>
</div>
