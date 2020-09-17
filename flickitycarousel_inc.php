<?php
/**
 * KADM 2 flickity system
 *
 * @package KADM_2
 */
?>

<?php 

if( have_rows('flick_repeater') ):

// vars
// 
// flick_title
// 
//  flick_repeater
// 		flick_img

$flicktitle		=	get_field('flick_title');
?>



<h2 class='white carousel-title tac'> <?php echo $flicktitle?> </h3>

<div class="main-carousel" data-flickity='{ "cellAlign": "center", "contain": true, "wrapAround": true }'>

<?php
while( have_rows('flick_repeater')):the_row();

$flickimg		= get_sub_field('flick_img');

?>
				

							<div class="responsive-image-wrap-slide carousel-cell">
								<img src='<?php echo $flickimg ?>'>
							</div>

<?php endwhile?>
						</div>
					



<?php endif; ?>

<!-- below is CSS to get this to work after getting flickity happy -->
.responsive-image-wrap-slide {
    
    img {
        max-height: 55vh;
        margin-bottom: 1rem;
        box-shadow: -5px 0px 15px #000000;
        @media (max-width:992px){
            max-height: 35vh;

        }
        @media (max-width:600px){
            max-height: 25vh;

        }

        
        
    }
}
