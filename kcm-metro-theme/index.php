<?php

get_header();
?>

<main class="main">
    <div class="wrap">

<h2 class="titulo-sec">Latest News</h2>

     <?php if ( have_posts() ) : ?>

            <div class="posts">

                <?php while ( have_posts() ) : the_post(); ?>

        
        <article <?php post_class('card-post'); ?>>

             <?php if ( has_post_thumbnail() ) : ?>


                    <div class="thumb">

                                <a href="<?php echo get_permalink(); ?>">
                                    <?php the_post_thumbnail('large'); ?>
                                </a>

                            </div>

           <?php endif; ?>

             <div class="meta">
                    <?php the_date(); ?>

               </div>

                        <h2>
                            <a href="<?php echo get_permalink(); ?>">
                                <?php the_title(); ?> </a>
                        </h2>

                        <div class="excerpt"> <?php the_excerpt(); ?> </div>

                 </article>

                <?php endwhile; ?>

            </div>

        <?php else : ?>

            <p>No posts found:\</p>

        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>