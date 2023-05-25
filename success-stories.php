<?php
/*
Template Name: Success Stories
 */
get_header();?>

<div class="container">
    <div class="both2">
<div class="row">
    <?php
// Check value exists.
if( have_rows('success_stories') ):

    // Loop through rows.
    while ( have_rows('success_stories') ) : the_row();



    if( get_row_layout() == 'success_heading' ){
    $title=get_sub_field('title');
    $content=get_sub_field('content');
    ?>
 <div class="container">
<div class="row">
   <div class="col-lg-12">
   <p class="stories"><?php echo $title;?></p>
   <p class="storiess"><?php echo $content;?></p>

    </div>
</div>
  
 <?php   

}
  if( get_row_layout() == 'textarea_with_image' ){

    

    $title=get_sub_field('title');
    $button_title=get_sub_field('button_title');
    $button_title2=get_sub_field('button_title2');
    $content=get_sub_field('content');
    $images=get_sub_field('images');
    $picture = $images['sizes']['large'];
    $image_side=get_sub_field('image_side');
    ?>
            <div class="row">
                <?php if($image_side =='left'):?>
                <div class="col-lg-6">
                <img class="set-image" src="<?php echo $picture;?>" class="img-fluid">
                </div>
                <div class="col-lg-6">
                   <div class="stories">
                   <p class="h-bold"><?php echo $title;?></p>
                    <p class="content1"><?php echo $content;?></p>
                    
                    <button class="btn2"><?php echo $button_title;?></button>
                   </div>
                  
                </div>
                <?php else:?>
                <div class="col-lg-6">
                <div class="stories">
                   <p class="h-bold"><?php echo $title;?></p>
                    <p class="content1"><?php echo $content;?></p>
                    <button class="btn2"><?php echo $button_title;?></button>
                   </div>
                </div>
                <div class="col-lg-6">
                    <img class="set-image" src="<?php echo $picture;?>" class="img-fluid">
                </div>
                <?php endif;?>

                <?php }


// End loop.
endwhile;

// No value.
else :
// Do something...
endif;
?>
</div>
</div>
</div>
<?php
get_footer();
?>
