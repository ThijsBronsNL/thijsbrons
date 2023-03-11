<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Projects extends Block
{
    public $name = 'Projects';
    public $description = 'A simple Projects block.';
    public $category = 'formatting';
    public $keywords = [];
    public $post_types = [];
    public $parent = [];
    public $mode = 'edit';

    public $supports = [
        'full_height' => false,
        'anchor' => false,
        'mode' => 'edit',
        'multiple' => true,
        'supports' => array('mode' => false),
        'jsx' => true,
    ];

    public function getProjects() {
        $query = new \WP_Query( [
        'post_type'       => 'projects',
        'posts_per_page'  => get_field('projects_count'),
        'orderby'         => 'date',
        'order'           => 'DESC',
      ]);

      $data = array_map(function ($post) {
        return [
          'id'              => $post->ID,
          'title'           => apply_filters('the_title', $post->post_title),
          'subtitle'        => get_field('subtitle', $post->ID),
          'url'             => get_field('url', $post->ID),
          'permalink'       => get_permalink( $post->ID),
          'featured_image'  => get_post_thumbnail_id( $post->ID ),
          'category'        => get_the_terms($post->ID, 'projects-categories'),
        ];
      }, $query->posts);
  
      return [
        'data' => $data,
        'query' => $query,
      ];
    }

    public function with()
    {
        return [
            'id'                      => get_field('id'),
            'bg_color'                => get_field('bg_color'),
            'pt'                      => get_field('padding_top'),
            'pb'                      => get_field('padding_bottom'),
            'content_items'           => get_field('content_items'),
            'heading'                 => get_field('heading'),
            'title'                   => get_field('title'),
            'highlighted_title'       => get_field('highlighted_title'),
            'content'                 => get_field('content'),
            'buttons'                 => get_field('buttons'),
            'projects'                => $this->getProjects(),
        ];
    }

    public function fields()
    {
        $acfFields = new FieldsBuilder('Projects');

        return $acfFields->build();
    }

    public function enqueue()
    {
        //
    }
}