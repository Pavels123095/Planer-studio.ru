<?php 

class PlanerPostTypes {
    function __construct()
    {
        add_action( 'init', array( $this, 'create_category_case_taxonomies'));
        add_action( 'init', array( $this, 'create_category_services_taxonomies'));
        add_action( 'init', array( $this, 'planer_post_services' ), 10);
        add_action( 'init', array( $this, 'planer_post_partners' ), 10);
        add_action( 'init', array( $this,'planer_post_type_case' ), 20);
        add_action( 'add_meta_boxes',array( $this, 'planer_cost_catalog_meta_box'));
        add_action( 'save_post', array( $this , 'planer_cost_catalog_save_postdata' ));
        add_action( 'save_post', array( $this , 'planer_case_task_save_postdata' ));
        add_action( 'save_post', array( $this , 'planer_cost_down_save_postdata' ));
        add_filter( 'manage_services_posts_columns',array($this, 'planer_filter_categories_services') );
        add_filter( 'manage_case_posts_columns',array($this, 'planer_filter_categories_cases') );
        add_action('admin_head', array( $this, 'planer_case_task_admin_css'));
        add_filter( 'post_type_labels_post',array($this, 'planer_rename_posts_labels'));
        add_filter( 'post_type_archive_link', array($this,'post_type_archive_link__news'), 10, 2 );
        // remove_filter( 'the_content', 'wpautop', 10, 2);
    }

