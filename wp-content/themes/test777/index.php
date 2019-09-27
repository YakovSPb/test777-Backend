<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test777
 */

get_header();
?>


<div class="container">
		<div class="main">
			<h1 class="h1"><?php echo $redux_demo['title-text']; ?></h1>
	<?php echo $redux_demo['main-textarea']; ?>

			<div class="accent-text">	<?php echo $redux_demo['desc-text']; ?></div>
				<?php echo $redux_demo['button-textarea']; ?>
		</div>
	</div>
<div class="container">
	<div class="comments">
		<h2 class="h2">			<?php echo $redux_demo['title_h2']; ?></h2>
	</div>

	<div class="comments__wrap">
		


		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<a class="comments__link" href="<?php the_permalink(); ?>">
		<div class="comments__item">
			<div class="comments__img">
			<?php echo get_the_post_thumbnail(get_the_ID(), 'post_customthumb'); ?>
			</div>
			<div class="comments__body">
				<div class="comments__title">
					<?php the_title(); ?>
				</div>
				<div class="comments__text">	
					<?php the_content(); ?>
				</div>
			</div>	
		</div>
		</a>


		<?php
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>



	</div>


</div>

<div class="container">
	<div class="office-hours">
		<h2 class="h2"><?php echo $redux_demo['title-clock']; ?></h2>
		<div class="office-hours__body">
			<table class="office-hours__table">
				<tr>
					<td><?php echo $redux_demo['one-clock']; ?></td>
					<td><?php echo $redux_demo['one-clock-value']; ?></td>
				</tr>
				<tr>
					<td><?php echo $redux_demo['two-clock']; ?></td>
					<td><?php echo $redux_demo['two-clock-value']; ?></td>
				</tr>
				<tr>
					<td><?php echo $redux_demo['three-clock']; ?></td>
					<td><?php echo $redux_demo['three-clock-value']; ?></td>
				</tr>
			</table>
		</div>
	</div>
</div>


<?php
get_footer();
