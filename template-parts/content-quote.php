  			<article class="post-single">
              <div class="post-info">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <h6 class="upper"><span>By</span><a href="<?php the_permalink(); ?>"> <?php the_author(); ?></a><span class="dot"></span><span><?php the_time('d M,Y'); ?></span><span class="dot"></span><a href="<?php the_permalink(); ?>" class="post-tag"><?php the_tags(); ?></a></h6>
              </div>
              <div class="post-media"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
              <div class="post-body">
                 <blockquote class="italic">
                  <?php the_content(); ?>
                </blockquote>
              </div>
            </article>