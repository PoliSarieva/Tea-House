<?php get_header(); ?>

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown"><?php the_archive_title(); ?></h1>
            
        </div>
</div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">

            <?php if ( have_posts() ) : ?>

            <?php while( have_posts() ) : the_post(); ?>

                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                            <img class="img-fluid" src="<?php echo TEA_FILES_URL; ?>/img/article.jpg" alt="">
                    <?php endif; ?>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <h1 class="display-6"><?php the_title(); ?></h1>
                    </div>
                
                    <p class="mb-4"><?php the_content(); ?></p>
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                </div>

            <?php endwhile; ?>

            <?php else : ?>
                    Sorry, there is nothing for display!

            <?php endif; ?>

        

            <div class="pagination">
            <?php 
                the_posts_pagination( array(
                    'mid_size'  => 1,
                    'prev_text' => __('Previous' , 'softuni' ),
                    'next_text' => __( 'Next' , 'softuni' ),
                ) );
            ?>
            </div>

        </div>
    </div>
</div>


    <?php get_footer(); ?>