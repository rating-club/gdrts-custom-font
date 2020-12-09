<?php

if (!defined('ABSPATH')) exit;

class gdrts_font_cuset extends gdrts_font {
    /* whenever you make changes, modify the version number */
    public $version = '1.2.0';

    /* name of the font, it has to match name of the CSS classes 
     * this is used for name of the font class: gdrts-fonticon-cuset */
    public $name = 'cuset';

    /* list of the rating methods this font supports.
     * if you only include icons for stars, leave only rating methods
     * that are supported. */
    public $active = array(
        'stars-rating', 
        'stars-review', 
        'thumbs-rating', 
        'like-this'
    );

    public function __construct() {
        parent::__construct();

        /* label of the font for display purpose */
        $this->label = __("Custom Font Icon", "gdrts-custom-font");

        $this->icons = array(
            'star' => array('char' => 'j', 'label' => __("Star", "gdrts-custom-font")),
            'fireball' => array('char' => 'a', 'label' => __("Fireball", "gdrts-custom-font")),
            'beer' => array('char' => 'b', 'label' => __("Beer Mug", "gdrts-custom-font")),
            'icecream' => array('char' => 'g', 'label' => __("Icecream", "gdrts-custom-font")),
            'like' => array('char' => 'h', 'label' => __("Thumb Up", "gdrts-custom-font")),
            'dislike' => array('char' => 'i', 'label' => __("Thumb Down", "gdrts-custom-font")),
            'clear' => array('char' => 'e', 'label' => __("Clear", "gdrts-custom-font")),
            'check' => array('char' => 'f', 'label' => __("Check", "gdrts-custom-font"))
        );

        $this->thumbs = array(
            'hands' => array('up' => 'h', 'down' => 'i', 'label' => __("Hands", "gdrts-custom-font")),
            'arrows' => array('up' => 'd', 'down' => 'c', 'label' => __("Arrows", "gdrts-custom-font"))
        );

        $this->likes = array(
            'hands' => array('like' => 'h', 'liked' => 'f', 'clear' => 'e', 'label' => __("Hands", "gdrts-custom-font")),
            'star' => array('like' => 'j', 'liked' => 'f', 'clear' => 'e', 'label' => __("Star", "gdrts-custom-font")),
        );
    }

    public function register_enqueue_files($js_full, $css_full, $js_dep, $css_dep) {
        $url = plugins_url('/gdrts-custom-font/font/styles.css');

        wp_register_style('gdrts-font-custom', $url, $css_dep, $this->version);
    }

    public function enqueue_core_files() {
        wp_enqueue_style('gdrts-font-custom');
    }
}
