<?php
class ACF_Social_Icons_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'acf_social_icons_widget',
            __('ACF Social Icons', 'text_domain'),
            array('description' => __('Displays social media icons using ACF fields', 'text_domain'))
        );
    }

    public function widget($args, $instance) {
        $widget_id = 'widget_' . $args['widget_id'];

        $facebook  = get_field('facebook_url', $widget_id);
        $twitter   = get_field('twitter_url', $widget_id);
        $instagram = get_field('instagram_url', $widget_id);
        $linkedin  = get_field('linkedin_url', $widget_id);

        echo $args['before_widget'];
        echo '<div class="acf-social-icons">';

        if ($facebook) {
            echo '<a href="' . esc_url($facebook) . '" target="_blank"><i class="fab fa-facebook-f"></i></a>';
        }
        if ($twitter) {
            echo '<a href="' . esc_url($twitter) . '" target="_blank"><i class="fab fa-twitter"></i></a>';
        }
        if ($instagram) {
            echo '<a href="' . esc_url($instagram) . '" target="_blank"><i class="fab fa-instagram"></i></a>';
        }
        if ($linkedin) {
            echo '<a href="' . esc_url($linkedin) . '" target="_blank"><i class="fab fa-linkedin-in"></i></a>';
        }

        echo '</div>';
        echo $args['after_widget'];
    }
}

// Register Widget
function register_acf_social_icons_widget() {
    register_widget('ACF_Social_Icons_Widget');
}
add_action('widgets_init', 'register_acf_social_icons_widget');
