<article class="planer-case-developer planer-case-post-id-<?php the_ID(); ?> planer-layout-column">
    <?php $id = get_the_ID(); ?>
    <div class="planer-case-dev-content">
        <div class="planer-case-dev-title">
            <h3><?php the_title(); ?></h3>
        </div>
        <div class="planer-case-dev-excerpt">
            <?php the_excerpt(); ?>
        </div>
        <div class="planer-case-dev-description-wrapper">
            <div class="planer-case-dev-desc-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="planer-case-more-wrapper">
                <div class="planer-case-dev-excerpt-task">
                    <span class="planer-excerpt-task">
                        <?php echo planer_case_excerpt_task(get_post_meta($id,'planer_case_task', true ),200); ?>
                    </span>
                </div>
                <div class="planer-case-dev-result-work">
                    <h4>Результат</h4>
                    <p class="case-dev-result-begin case-dev-result-block">
                        <span class="case-dev-result-progress"><?php echo get_post_meta($id,'planer_result_begin_planer_result_begin_precent', 1 ); ?>%</span>
                        <span class="case-dev-result-down"><?php echo get_post_meta($id,'planer_result_begin_planer_result_begin_description', 1 ); ?></span>
                    </p>
                    <p class="case-dev-result-end case-dev-result-block">
                        <span class="case-dev-result-progress"><?php echo get_post_meta($id, 'planer_result_end_planer_result_end_precent', 1); ?>%</span>
                        <span class="case-dev-result-down"><?php echo get_post_meta($id, 'planer_result_end_planer_result_end_description', 1); ?></span>
                    </p>
                </div>
                <div class="planer-case-dev-link-work">
                    <a class="case-link-this-work" href="<?php the_permalink(); ?>">
                        Краткий кейс
                    </a>
                </div>
            </div>
        </div>
    </div>
</article>