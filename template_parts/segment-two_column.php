<?php
//Two Column Segment
if(get_sub_field('segment_display') == 'Two Column'):
?>

<div class="segment-two_column">
  
  <?php
  //Text Fields
  $title = get_sub_field('title');
  $body = get_sub_field('body');
  
  //Set Content Class by Text Position
  if(get_sub_field('text_position') == "Left of Media"){
    $content_class = 'content_with_left_text';
  }else{
    $content_class = 'content_with_right_text';
  }  
  ?>

  <div class="two_column-<?php echo $content_class;?>">
    <div class="<?php echo $content_class;?>-text">
    
      <?php
      //Segment Title
      if($title)
        echo '<div class="text-title">'.$title.'</div>';
        
      //Segment Body
      if($body)
        echo '<div class="text-body">'.$body.'</div>';
      ?>   
       
    </div>
    <div class="<?php echo $content_class;?>-media">
        
      <?php  
      //Media
      get_template_part('template_parts/media', 'grid');
      get_template_part('template_parts/media', 'portrait_and_landscape');
      get_template_part('template_parts/media', 'single_media_item');
      get_template_part('template_parts/media', 'slideshow');
      ?>
      
    </div>
  </div>
</div>

<?php
//Two Column Segment
endif;
?>