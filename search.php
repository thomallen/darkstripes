<?php get_header(); ?>

<div id="main">
<div id="content">
    <div class="blog-index">

    <article>
        <h1 class="page-title"><?php _e( 'Search Results for '); ?><span><?php the_search_query(); ?></span></h1>
    </article>

    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header>
            <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            <p class="meta">
                <time datetime="<?php the_time('Y-m-d\TH:i:sO') ?>" pubdate="" data-updated="true">
                    <?php the_time( get_option( 'date_format' ) ); ?>
                </time>
            </p>   
            <p>
                <span class="meta-prep meta-prep-author">By </span>
                <span class="author vcard"><?php the_author_posts_link(); ?></span>
                <span class="meta-sep"> | </span>
                <span class="edit-link"><?php edit_post_link( __( 'Edit')) ?></span>
            </p>
        </header> 

        <div class="entry-content">
            <?php the_excerpt( __( 'continue reading <span class="meta-nav">&raquo;</span>') ); ?>
        </div>
        <footer>
            <p>
                <span class="cat-links">
                    <span class="entry-utility-prep entry-utility-prep-cat-links">
                        <?php _e( 'Posted in '); ?>
                    </span>
                    <?php echo get_the_category_list(', '); ?>
                </span>
                <span class="tag-links">
                    <span class="entry-utility-prep entry-utility-prep-tag-links">
                        <?php the_tags( '<span class="meta-sep"> | </span>' . __('Tagged: '), ', ', '' ) ?>
                    </span>
                </span>
                <span class="meta-sep"> | </span>
                <span class="comments-link">
                    <?php comments_popup_link( __( 'Leave a comment'), __( '1 Comment'), __( '% Comments') ) ?>
                </span>
                <span class=\"edit-link\">
                    <?php edit_post_link( __( 'Edit'), '<span class="meta-sep"> | </span>' ) ?>
                </span>
            </p>
        </footer>
    </article>

    <?php endwhile; else: ?>
        <article>
            <header>
                <h2 class="entry-title"><?php _e('No posts were found.'); ?></h2>
            </header> 
        </article>
    <?php endif; ?>

    </div>

    <?php get_sidebar(); ?>

</div>
</div>

<?php get_footer(); ?>