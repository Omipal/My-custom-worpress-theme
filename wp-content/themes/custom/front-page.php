<?php /* Template Name: Front Page */ 

get_header();
?>
 <main>

<div class="main-scroll">

    <div class="project-preview-images">

        <div class="preview-images-item">

        <?php 
           $loop = new WP_Query( array(
                'post_type' => 'project',
                'posts_per_page' => 4, 
           ));

           $count = 0;
           $total_count = 0;
        ?>
        <?php while( $loop->have_posts()){ $loop->the_post();  $count++; $GLOBALS['$total_count']++;?>
            <?php if(has_post_thumbnail()){?> 
            <img src="<?php the_post_thumbnail_url() ?>" alt="" class="project-<?php echo  $count ?>">
            <?php } ?>
            <?php  } ?> 
        </div>
    </div>

    <div class="row ">

        <div class="col-md-10 no-padding">

            <div class="project-preview-arrow-wrapper">
                <span class="project-preview-arrow">
                    <span>
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                             width="57.143px" height="34.454px" viewBox="0 0 57.143 34.454" enable-background="new 0 0 57.143 34.454" xml:space="preserve">
                            <g>
                                <g>
                                    <polygon points="51.908,17.599 46.891,13.1 46.891,17.094 6.904,17.094 6.904,18.094 46.891,18.094 46.891,22.099"/>
                                </g>
                            </g>
                        </svg>
                    </span>
                    <span>Scroll</span>
                </span>
            </div>

            <div class="project-preview" tabindex="0">
            <?php 
           $loop = new WP_Query( array(
                'post_type' => 'project',
                'posts_per_page' => 4, 
           ));

           $count = 0;
           
        ?>
        <?php while( $loop->have_posts()){ $loop->the_post();  $count++;?>

           
                <div class="display-table">
                    <div class="display-table-cell">

                        <div class="row-col-10"
                             id="project-<?php echo $count ?>">
                            <div class="col-xs-5 col-sm-5 col-md-2 project-count">
                                <span><span class="project-count-number"><?php echo $count ?></span></span>
                                /
                                <span><?php echo $total_count; ?></span>
                            </div>
                            <div class="col-xs-7 col-sm-6 col-md-4 no-padding">
                                <div class="content">
                                    <article>

                                        <div class="preview-article-header">
                                            <h2>
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h2>
                                        </div>
                                        <div class="preview-article-text">
                                            <div class="preview-text-content">
                                                <p><?php echo wp_trim_words(get_the_content(), 32); ?></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php  } wp_reset_postdata(); ?> 

            </div>
        </div>
        <div class="col-md-2 all-projects-ajax-btn">
            <a href="<?php echo get_template_directory_uri(); ?> /jsons/atail_get_all_projects/all_projects.html" data-action="all-projects" data-count="10"><span><span></span><span></span></span>All Projects</a>
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