<?php
/* page.php */

get_header();
?>

    <main class="main">
        <div class="wrap">

    <div class="page-grid">


        <!-- colum 1 -->
    <aside class="side left-side">

        <h2 class="side-title">Latest News</h2>

<?php
    $left_posts = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 2
    )
    
);

 if($left_posts->have_posts()):

        while($left_posts->have_posts()): $left_posts->the_post();
    ?>

 <article class="mini-post">

    <?php if(has_post_thumbnail()): ?>
        
  <div class="mini-thumb">
        
        <a href="<?php the_permalink(); ?>">

  <?php the_post_thumbnail('medium'); ?>

</a>
        
        </div>

   <?php endif; 
?>

        <h3>

        <a href="<?php the_permalink(); ?>">


       <?php the_title(); ?>
    </a>
        </h3>

        <div class="mini-meta">
    <?php the_time('F j, Y'); ?>


        </div>

    </article>

<?php
    
    endwhile;
    
    wp_reset_postdata();

endif;
?>

        </aside>



        <!-- center -->

        <section class="page-center">

    <?php if(have_posts()): while(have_posts()): the_post(); ?>


        <article <?php post_class('page-wrap'); ?>>

            <header>  <h1><?php the_title(); ?></h1> </header>

<?php if(has_post_thumbnail()): ?>

        <div class="img-single">
    
    <?php the_post_thumbnail('large'); ?>
</div>

        <?php endif; ?>

    <div class="contenido">
    
    <?php the_content(); ?>
        </div>

</article>

        <?php endwhile; endif; ?>

</section>



    <!-- column 2 -->
    <aside class="side right-side">

        <h2 class="side-title">More </h2>

<?php

    $right_posts = new WP_Query(array(

'post_type' => 'post',
'posts_per_page' => 2,
'offset' => 2 )

    );

    if($right_posts->have_posts()):

        while($right_posts->have_posts()): $right_posts->the_post();

?>

        <article class="mini-post">

            <?php if(has_post_thumbnail()): ?>

        <div class="mini-thumb">
    
    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('medium'); ?> </a>

        </div>


        <?php endif; ?>


        <h3>

        <a href="<?php the_permalink(); ?>">


        <?php the_title(); ?>
    
    </a>

</h3>

        <div class="mini-meta">
        <?php the_time('F j, Y'); ?>
        </div>

</article>

<?php
    endwhile;
      wp_reset_postdata();
    endif;
    ?>

    </aside>


    </div>

</div>  

</main>

<?php get_footer(); ?>