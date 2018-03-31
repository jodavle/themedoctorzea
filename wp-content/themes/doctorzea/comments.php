<div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
        <h3 class="comments-title">
            <?php
                printf( _nx( 'Un comentario en "%2$s"', '%1$s comentarios en "%2$s"', get_comments_number(), 'comments title'),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h3>

        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                ) );
            ?>
        </ol><!-- .comment-list -->

        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation'); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments') ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;') ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>

        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.'); ?></p>
        <?php endif; ?>

    <?php endif; // have_comments() ?>

    <?php
    $comments_args = array(
        // Change the title of send button
        // Remove "Text or HTML to be displayed after the set of comment fields".
        'comment_notes_after' => '',
        // Redefine your own textarea (the comment body).
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true" class="c-field"></textarea></p>',
        );
    comment_form( $comments_args );
    ?>

</div><!-- #comments -->
