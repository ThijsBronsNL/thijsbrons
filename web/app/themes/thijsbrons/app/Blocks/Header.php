<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Header extends Block
{
    public $name = 'Header';
    public $description = 'A simple Header block.';
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
          'content_items'           => get_field('content_items'),
          'heading'                 => get_field('heading'),
          'title'                   => get_field('title'),
          'highlighted_title'       => get_field('highlighted_title'),
          'content'                 => get_field('content'),
          'buttons'                 => get_field('buttons'),
          'image'                   => get_field('image'),
        ];
    }

    public function fields()
    {
        $acfFields = new FieldsBuilder('header');

        return $acfFields->build();
    }

    public function enqueue()
    {
        //
    }
}
