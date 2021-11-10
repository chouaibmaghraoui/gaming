<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <div class="blog-post">
            <h2 class="blog-post-title"><?php the_title(); ?></h2>
            <p class="blog-post-meta"><?php the_time('d/m/Y'); ?> par <?php the_author(); ?></p>
            <?php (is_singular()) ? the_content() : the_excerpt(); ?>
            <?php if(!is_singular()) : ?>
                <p><a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire la suite</a></p>
            <?php endif; ?>
        </div>
    <?php endwhile; ?>
    <div id="pagination">
       <?php echo paginate_links(); ?>
   </div>
<?php endif; ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <div class="blog-poSearch
￼￼Search
Recent Posts
Recent Comments
No comments to show.
Archives
No archives to show.
Categories
No categoriesst">
            <h2 class="blog-post-title"><?php the_title(); ?></h2>
            <p class="blog-post-meta"><?php the_time('d/m/Y'); ?> par <?php the_author(); ?></p>
            <?php (is_singular()) ? the_content() : the_excerpt(); ?>
            <?php if(!is_singular()) : ?>
                <p><a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire la suite</a></p>
            <?php endif; ?>
            <?php if(is_singular()) : if(comments_open()) : comments_template(); endif; endif; ?>
        </div>
    <?php endwhile; ?>
    <div id="pagination">
       <?php echo paginate_links(); ?>
   </div>
<?php endif; ?>
