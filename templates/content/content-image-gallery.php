<?php if( get_field('images_list') ): ?>
<ul class="clearing-thumbs" data-clearing>
  <?php while( has_sub_field('images_list') ) : ?>
  <?php $picture = get_sub_field('image'); ?>
  <li style="margin: 0 0 2em 0" class="column medium-4 large-3 left">
  	<a href="<?php echo $picture[sizes][large]; ?>">
  		<img class="th" src="<?php echo $picture[sizes][medium]; ?>" data-caption="<?php echo $picture[caption]; ?>" >
  	</a>
  </li>
  <?php endwhile; ?>
</ul>
<?php endif; ?>