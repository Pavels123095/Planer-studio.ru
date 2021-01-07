<?php
// Do not allow directly accessing this file.
/*
Template Name: cases
Template Post Type: post, event, services, page, cases
*/
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}

$term_developer = get_term(9, 'category-cases', 'ARRAY_A'); 
$term_design = get_term(10, 'category-cases', 'ARRAY_A');

add_filter( 'excerpt_length', function ( $number ){
	$number = 25;

	return $number;
});
?>

<?php get_header(); ?>

<main id="planer-main-page">
    <section class="planer-case-section planer-main-section-top planer-layout-section">
        <div class="planer-wrapper-main-section-top">
            <div class="planer-case-title">
                <h1>Разработка и продвижение сайтов компаний по теме</h1>
                <span><?php echo $term_developer['name']; ?></span>
            </div>
            <div class="planer-case-wrapper planer-layout-container">
                <?php
                    $cases_developer = array(
                        'post_type' => 'case',
                        'tax_query'      => array(
                            array(
                              'taxonomy' => 'category-cases',
                              'field'    => 'slug',
                              'terms'    => 'case-developer',
                            ),
                          ),
                    );
                    $query_case_dev = get_posts( $cases_developer );
                    if ($query_case_dev):
                        foreach ($query_case_dev as $post): setup_postdata( $post );
                            require TEMPLATEPATH .'/templates/cases-post/case-developer.php';
                        endforeach;  endif; wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <section class="planer-case-screen-second planer-case-section planer-main-section-top planer-layout-section">
        <div class="planer-wrapper-main-section-top">
            <div class="planer-case-title">
                <h1>Библиотека дизайнов сайтов по теме</h1>
                <span><?php echo $term_design['name']; ?></span>
            </div>
            <div class="planer-case-design-wrapper planer-case-wrapper planer-layout-container">
            <?php
                $cases_design = array(
                        'post_type' => 'case',
                        'tax_query'      => array(
                            array(
                              'taxonomy' => 'category-cases',
                              'field'    => 'slug',
                              'terms'    => 'case-designer',
                            ),
                          ),
                    );
                    $query_case_design = get_posts( $cases_design );
                    if ($query_case_design):
                        foreach ($query_case_design as $post): setup_postdata( $post );
                            require TEMPLATEPATH .'/templates/cases-post/case-design.php';
                        endforeach;  endif; wp_reset_postdata();
            ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>