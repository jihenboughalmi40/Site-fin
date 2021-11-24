<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <div class="blog-post">
          
        </div>
    <?php endwhile; ?>
    <div id="pagination">
       <?php echo paginate_links(); ?>
   </div>
<?php endif; ?>