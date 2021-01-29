<?function landscape_services_list() {?>
    <ul class="services-list">
       <?php 
          $args = array(
              'post_type' => 'landscape_services',
          );
          $services = new WP_Query($args);

          while($services->have_posts()): $services->the_post();
       ?>
      <li class="site-service card gradient">
         <?php the_post_thumbnail(); ?>
            <div class="card-content">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>  
            </div>
       
       </li>

        <?php endwhile; wp_reset_postdata();?>
    </ul>
<?php }