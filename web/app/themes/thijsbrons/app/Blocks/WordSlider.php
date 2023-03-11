<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class WordSlider extends Block
{
    public $name = 'Word Slider';
    public $description = 'A simple Word Slider block.';
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
          'word_slider'             => get_field('word_slider'),
          'custom_seperator'        => get_field('custom_seperator'),
          'seperator'               => get_field('seperator'),
        ];
    }

    public function fields()
    {
        $acfFields = new FieldsBuilder('WordSlider');

        return $acfFields->build();
    }

    public function enqueue()
    {
        //
    }
}
