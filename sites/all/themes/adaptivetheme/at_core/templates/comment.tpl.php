<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php print $picture; ?>
  
  <!--original code in overrides folder-->

  <div style="margin-left:<?php print $image_width; ?>px;" class="comment-content">
  
 
    <div class="comment-text"<?php print $content_attributes; ?>>
    
     <div class="user-signature clearfix">
          <div align="left"><?php print t('By'); ?> <strong><?php print $author; ?></strong>
            <?php if ($signature): ?>
            --
            <?php print $signature; ?>
            <?php endif; ?>
          </div>
     </div>
        
      <span style="font-size: 12px;"> 
      
  
	  <?php // We hide the comments and links now so that we can render them later.
      hide($content['links']);
     print render($content);
      ?></span>
       
    </div>

 <!--mine. added font-size to below -->
<span style="font-size: 12px;">
    <?php print render($content['links']) ?></span>

 
    <div class="arrow-border"></div><!--make the triangle using css only-->
    <div class="arrow"></div>
  </div><!--end comment content-->
</div> <!-- end comment -->