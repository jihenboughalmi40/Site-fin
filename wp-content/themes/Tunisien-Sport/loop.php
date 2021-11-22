<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <div class="blog-post">
            <?php (is_singular()) ? the_content() : the_excerpt(); ?>
        </div>
    <?php endwhile; ?>
    <div id="pagination">
       <?php echo paginate_links(); ?>
   </div>
<?php endif; ?>