    public function planer_post_partners() {
        $args_post_type = array(
            'label'  => null,
            'labels' => [
                'name'               => 'Партнёры', // основное название для типа записи
                'singular_name'      => 'Партнёр', // название для одной записи этого типа
                'add_new'            => 'Добавить партнёра', // для добавления новой записи
                'add_new_item'       => 'Добавление', // заголовка у вновь создаваемой записи в админ-панели.
                'edit_item'          => 'Редактирование', // для редактирования типа записи
                'new_item'           => 'Новое', // текст новой записи
                'view_item'          => 'Открыть', // для просмотра записи этого типа.
                'search_items'       => null, // для поиска по этим типам записи
                'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
                'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
                'parent_item_colon'  => '', // для родителей (у древовидных типов)
                'menu_name'          => 'Партнёры', // название меню
            ],
            'description'         => '',
            'public'              => true,
            'show_in_menu'        => true, // показывать ли в меню адмнки
            'show_in_rest'        => null, // добавить в REST API. C WP 4.7
            'rest_base'           => null, // $post_type. C WP 4.7
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-format-gallery',
            'hierarchical'        => false,
            'supports'            => [ 'title','thumbnail','page-attributes'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies'          => [],
            'has_archive'         => false,
            'rewrite'             => true,
            'query_var'           => true,
        );
        register_post_type('slider_partners', $args_post_type);
    }

    public function planer_post_services() {
        $args_post_type = array(
            'label'  => null,
            'labels' => [
                'name'               => 'Услуги', // основное название для типа записи
                'singular_name'      => 'Услуга', // название для одной записи этого типа
                'add_new'            => 'Добавить новую', // для добавления новой записи
                'add_new_item'       => 'Добавление', // заголовка у вновь создаваемой записи в админ-панели.
                'edit_item'          => 'Редактирование', // для редактирования типа записи
                'new_item'           => 'Новое', // текст новой записи
                'view_item'          => 'Открыть', // для просмотра записи этого типа.
                'search_items'       => null, // для поиска по этим типам записи
                'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
                'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
                'parent_item_colon'  => '', // для родителей (у древовидных типов)
                'menu_name'          => 'Каталог Услуг', // название меню
            ],
            'description'         => '',
            'public'              => true,
            'show_in_menu'        => true, // показывать ли в меню адмнки
            'show_in_rest'        => true, // добавить в REST API. C WP 4.7
            'rest_base'           => false, // $post_type. C WP 4.7
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-list-view',
            'hierarchical'        => false,
            'supports'            => [ 'title','editor','author','thumbnail','excerpt','comments','page-attributes'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies'          => ['category-catalogs'],
            'has_archive'         => 'services',
            'rewrite'             => 'services',
            'query_var'           => true,
            'taxonomies'          => array( 'category-catalogs' ),
        );
        register_post_type('services', $args_post_type);
    
    }



        /**
         * @param string $link
         * @param string $post_type
         *
         * @return bool|string
         */
        function post_type_archive_link__news( $link, $post_type ) {
            global $wp_rewrite;

            if ( $post_type === 'services' ) {
                $post_type_obj = get_post_type_object( $post_type );

                /** start @see get_post_type_archive_link() */
                if ( ! $post_type_obj->has_archive ) {
                    return false;
                }

                if ( get_option( 'permalink_structure' ) && is_array( $post_type_obj->rewrite ) ) {
                    $struct = ( true === $post_type_obj->has_archive ) ? $post_type_obj->rewrite['slug'] : $post_type_obj->has_archive;
                    if ( $post_type_obj->rewrite['with_front'] ) {
                        $struct = $wp_rewrite->front . $struct;
                    } else {
                        $struct = $wp_rewrite->root . $struct;
                    }
                    $link = home_url( user_trailingslashit( $struct, 'post_type_archive' ) );
                } else {
                    $link = home_url( '/post_type' .'/'. $post_type );
                }
                /* end */
            }

            return $link;
        }
    
    public function planer_post_type_case() {
        $args_post_type_case = array(
            'label'  => null,
            'labels' => [
                'name'               => 'Кейсы', // основное название для типа записи
                'singular_name'      => 'Кейс', // название для одной записи этого типа
                'add_new'            => 'Добавить новую', // для добавления новой записи
                'add_new_item'       => 'Добавление', // заголовка у вновь создаваемой записи в админ-панели.
                'edit_item'          => 'Редактирование', // для редактирования типа записи
                'new_item'           => 'Новое', // текст новой записи
                'view_item'          => 'Открыть', // для просмотра записи этого типа.
                'search_items'       => null, // для поиска по этим типам записи
                'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
                'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
                'parent_item_colon'  => '', // для родителей (у древовидных типов)
                'menu_name'          => 'Кейсы (работы)', // название меню
            ],
            'description'         => '',
            'public'              => true,
            'show_in_menu'        => true, // показывать ли в меню адмнки
            'show_in_rest'        => true, // добавить в REST API. C WP 4.7
            'rest_base'           => false, // $post_type. C WP 4.7
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-welcome-widgets-menus',
            'hierarchical'        => false,
            'supports'            => [ 'title','editor','author','thumbnail','excerpt','comments','page-attributes' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies'          => ['category-cases'],
            'has_archive'         => false,
            'rewrite'             => false,
            'query_var'           => true,
            'taxonomies'          => array('category-cases' ),
        );
        register_post_type('case', $args_post_type_case);
    }

    public function planer_cost_catalog_meta_box() {
        $screens = array( 'services','case', 'page' );
        add_meta_box( 'planer_cost_catalog', 'Цена за услугу', array( $this,'planer_cost_catalog_callback'), array('services', 'page') );
        add_meta_box('planer_cost_down', 'Старая цена', array( $this,'planer_cost_down_callback'), array('services', 'page'));
        add_meta_box('planer_case_task', 'Описание задачи', array($this , 'planer_case_task_callback'), array( 'case', 'page' ));
        add_filter( 'wp_editor_settings',array($this, 'planer_function_editor'), 10, 2 );
        // add_filter('the_content', array($this, 'planer_the_content_filter'),10,2);
    }

    /* Замена имени постов на "Новости" */
        function planer_rename_posts_labels( $labels ){
            // заменять автоматически не пойдет например заменили: Запись = Статья, а в тесте получится так "Просмотреть статья"
        
            /* оригинал
                stdClass Object (
                    'name'                  => 'Записи',
                    'singular_name'         => 'Запись',
                    'add_new'               => 'Добавить новую',
                    'add_new_item'          => 'Добавить запись',
                    'edit_item'             => 'Редактировать запись',
                    'new_item'              => 'Новая запись',
                    'view_item'             => 'Просмотреть запись',
                    'search_items'          => 'Поиск записей',
                    'not_found'             => 'Записей не найдено.',
                    'not_found_in_trash'    => 'Записей в корзине не найдено.',
                    'parent_item_colon'     => '',
                    'all_items'             => 'Все записи',
                    'archives'              => 'Архивы записей',
                    'insert_into_item'      => 'Вставить в запись',
                    'uploaded_to_this_item' => 'Загруженные для этой записи',
                    'featured_image'        => 'Миниатюра записи',
                    'set_featured_image'    => 'Задать миниатюру',
                    'remove_featured_image' => 'Удалить миниатюру',
                    'use_featured_image'    => 'Использовать как миниатюру',
                    'filter_items_list'     => 'Фильтровать список записей',
                    'items_list_navigation' => 'Навигация по списку записей',
                    'items_list'            => 'Список записей',
                    'menu_name'             => 'Записи',
                    'name_admin_bar'        => 'Запись',
                )
            */
        
            $new = array(
                'name'                  => 'Новости',
                'singular_name'         => 'Новость',
                'add_new'               => 'Добавить новости',
                'add_new_item'          => 'Добавить новость',
                'edit_item'             => 'Редактировать новость',
                'new_item'              => 'Новая новость',
                'view_item'             => 'Просмотреть новость',
                'search_items'          => 'Поиск новостей',
                'not_found'             => 'Новостей не найдено.',
                'not_found_in_trash'    => 'Новостей в корзине не найдено.',
                'parent_item_colon'     => '',
                'all_items'             => 'Все новости',
                'archives'              => 'Архивы новостей',
                'insert_into_item'      => 'Вставить в новость',
                'uploaded_to_this_item' => 'Загруженные для этой новости',
                'featured_image'        => 'Миниатюра новости',
                'filter_items_list'     => 'Фильтровать список новостей',
                'items_list_navigation' => 'Навигация по списку новостей',
                'items_list'            => 'Список новостей',
                'menu_name'             => 'Новости',
                'name_admin_bar'        => 'Новость', // пункте "добавить"
            );
        
            return (object) array_merge( (array) $labels, $new );
        }
    /* Замена имени постов на "Новости" */

    /* Создание цен */
        function planer_cost_catalog_callback( $post, $meta ) {
            $screens = $meta['args'];
            // Используем nonce для верификации
            wp_nonce_field( plugin_basename(__FILE__), 'myplugin_noncename' );
            // значение поля
            $value = get_post_meta( $post->ID, 'planer_cost_catalog', 99 );
            // Поля формы для введения данных
            echo '<label for="planer_cost_catalog_field">' . __("Цена услуги", 'myplugin_textdomain' ) . '</label> ';
            echo '<input type="text" id="planer_cost_catalog_field" name="planer_cost_catalog_field" value="'. $value .'" size="10" />';
        }
        
        function planer_cost_down_callback( $post, $meta ) {
            global $post;
            $screens = $meta['args'];
            // Используем nonce для верификации
            wp_nonce_field( plugin_basename(__FILE__), 'myplugin_noncename' );
            // значение поля
            $value = get_post_meta( $post->ID, 'planer_cost_down', 99 );
            // Поля формы для введения данных
            echo '<label for="planer_cost_down_field">' . __("Старая цена услуги", 'myplugin_textdomain' ) . '</label> ';
            echo '<input type="text" id="planer_cost_down_field" name="planer_cost_down_field" value="'. $value .'" size="10" />';
        }

        public function planer_cost_down_save_postdata( $post_id ) {
            // Убедимся что поле установлено.
            if ( ! isset( $_POST['planer_cost_down_field'] ) )
            return;
        
            // проверяем nonce нашей страницы, потому что save_post может быть вызван с другого места.
            if ( ! wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename(__FILE__) ) )
                return;
        
            // если это автосохранение ничего не делаем
            if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
                return;
        
            // проверяем права юзера
            if( ! current_user_can( 'edit_post', $post_id ) )
                return;
        
            // Все ОК. Теперь, нужно найти и сохранить данные
            // Очищаем значение поля input.
            $my_data = sanitize_text_field( $_POST['planer_cost_down_field'] );
        
            // Обновляем данные в базе данных.
            update_post_meta( $post_id, 'planer_cost_down', $my_data );
        }
        
        public function planer_cost_catalog_save_postdata( $post_id ) {
            // Убедимся что поле установлено.
            if ( ! isset( $_POST['planer_cost_catalog_field'] ) )
                return;
        
            // проверяем nonce нашей страницы, потому что save_post может быть вызван с другого места.
            if ( ! wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename(__FILE__) ) )
                return;
        
            // если это автосохранение ничего не делаем
            if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
                return;
        
            // проверяем права юзера
            if( ! current_user_can( 'edit_post', $post_id ) )
                return;
        
            // Все ОК. Теперь, нужно найти и сохранить данные
            // Очищаем значение поля input.
            $my_data = sanitize_text_field( $_POST['planer_cost_catalog_field'] );
        
            // Обновляем данные в базе данных.
            update_post_meta( $post_id, 'planer_cost_catalog', $my_data );
            
        }
    /* Создание цен */
    
    /* taxonomy this for services */
        public function create_category_services_taxonomies() {
            $labels = array(
                'name' => __( 'Категории услуг', 'taxonomy general name' ),
                'singular_name' => __( 'Категория услуги', 'taxonomy singular name' ),
                'search_items' =>  __( 'Найти категорию услуги' ),
                'all_items' => __( 'Все категории услуг' ),
                'parent_item' => __( 'Родительская категория услуг' ),
                'parent_item_colon' => __( 'Родительская категория' ),
                'edit_item' => __( 'Родительская категория' ),
                'update_item' => __( 'Обновить категорию' ),
                'add_new_item' => __( 'Добавить новую катгорию' ),
                'new_item_name' => __( 'Название новой категории услуг' ),
                'menu_name' => __( 'Категории услуг' ),
            );

            register_taxonomy('category-catalogs', array('category-catalog'), array(
                'hierarchical' => true,
                'labels' => $labels,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array( 'slug' => 'category-catalogs' ),
            ));

        }
    /* taxonomy this for services */

    /* Вывод колонок для кейсов и услуг с категориями */
        function planer_filter_categories_services( $post_columns ){

            unset($post_columns['categpries']);
            $post_columns['title'] ='Заголовок';
            $post_columns['author'] = 'Автор';
            $post_columns['taxonomy-category-catalogs'] = 'Категория услуг';
            $post_columns['metabox-planer_cost_catalog'] = 'Цена Услуги (актуальная)';
            $post_columns['metabox-planer_cost_down'] = 'Цена Услуги (старая)';
            $post_columns['date'] = 'Дата';
        
            return $post_columns;
        }

        function planer_filter_categories_cases($post_columns) {
            unset($post_columns['categpries']);
            $post_columns['title'] ='Заголовок';
            $post_columns['author'] = 'Автор';
            $post_columns['taxonomy-category-cases'] = 'Категория кейса';
            $post_columns['date'] = 'Дата';
        
            return $post_columns;
        }
    /* Вывод колонок для кейсов и услуг с категориями */

    /* Создаем новую таксономию для кейсов */
        public function create_category_case_taxonomies(){
            $labels = array(
                'name' => __( 'Категории кейсов', 'taxonomy general name' ),
                'singular_name' => __( 'Категория кейса', 'taxonomy singular name' ),
                'search_items' =>  __( 'Найти категорию кейса' ),
                'all_items' => __( 'Все категории кейсов' ),
                'parent_item' => __( 'Родительская категория кейсов' ),
                'parent_item_colon' => __( 'Родительская категория' ),
                'edit_item' => __( 'Родительская категория' ),
                'update_item' => __( 'Обновить категорию' ),
                'add_new_item' => __( 'Добавить новую катгорию' ),
                'new_item_name' => __( 'Название новой категории кейсов' ),
                'menu_name' => __( 'Категории кейсов' ),
            );
    
            register_taxonomy('category-cases', array('category-case'), array(
                'hierarchical' => true,
                'labels' => $labels,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array( 'slug' => 'category-cases' ),
            ));
    
        }
    /* Создаем новую таксономию для кейсов */

    /* Создание метабоксов к кейсам */
        function planer_case_task_callback($post, $meta) {
            $screens = $meta['args'];
            // Используем nonce для верификации
            wp_nonce_field( plugin_basename(__FILE__), 'myplugin_noncename' );
            // значение поля
            $value = get_post_meta( $post->ID, 'planer_case_task', 99 );
            // Поля формы для введения данных
            echo '<div class="planer-case-task-admin-wrapper">';
            echo '<label for="planer_case_task_field">' . __("Описание задач", 'myplugin_textdomain' ) . '</label> ';
            echo '<textarea type="text" id="planer_case_task_field" name="planer_case_task_field" value="'. $value .'" size="50" /> '. $value .' </textarea>';
            echo '</div>';
        }

        function planer_case_task_save_postdata( $post_id ) {
            // Убедимся что поле установлено.
            if ( ! isset( $_POST['planer_case_task_field'] ) )
            return;

            // проверяем nonce нашей страницы, потому что save_post может быть вызван с другого места.
            if ( ! wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename(__FILE__) ) )
                return;

            // если это автосохранение ничего не делаем
            if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
                return;

            // проверяем права юзера
            if( ! current_user_can( 'edit_post', $post_id ) )
                return;

            // Все ОК. Теперь, нужно найти и сохранить данные
            // Очищаем значение поля input.
            $my_data = sanitize_text_field( $_POST['planer_case_task_field'] );

            // Обновляем данные в базе данных.
            update_post_meta( $post_id, 'planer_case_task', $my_data );
        }

        function planer_case_task_admin_css() { ?>
                <style>
                    .wp-admin #planer_case_task .planer-case-task-admin-wrapper {
                        display: flex;
                        flex-flow: column wrap;
                    }
                    .wp-admin #planer_case_task .planer-case-task-admin-wrapper #planer_case_task_field {
                        width: 100%;
                        margin: 5px 0;
                    }
                </style>
        <?php }
    /* Создание метабоксов к кейсам */


    // Убрать фильтр чтобы каждый абзац был тегом p
    function planer_function_editor($settings) {
        global $post;
        if ($post->post_type == 'cases' or $post->post_type == 'services'):
            $settings = array('wpautop' => false);
        endif;
        return $settings;
    }

}