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
          'type'                => get_field('type'),
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
