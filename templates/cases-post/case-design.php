<article class="planer-case-designer planer-designer-post-<?php the_ID(); ?> planer-layout-column">
<?php $post_id = get_the_ID(); ?>
    <div class="planer-case-design-content">
        <div class="planer-case-design-thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="planer-case-design-link">
            <a class="case-link-this-work" href="<?php the_permalink(); ?>">Посмотреть</a>
        </div>
    </div>
</article>