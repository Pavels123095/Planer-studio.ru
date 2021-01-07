<article class="planer-catalog-item-post planer-catalog-post-<?php the_ID(); ?> planer-layout-column">
    <a href="<?php the_permalink();?>"  class="planer-cat-post-content">
        <?php the_post_thumbnail(); ?>
        <div class="planer-cat-description-wrapper">
            <h3 class="planer-title-post"><?php the_title(); ?></h3>
            <span class="planer-catalog-excerpt">
                <?php the_excerpt(); ?>
            </span>
        </div>
    </a>
</article>