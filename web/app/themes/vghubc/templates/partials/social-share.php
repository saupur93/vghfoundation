        <div class="share-options">
          <!-- <span>Share</span> -->
          <ul>
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post->ID); ?>" rel="Facebook" class="share" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/intent/tweet?url=<?php echo get_permalink($post->ID); ?>&text=<?php print get_the_title(); ?>" rel="Twitter" class="share" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink($post->ID); ?>" rel="LinkedIn" class="share" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>