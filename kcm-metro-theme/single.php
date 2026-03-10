<?php
/**
 * single.php
 * description: Template for single post view*/

get_header();
?>

<main class="main">
    <div class="wrap">

        <?php if ( have_posts() ) : ?>

 <?php while ( have_posts() ) : the_post(); ?>

         <article <?php post_class('post-single'); ?>>

            
    <h1><?php the_title(); ?></h1>

          <div class="meta-single"> By <?php the_author(); ?> | <?php the_date(); ?>
            </div>

     <?php if ( has_post_thumbnail() ) : ?>
        
        <div class="img-single">
          <?php the_post_thumbnail('large'); ?>
        </div>
             <?php endif; ?>

            
             <div class="contenido">
             <?php the_content(); ?>
                    </div>

         </article>
 <?php endwhile; ?>

        <?php else : ?>

            <p>No post found.</p>

        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>