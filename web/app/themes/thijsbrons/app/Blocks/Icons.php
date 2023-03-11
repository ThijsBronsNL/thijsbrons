<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Icons extends Block
{
    public $name = 'Icons';
    public $description = 'A simple Icons block.';
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
          'icons'                   => get_field('icons'),
        ];
    }

    public function fields()
    {
        $acfFields = new FieldsBuilder('Icons');

        return $acfFields->build();
    }

    public function enqueue()
    {
        //
    }
}
