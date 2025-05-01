<?php
if (post_password_required()) return;
?>

<!-- start comments wrapper -->
<div class="comments-wrapper">
    <div class="single-post-title comment-title">
        <h2>write your comment</h2>
    </div>

    <form id="contactForm" class="contact-form" action="<?php echo site_url('/wp-comments-post.php'); ?>" method="post">
        <div class="row">
            <?php
            $commenter = wp_get_current_commenter();
            $req = get_option('require_name_email');
            $aria_req = $req ? " aria-required='true'" : '';

            echo '<div class="col-md-4"><div class="form-group">';
            echo '<input type="text" name="author" class="form-control" placeholder="Your Name" value="' . esc_attr($commenter['comment_author']) . '"' . $aria_req . '>';
            echo '</div></div>';

            echo '<div class="col-md-4"><div class="form-group">';
            echo '<input type="email" name="email" class="form-control" placeholder="Your Email" value="' . esc_attr($commenter['comment_author_email']) . '"' . $aria_req . '>';
            echo '</div></div>';

            echo '<div class="col-md-4"><div class="form-group">';
            echo '<input type="text" name="url" class="form-control" placeholder="Your Subject" value="' . esc_attr($commenter['comment_author_url']) . '">';
            echo '</div></div>';
            ?>
        </div>

        <div class="form-group">
            <textarea name="comment" class="form-control" placeholder="Your Message" required></textarea>
        </div>

        <?php
        comment_id_fields();
        do_action('comment_form', get_the_ID());
        ?>

        <div class="text-right">
            <button type="submit" class="btn btn-primary input-btn"><span>Submit</span></button>
        </div>
    </form>
</div>

<?php if (have_comments()) : ?>
    <div class="comments-responsed-wrapper">
        <div class="single-post-title comment-title">
            <h2>Comments (<?php echo get_comments_number(); ?>)</h2>
        </div>

        <div class="comments-media">
            <ol class="comment-list">
                <?php
                wp_list_comments(array(
                    'style' => 'ol',
                    'avatar_size' => 64,
                    'callback' => 'custom_comments_markup'
                ));
                ?>
            </ol>
        </div>
    </div>
<?php endif; ?>
