<?php
add_action('add_meta_boxes', array('T5_Richtext_Excerpt', 'switch_boxes'));

/**
 * Replaces the default excerpt editor with TinyMCE.
 */
class T5_Richtext_Excerpt {

    /**
     * Replaces the meta boxes.
     *
     * @return void
     */
    public static function switch_boxes() {
        if (!post_type_supports($GLOBALS['post']->post_type, 'excerpt')) {
            return;
        }

        remove_meta_box(
                'postexcerpt' // ID
                , 'packeges'            // Screen, empty to support all post types
                , 'normal'      // Context
        );

        add_meta_box(
                'postexcerpt2'     // Reusing just 'postexcerpt' doesn't work.
                , __('Package Details')    // Title
                , array(__CLASS__, 'show') // Display function
                , 'packeges'              // Screen, we use all screens with meta boxes.
                , 'normal'          // Context
                , 'core'            // Priority
        );
    }

    /**
     * Output for the meta box.
     *
     * @param  object $post
     * @return void
     */
    public static function show($post) {
        ?>
        <label class="screen-reader-text" for="excerpt"><?php
        _e('Excerpt')
        ?></label>
        <?php
        // We use the default name, 'excerpt', so we don’t have to care about
        // saving, other filters etc.
        wp_editor(
                self::unescape($post->post_excerpt), 'excerpt', array(
            'textarea_rows' => 15
            , 'media_buttons' => FALSE
            , 'teeny' => TRUE
            , 'tinymce' => TRUE
                )
        );
    }

    /**
     * The excerpt is escaped usually. This breaks the HTML editor.
     *
     * @param  string $str
     * @return string
     */
    public static function unescape($str) {
        return str_replace(
                array('&lt;', '&gt;', '&quot;', '&amp;', '&nbsp;', '&amp;nbsp;')
                , array('<', '>', '"', '&', ' ', ' ')
                , $str
        );
    }

}
