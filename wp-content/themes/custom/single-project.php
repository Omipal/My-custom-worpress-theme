<?php get_header(); ?>
<main>

<div class="main-scroll">

    <!--Get Meta data-->
    <?php   if(has_post_thumbnail()){?>
    <img width="4293" height="2862"
         src="<?php the_post_thumbnail_url(); ?>" alt=""/> <!--current post Thumbnail-->
      <?php } ?>
    <div class="single-project row-col-12">

        <div class="col-sm-4 col-md-push-2 no-padding-left">
            <h2><?php the_title(); ?></h2>
        </div>


        <div class="col-sm-2 col-md-push-2 no-padding-left">
            <div class="atail-sharing"
                 data-text="<?php the_title(); ?>"
                 data-url="<?php echo get_the_permalink(); ?>"></div>
        </div>

    </div>

    <div class="row-col-12">
        <div class="col-md-6 col-md-push-2 no-padding-left">
            <p>
              <?php the_content(); ?>
            </p>
        </div>
    </div>

    <div class="row-col-12">
          <?php if( get_previous_post()) {?>
          <?php $prev_post = get_previous_post(); ?>  
        <div class="col-xs-6 col-md-4  col-md-push-2 no-padding">
            <div class="single-project-prev atail-project-nav ">

                <a href="<?php echo get_the_permalink($prev_post->ID ); ?>"
                   class="single-project-link-arrow">
                   <span class="single-project-arrow">
                      <svg version="1.1"
                           xmlns="http://www.w3.org/2000/svg"
                           x="0px"
                           y="0px"
                           width="57.143px"
                           height="34.454px"
                           viewBox="0 0 57.143 34.454"
                           enable-background="new 0 0 57.143 34.454"
                           xml:space="preserve">
                          <g>
                              <g>
                                  <polygon
                                          fill=""
                                          points="51.908,17.599 46.891,13.1 46.891,17.094 6.904,17.094 6.904,18.094 46.891,18.094 46.891,22.099">
                                  </polygon>
                              </g>
                          </g>
                      </svg>
                    </span>
                    <span>Previous project</span>
                </a>

                <a href="<?php echo get_the_permalink($prev_post->ID ); ?>"
                   class="single-project-info">
                    <div class="atail-project-image">
                      <?php if(has_post_thumbnail($prev_post)){ ?>

                     
                        <img width="521" height="303" src="<?php echo get_the_post_thumbnail_url($prev_post); ?>" alt="" />
                        <?php   } ?>
                    </div>
                    <h4><?php echo get_the_title($prev_post); ?></h4>
                </a>

            </div>
        </div>
        <?php } ?>
        <?php if( get_next_post()) {?> 
          <?php $next_post = get_next_post(); ?>    
        <div class="col-xs-6 col-md-4  col-md-push-2 no-padding">
            <div class="single-project-next atail-project-nav ">

                <a href="<?php echo get_the_permalink($next_post->ID ); ?>"
                   class="single-project-link-arrow">
                    <span>Next project</span>
                        <span class="single-project-arrow">
                        <svg version="1.1"
                             xmlns="http://www.w3.org/2000/svg"
                             x="0px"
                             y="0px"
                             width="57.143px"
                             height="34.454px"
                             viewBox="0 0 57.143 34.454"
                             enable-background="new 0 0 57.143 34.454"
                             xml:space="preserve">
                            <g>
                                <g>
                                    <polygon
                                        fill=""
                                        points="51.908,17.599 46.891,13.1 46.891,17.094 6.904,17.094 6.904,18.094 46.891,18.094 46.891,22.099"></polygon>
                                </g>
                            </g>
                        </svg>
                    </span>
                </a>

                <a href="<?php echo get_the_permalink($next_post->ID ); ?>"
                   class="single-project-info">
                    <div class="atail-project-image">
                    <?php if(has_post_thumbnail($next_post)){ ?>
                  <img width="521" height="303" src="<?php echo get_the_post_thumbnail_url($next_post); ?>" alt="" />
                  <?php   } ?>
                    </div>
                    <h4><?php echo get_the_title($next_post); ?></h4>
                </a>

            </div>
        </div>
        <?php } ?>

    </div>

    <!-- post navigation -->

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
<?php get_footer(); ?>