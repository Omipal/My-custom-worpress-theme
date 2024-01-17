<?php /* Template Name: Project Page */ 

get_header();
?>
<main>

<div class="main-scroll">

    <div class="row all-atail-projects-wrapper">

        <div class="col-md-10 col-xs-8 no-padding">
            <div class="all-atail-projects row-col-10">

            <?php
           $loop = new WP_Query( array(
                'post_type' => 'project',
                'posts_per_page' => -1
           ));

  
        ?>
       
        <?php while( $loop->have_posts()){ $loop->the_post();?>
            <?php $categories = get_field('categories'); ?>
            <div class="row-col-10 all-atail-projects-single" data-categories="<?php if($categories) { foreach( $categories as $categorie ){ echo $categorie. " "; } }?>">
                <div class="col-md-4 col-md-push-2 no-padding all-atail-projects-article col-xs-10 col-sm-6">
                    <article>
                        <h2>
                            <a href="<?php the_permalink(); ?>">
                               <?php the_title(); ?>
                            </a>
                        </h2>
                        <a class="open-full-post" data-post="post-70"
                           href="<?php the_permalink(); ?>">
                            <span>Show Case</span>
                        </a>
                    </article>
                </div>
                <div class="col-md-4 no-padding all-atail-projects-img col-xs-10 col-sm-4">
                  <?php if(has_post_thumbnail()){ ?>
                    <img width="500" height="350"
                         src="<?php the_post-the_post_thumbnail_url('project-medium'); ?>"
                         alt="<?php the_title(); ?>"/>
                         <?php } ?>
                </div>
            </div>
          <?php } wp_reset_postdata(); ?>

 

            </div>
        </div>

        <div class="all-atail-projects-category col-md-2 col-xs-4">
            <div class="all-atail-projects-category-wrapper">
                <div class="all-atail-projects-category-table">
                    <ul class="no-list">
                        <li>
                            <a href="#" class="active" data-action="show-category" data-category="cat-all">All</a>
                        </li>
                        <li>
                            <a href="#" data-action="show-category" data-category="cat-12">Portrait</a>
                        </li>
                        <li>
                            <a href="#" data-action="show-category" data-category="cat-5">Stock photo</a>
                        </li>
                        <li>
                            <a href="#" data-action="show-category" data-category="cat-10">Advertising</a>
                        </li>
                        <li>
                            <a href="#" data-action="show-category" data-category="cat-11">Fashion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</div> <!-- main-scroll -->

<div class="grid-bg row">
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
</div>

</main> <!-- main -->
<?php get_footer() ?>