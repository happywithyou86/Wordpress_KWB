
<!--CONTENT-->
<div id="content">

<div class="center">
    <div id="posts" class="single_page_post">
    <div class="post_wrap">
              <!--THE POST-->
                <?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>
                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                     
                       <div class="post_content">
                        <h2 class="postitle"><a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        
                        <?php the_content(); ?>
                    
                    </div>      

                       
                    </div>
    
                    <?php endwhile ?>
                    
                <?php endif ?>
                
            </div>
</div>
  
</div>
</div>
