<?php 

class PlanerSectionRegister {
    public function __construct()
    {
        add_action( 'init', array( $this, 'planer_custom_block_register_block_project_block') );

    }

    public function planer_custom_block_register_block_project_block() {
        register_block_type('planer-custom-block/project-block', 
        [
            'title' => __('О проекте', 'textdomain'),
            'icon'=> 'wordpress-alt',
            'attributes' => [
                'description_projects' => array(
                    'type' => 'string',
                    'title' => 'Напишите о проекте'
                ),
                'image_project' => array(
                    'type' => 'image',
                    'title' => 'Картинка справа'
                ),
                'task' => array(
                    'type' => 'string',
                    'title' => 'Описание задачи (для полного кейса)'
                ),
                'instruments' => array(
                    'type' => 'string',
                    'title' => 'Инструменты для решения задачи (списком пожалуйста)'
                ),
                'geolocation' => array(
                    'type' => 'string',
                    'title' => 'Геолокация'
                ),
                'realization' => array(
                    'type' => 'array',
                    'title' => 'Реализация',
                    'attributes' => array(
                        'auditional' => array(
                            'type' => 'string',
                            'title' => 'Выход на целевую аудиторию',
                        ),
                        'optimization' => array(
                            'type' => 'string',
                            'title' => 'Оптимизация'
                        )
                    ),
                ),
                'render_callback' => array( $this, 'render_planer_custom_block_project_callback'),
            ]
        ]
        );
    }

    public function render_planer_custom_block_project_callback($attributes, $content) { 
        $content = '<div class="planer-single-dev-about-projects">';
        $content .='<h1 class="single-about-project-title">О проекте</h1>';
        $content .= '<span class="description-about-project">';
        if (!empty ($attributes['description_projects'])):
            $content .= $attributes['description_projects'];
        else :
            $content .= 'Ещё не заполнено!';
        endif;
            $content .=  '</span>';
            $content .= '</div>';
        return $content;
    }

}