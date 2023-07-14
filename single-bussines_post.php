


<?php get_header(); 
?>

<div class="profile">
<div class="container">
<div class="bussines_profile">

<?php if( has_post_thumbnail() ): ?>
		<?php endif; ?>
			<div class="foto">
			<?php the_post_thumbnail('thumbnail'); ?></div>

<div class="bussines-content">
    <div class="content-profile">
<div class="emri_reviews">
    <div class="bussines-emri">
<h2> <?php the_field('emri'); ?> </h2>
</div>
<div class="bussines-reviews">
    <p> Reviews: </p>
 

<?php
$reviews = get_field('reviews');
if ($reviews) {
    $max = $reviews;
    $silver = 5 - $max; 
    for ($i = 0; $i < $max; $i++) {
        echo '<i class="fa-solid fa-star" style="color: gold;"></i>';
    }

    for ($i = 0; $i < $silver; $i++) {
        echo '<i class="fa-solid fa-star" style="color: gray;"></i>';
    }
}
?>
</div>
</div>
<div class="text-bussines">
<h3> About Us </h3> <span>  <?php the_field('informata'); ?> </span>
</div>


<div class="contact-bussines">
    <div class="left-info">
      
        <h4>Email : </h4>   <span>   <?php the_field('email'); ?></span>
    </div>
    <div class="right-info">
       
        <h4>Tel:  </h4> <span><?php the_field('telefoni'); ?></span>
    </div>
  
</div>
</div>
</div>
</div>
<div id="comments" class="comments-area">
    <?php comment_form(); ?>
    
</div>

<div class="komente">
    <?php
    if (get_comments_number() > 0) {
       
        $comments = get_comments(array(
            'post_id' => get_the_ID(),
            'status' => 'approve', 
            
        ));

        if ($comments) {
            foreach ($comments as $comment) {
                ?>
                <div class="comment-content">
                    <div class="comment-meta">
                        <span class="comment-time"><?php echo get_comment_date('F j, Y', $comment->comment_ID); ?></span>
                    </div>
                    <div class="comment-text">
                       
                        <span class="comment-author"><?php echo $comment->comment_author; ?> :</span>  <?php echo $comment->comment_content; ?>
                    </div>
                </div>
                <?php
            }
        }
    }
    ?>
</div>

</div>
<?php
include 'comment.php'; ?>



   


<?php get_footer(); ?>

